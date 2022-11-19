<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    



    /*
    |--------------------------------------------------------------------------
    |                             INDEX METHOD
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        return view('auth.login');
    }




    /*
    |--------------------------------------------------------------------------
    |                             POST LOGIN METHOD
    |--------------------------------------------------------------------------
    */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('home')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }




    /*
    |--------------------------------------------------------------------------
    |                             REGISTER METHOD
    |--------------------------------------------------------------------------
    */
    public function register()
    {
        return view('auth.register');
    }

    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("/");
    }




    /*
    |--------------------------------------------------------------------------
    |                             CREATE METHOD
    |--------------------------------------------------------------------------
    */
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

    }




    /*
    |--------------------------------------------------------------------------
    |                             HOME METHOD
    |--------------------------------------------------------------------------
    */
    public function home()
    {
        if (Auth::check()) {
            return redirect('home');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }




    /*
    |--------------------------------------------------------------------------
    |                             LOGOUT METHOD
    |--------------------------------------------------------------------------
    */
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
