<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUser;
use App\Http\Requests\VerifyLogin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ForumController extends Controller
{
    public function welcome()
    {
        return view('forum.welcome');
    }

    public function login()
    {
        return view('forum.login');
    }

    public function create()
    {
        return view('forum.register');
    }

    public function logout()
    {
        Auth::logout();
        Session::flash('logout', 'Usuário deslogado');
        return redirect()->route('welcome-escola');
    }

    public function index()
    {
        return view('forum.index');
    }

    public function verifylogin(VerifyLogin $request)
    {
        $user = User::where('name', $request['name'])->first();
        Auth::login($user);
        $request->session()->regenerate();
        return redirect()->intended('/forum');
    }

    public function user()
    {
        $user = auth()->user();
        return view('forum.user', ['user' => $user]);
    }

    public function store(StoreUpdateUser $request)
    {
        $data = $request->validated();
        $data['password'] = bcrypt($request->password);

        $user = User::create($data);

        if (!is_null($user))
        {
            Session::flash('success', 'Registro bem-sucedido');
            return redirect()->route('welcome-escola');
        } else {
            return "Deu ruim";
        }

        
    }
}
