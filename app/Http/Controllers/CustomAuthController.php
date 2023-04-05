<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Session as FacadesSession;

class CustomAuthController extends Controller
{


    public function index()
    {
        // return view('home');
        return view('admin.login');
    }

    public function customLogin(Request $request)
    {

        // dd($request->all);

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin/dashboard')
                ->withSuccess('Signed in');
        }

        return redirect("admin/dashboard")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('admin.registration');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("admin/dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => FacadesHash::make($data['password'])
        ]);
    }
    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect("admin/login")->withSuccess('You are not allowed to access');
    }


    public function signOut()
    {
        FacadesSession::flush();
        Auth::logout();

        return Redirect('admin/login');
    }
}
