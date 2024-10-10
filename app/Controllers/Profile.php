<?php
    

namespace App\Controllers;
use App\Models\User;

class Profile extends BaseController
{
    protected $user;
    public function __construct() 
    {
        $this->user=new User();    
    }
    public function index(): string
    {
        return view('profile');
    }
    public function edit(): string
    {
        return view('editprofile');
    }
    public function update()
    {
        $userlama = $this->user->find(session()->get('id'));
        if ($userlama['email'] == $this->request->getVar('email'))
            $ruleEmail = 'required';
        else $ruleEmail = 'required|is_unique[user.email]';
        

        if (!$this->validate([
            'email' => [
                'rules' => $ruleEmail,
                'errors' => [
                    'required' => 'Email harus diisi',
                    'is_unique' => 'Email telah terdaftar'
                ]
            ],
            'first_name' => [
                'rules' => 'required',
                'errors' => ['required' => 'First Name harus diisi']
            ],
            'last_name' => [
                'rules' => 'required',
                'errors' => ['required' => 'Last Name harus diisi']
            ],
            'no_hp' => [
                'rules' => 'required',
                'errors' => ['required' => 'Nomor HP harus diisi']
            ],
            'password' => [
                'rules' => 'required',
                'errors' => ['required' => 'Password harus diisi',]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => ['required' => 'Alamat harus diisi']
            ],
        ])) {
            return redirect()->back()->withInput();
        }

        if ($userlama['password'] == $this->request->getVar('password')) {
            $password = $userlama['password'];
        } else {
            $password = md5($this->request->getVar('password'));
        }
        $userbaru = [
            'id' => $userlama['id'],
            'first_name' => $this->request->getVar('first_name'),
            'last_name' => $this->request->getVar('last_name'),
            'email' => $this->request->getVar('email'),
            'password' => $password,
            'alamat' => $this->request->getVar('alamat'),
            'no_hp' => $this->request->getVar('no_hp'),
        ];

        $this->user->save($userbaru);
        session()->set($userbaru);
        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/profile');
    }
}
