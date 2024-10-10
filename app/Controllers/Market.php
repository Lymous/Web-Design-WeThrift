<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Marketmodel;

class Market extends BaseController
{
    protected $mrkt;
    public function __construct() 
    {
        $this->mrkt=new Marketmodel();    
    }
    public function index()
    {
        $data = [
            'title' => 'Daftar Market',
            'daftar_market' => $this->mrkt->findAll(),
        ];
        return view('market', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Id',
            'buku' => $this->mrkt->Find($id),
            'validation' =>  session()->getFlashdata('_ci_validation_errors') ?? [],
        ];
        return view('', $data);
    }

}
