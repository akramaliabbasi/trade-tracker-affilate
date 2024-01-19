<?php

namespace App\Livewire\Company;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

use App\Models\Company;

use Hash;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

class CompanyDetails extends Component
{
   public $company;
    public $symbol;
    public $stockDetails;

	
	  // Static list of companies for demonstration
    public $staticCompanies = [
        'Apple Inc.',
        'Microsoft Corporation',
        'Amazon.com Inc.',
        'Google LLC',
    ];
	
	
    public function render()
    {
		 return view('livewire.company.company-details')
            ->layout('layouts.app', ['title' => 'Dashboard']);
       
    }

    public function mount($company)
    {
		

		$company = Company::where('id', $company)->first();

		// Check if the company data is available in the database
		if ($company) {
			// Use data from the database as a fallback
			$this->company = $company;

		} else {
			// Handle the case where data is not available in the API or database
			$this->company = null;
		}
		
		 $this->company = $company;

		$response = Http::get("https://www.alphavantage.co/query", [
    'function' => 'TIME_SERIES_INTRADAY',
    'symbol' => $company->stock_symbol,
    'interval' => "5min",
    'apikey' => 'H51G5NFZB6WCKW4F',
]);

// Check if the request was successful (status code 200)
if ($response->successful()) {
    // Decode the JSON response
    $responseData = $response->json();

    // Check if 'Time Series (5min)' exists in the response
    $timeSeriesData = $responseData['Time Series (5min)'] ?? null;

    // Check if there is any data in the time series
    if ($timeSeriesData) {
        // Access the first entry in the time series
        $firstEntry = reset($timeSeriesData);

        // Access the stock details from the first entry
        $this->stockDetails = [
            'open' => $firstEntry['1. open'] ?? null,
            'high' => $firstEntry['2. high'] ?? null,
            'low' => $firstEntry['3. low'] ?? null,
            'close' => $firstEntry['4. close'] ?? null,
            'volume' => $firstEntry['5. volume'] ?? null,
        ];
    } else {
        // Handle the case where there is no data in the time series
        $this->stockDetails = null;
    }
} else {
    // Handle the case where the request was not successful
    $this->stockDetails = null;
    $errorMessage = $response->status() . ': ' . $response->body();
    // Log or handle the error message as needed
    // You can also throw an exception or return an error response
}

//dd($this->stockDetails);

//dd($this->stockDetails);
     
          		

    }

}