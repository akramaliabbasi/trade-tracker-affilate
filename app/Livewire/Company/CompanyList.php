<?php

namespace App\Livewire\Company;

use Livewire\Component;
use App\Models\Company; // Assuming your Company model is in the 'app/Models' directory

class CompanyList extends Component
{
    public $companies;

    public function mount()
    {
        // Load companies from the database
        $this->companies = Company::all();
    }

    public function render()
    {
        return view('livewire.company.company-list');
    }
}
