<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showSignup()
    {
        return view('signup');
    }

    public function showLogin()
    {
        return view('login');
    }
    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
    
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;  // Store plain password (not hashed)
        $user->save();
    
        return redirect('login')->with('success', 'Signup successful! Please log in.');
    }
    
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $user = User::where('email', $request->email)->first();
    
        // Directly compare passwords without hashing
        if ($user && $user->password === $request->password) {
            return redirect('/dashboard')->with('success', 'Logged in successfully!');
        }
    
        return back()->withErrors(['email' => 'Invalid credentials.']);
    }
    



}

