<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function home()
    {
        return view('/home');
    }

    public function registerView()
    {
        return view('registration.register');
    }
    public function loginView()
    {
        return view('registration.login');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'firstName' => ['required', 'min:3', 'max:16'],
            'lastName' => ['required', 'min:3', 'max:16'],
            'username' => [
                'required', 'min:3', 'max:15',
                Rule::unique('users', 'username')
            ],
            'email' => ['required', 'email', Rule::unique('users', 'username')],
            'password' => ['required', 'min:8', 'confirmed']
        ]);
        $data['password'] = bcrypt($data['password']);
        User::create($data);
        return redirect(route('user.login'))->with('succes-register', 'Uspješno ste se registrovali , molimo da se sada ulogujete');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'loginusername' => 'required',
            'loginpassword' => 'required'
        ]);

        if (auth()->attempt([
            'username' => $data['loginusername'],
            'password' => $data['loginpassword']
        ])) {
            $request->session()->regenerate();
            return redirect(route('admin.create'))->with('succes-login', 'Uspješno ste se ulogovali');
        } else {
            return redirect('/')->with('failed-login', 'Neuspješan login , pokušajte ponovo');
        }
    }



          public function logout ()
            {
                auth()->logout();
                return redirect('/');
            }
}
