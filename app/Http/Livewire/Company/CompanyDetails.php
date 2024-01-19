<?php

namespace App\Http\Livewire\Company;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use App\Models\Company;

class CompanyDetails extends Component
{
    public $company;

    public $stockDetails;

    public function mount(Company $company)
    {
       $this->company = $company;

		$response = Http::get("https://www.alphavantage.co/query", [
			'function' => 'TIME_SERIES_INTRADAY',
			'symbol' => $company->stock_symbol,
			'interval' => "5min",
			'apikey' => 'H51G5NFZB6WCKW4F',
		]);

		$data = $response->json();
		$this->stockDetails = $data['Time Series (5min)'] ?? null;


    }

    public function render()
    {
         return view('livewire.company-details', [
            'stockDetails' => $this->stockDetails,
        ]);
    }
	
	
}