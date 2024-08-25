<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required'
        ]);

        if ($validator->fails()) {
           echo "validation Failed";
        } else {
            
           $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role,
            ]);
           
            if ($user){
                
                return redirect()->route('login')->with('success', 'User created successfully.');
    
            } else {

                return redirect()->route('register')->with('error', 'User registration failed.');

            }
        }
        
       
    }

    public function login(Request $request) {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
     
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role == "Admin"){
                return redirect()->route('admin.dashboard')->with('success', 'User loggedIn successfully.');
            }
            else if ($user->role == "Lecturer"){
                return redirect()->route('lecturer.dashboard')->with('success', 'User loggedIn successfully.');
            } else{
                return redirect()->route('student.dashboard')->with('success', 'User loggedIn successfully.');
            }

        } else {
        
        return redirect()->route('login')->with('error', 'Invalid user.');
    
        }
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Log out the user

        // Invalidate the session and regenerate the CSRF token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login'); // Redirect the user to the login page
    }
}

