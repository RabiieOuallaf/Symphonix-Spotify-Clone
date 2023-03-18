<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    // Load the register page 
    public function registerPage() {
        return view('users.registerPage');
    }
    // load the login page 

    public function loginPage() {
        return view('users.loginPage');
    }
    


    // store the user's data (register)
    public function storeUserData(Request $request) {
       
        $formFields = $request->validate([
            'username' => ['required', 'min:2',Rule::unique('users', 'username')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required'
        ]);
        
        // Hash the password 
        
        $formFields['password'] = bcrypt($formFields['password']);
        
        
        
        // Create the user 
        
        $user = User::create($formFields);
        
        if ($user) {

            auth()->login($user);
            return redirect('/')->with('message', 'You logged in successfully!');
        } else {
            return redirect('/register')->with('error', 'Failed to create user. Please try again.');
        }

    }

    // validate user's credentials (login)

    public function credentialsVerification(Request $request) {
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
    
            return redirect()->intended('/');
        }
    
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ]);
    }

    // logout 

    public function logOut(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'You logedout!');
    }
}
