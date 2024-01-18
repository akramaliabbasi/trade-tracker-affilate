<?php

namespace App\Livewire;

use Livewire\Component;
use Hash;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

class LoginRegister extends Component
{
    public $users, $email, $password, $name;
    public $registerForm = false;

    public function render()
    {
		
        return view('livewire.login-register');
    }

    private function resetInputFields(){
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function login()
    {
		
        $validatedDate = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if(\Auth::attempt(array('email' => $this->email, 'password' => $this->password))){
                session()->flash('message', "You are Login successful.");
				return redirect()->to('/dashboard');
        }else{
            session()->flash('error', 'email and password are wrong.');
        }
    }

    public function register()
    {
        $this->registerForm = !$this->registerForm;
    }

    public function registerStore()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $this->password = Hash::make($this->password); 

        User::create(['name' => $this->name, 'email' => $this->email,'password' => $this->password]);

        session()->flash('message', 'Your register successfully .');

        $this->resetInputFields();
		return redirect()->to('/login');
    }
	
	// Customize the redirection after login
    protected function authenticated(\Illuminate\Http\Request $request, $user)
    {
        // Your logic for redirection after successful login
        return redirect()->intended(route('dashboard'));
    }
	
	public function logout()
    {
        Auth::logout();

        return Redirect::to(Route('login'));
    }
	
}