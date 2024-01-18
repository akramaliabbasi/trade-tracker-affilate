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

        // Fetch real-time stock details using the Alpha Vantage API (replace YOUR_API_KEY)
        $response = Http::get("https://www.alphavantage.co/query", [
            'function' => 'GLOBAL_QUOTE',
            'symbol' => $company->stock_symbol,
            'apikey' => 'H51G5NFZB6WCKW4F',
        ]);

        $this->stockDetails = $response->json()['Global Quote'] ?? null;
    }

    public function render()
    {
         return view('livewire.company-details', [
            'stockDetails' => $this->stockDetails,
        ]);
    }
	
	
}