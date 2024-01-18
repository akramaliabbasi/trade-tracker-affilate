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

    public function mount($company, $symbol="null")
    {
		
		
		
		
		$this->company = $company;

        // Fetch real-time stock details using the Alpha Vantage API (replace YOUR_API_KEY)
        $response = Http::get("https://www.alphavantage.co/query", [
            'function' => 'GLOBAL_QUOTE',
            'symbol' => $symbol,
            'apikey' => 'H51G5NFZB6WCKW4F',
        ]);

        $this->stockDetails = $response->json()['Global Quote'] ?? null;
       
            // Log or handle the error if the response is not successful
           // logger()->error("API Request failed: " . $response->status());

            // Fetch data from the database as a fallback
            // Adjust the model and column names based on your actual database structure
            $companyFromDatabase = Company::where('id', $company)->first();
          

            // Check if the company data is available in the database
            if ($companyFromDatabase) {
                // Use data from the database as a fallback
                $this->company = $companyFromDatabase;

            } else {
                // Handle the case where data is not available in the API or database
                $this->company = null;
            }

    }

}