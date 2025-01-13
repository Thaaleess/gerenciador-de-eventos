<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterFormRequest;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        if (Auth::check()) {
            $user = Auth::user();
            Auth::login($user);
            $username = $user->name;

            return to_route('events.index')->with('success', "Bem-vindo, $username!")->with('user', $user);
        } else {
            return view('auth.index');
        }
    }

    public function login(Request $request){
        $login = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ], [
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'Por favor, insira um endereço de e-mail válido.',
            'password.required' => 'O campo "senha" é obrigatório.',
            'password.min' => 'A senha deve ter pelo menos 8 caracteres.',
        ]);

        if (!Auth::attempt($login)) {
            return redirect()->back()->withErrors([
                'email' => 'Usuário ou senha inválido.',
            ])->withInput();
        }
        $user = Auth::user();
        $username = $user->name;

        return to_route('events.index')->with('success', "Bem-vindo, $username!")->with('user', $user);
    }

    public function register(){
        return view('auth.register');
    }

    public function signup(RegisterFormRequest $request){
        $user = $request->validated();
        $user['password'] = Hash::make($user['password']);
        User::create($user);

        return to_route('auth.index')->with('success', 'Cadastro realizado com sucesso!');
    }

    public function logout(){
        Auth::logout();

        return to_route('auth.index');
    }
}
