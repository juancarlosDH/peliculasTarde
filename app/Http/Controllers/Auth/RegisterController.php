<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    //-----Trait
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $mensajes = [
            'required' => 'Requerido',
            'string' => 'dene ser un texto',
            'email' => 'Email invalido',
            'email.unique' => 'Ya estas registrado este email',
            'image' => 'Imagen invalida',
            'min' => 'Al menos :min carateres',
            'password.confirmed' => 'Los Passwords no son iguales',
            'avatar.max' => 'la imagen no debe pesar mas de 2MB'
        ];
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'avatar' => 'nullable|image|max:2048'
        ], $mensajes);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $imagen = '';
        if (isset($data['avatar'])) {
            $imagen = $data['avatar']->store('public');
            $imagen = basename($imagen);
        }
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'avatar' => $imagen,
        ]);
    }

    public function showRegistrationForm()
    {
        return view('register');
    }





}
