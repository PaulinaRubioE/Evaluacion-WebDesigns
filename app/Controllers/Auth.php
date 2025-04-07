<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Auth extends Controller
{
    private $validUser = 'admin@example.com';
    private $validPassword = '123456';

    public function index()
    {
        return view('auth/login');
    }

    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        if ($email === $this->validUser && $password === $this->validPassword) {
            return redirect()->to('/dashboard');
        }

        return redirect()->back()->with('error', '¡Ups! Creo que algo salió mal.');
    }

    public function logout()
    {
    session()->destroy(); // 🔒 Elimina la sesión
    return redirect()->to('/')->with('message', 'Sesión cerrada correctamente.');
    }   
}
