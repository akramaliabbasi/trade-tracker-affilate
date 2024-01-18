<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\LoginRegister;
use App\Livewire\Dashboard;
use App\Livewire\Company\AddCompany;
use App\Livewire\Company\CompanyDetails;
use App\Livewire\Company\CompanyList;
use App\Models\Company;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});





Route::get('/login', LoginRegister::class)->name('login');
Route::post('/login', [LoginRegister::class, 'login']);

Route::get('/register', LoginRegister::class)->name('register');
Route::post('/register', [LoginRegister::class, 'register']);

Route::post('/logout', [LoginRegister::class, 'logout'])->name('logout');


Route::middleware(['auth', 'guest'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
	Route::post('/add-company-store', [AddCompany::class, 'addCompanyStore'])->name('add.company.store');
});


Route::get('/dashboard', Dashboard::class)->name('home');
Route::get('/add-company', AddCompany::class)->name('add.company');


//Route::get('/company/{company}', CompanyDetails::class);
Route::post('/add-company-store', [AddCompany::class, 'addCompanyStore'])->name('add.company.store');

//Route::get('/companies/{company}', [CompanyList::class, 'show'])->name('company.show');

Route::get('/companies/details/{company}', CompanyDetails::class)->name('company.details');





//Route::livewire('/register', Register::class)->name('register'); //old way 
