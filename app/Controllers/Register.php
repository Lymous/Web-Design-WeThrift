<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class Register extends BaseController
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
        return view('register', $data);
    }

    public function regist()
    {
        if (!$this->validate([
            'first_name' => [
                'rules' => 'required',
                'errors' => ['required' => 'First Name harus diisi']
            ],
            'last_name' => [
                'rules' => 'required',
                'errors' => ['required' => 'Last Name harus diisi']
            ],
            'email' => [
                'rules' => 'required|is_unique[user.email]',
                'errors' => [
                    'required' => 'Email harus diisi',
                    'is_unique' => 'Email sudah terdaftar'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password harus diisi',
                ]
            ],
        ])) {
            return redirect()->to('/register')->withInput();
        }
        $this->user->save([
            'first_name' => $this->request->getVar('first_name'),
            'last_name' => $this->request->getVar('last_name'),
            'email' => $this->request->getVar('email'),
            'password' => md5($this->request->getVar('password')),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/login');
    }


}