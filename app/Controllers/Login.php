<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class Login extends BaseController
{protected $user;
    public function __construct() 
    {
        $this->user=new User();    
    }
    public function index()
    {
        if(session()->get('id')){
            return redirect()->to('/home');
        }
        $data = [
            'title' => 'Login',
            'validation' => session()->getFlashdata('_ci_validation_errors') ?? [],
        ];
        // dd($data);
        return view('login', $data);
    }

    public function logging()
    {
        if (!$this->validate([
            'email' => [
                'rules' => 'required|is_not_unique[user.email]',
                'errors' => [
                    'required' => 'Email harus diisi',
                    'is_not_unique' => 'Email tidak terdaftar'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password harus diisi',
                ]
            ],
        ])) {
            return redirect()->to('/login')->withInput();
        }
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $this->user->getuser($email);

        if ($data['password'] !== md5($password)) {
            session()->setFlashdata(['_ci_validation_errors' => ['password' => 'Password tidak valid']]);
            return redirect()->to('/login')->withInput();
        }

        session()->set($data);
        return redirect()->to('/home');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}