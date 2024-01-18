<?php

namespace App\Livewire\Company;

use Livewire\Component;
use App\Models\Company;



class AddCompany extends Component
{
    public $logo;
    public $name;
    public $description;
    public $address;
	public $stockSymbol; // Add this line

    
	public function render()
    {
		
        return view('livewire.company.add-company')
            ->layout('layouts.app', ['title' => 'Add Comapny Details']);
    }

    public function addCompanyStore()
    {
        $this->validate([
            'logo' => 'required|string',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string',
			'stock_symbol' => 'required|string', 
        ]);

        Company::create([
            'logo' => $this->logo,
            'name' => $this->name,
            'description' => $this->description,
            'address' => $this->address,
			'stock_symbol' => $this->stock_symbol, 
        ]);

        session()->flash('message', 'Company added successfully!');
        $this->reset();
		//return redirect()->to('/dashboard');
		
		
    }
}