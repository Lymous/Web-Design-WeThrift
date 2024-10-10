<?php

namespace App\Controllers;
use App\Models\Cart;
use App\Models\Marketmodel;

class Cartada extends BaseController
{
    protected $cart;
    protected $market;
    public function __construct() 
    {
        $this->cart=new Cart();    
        $this->market=new Marketmodel();    
    }
    public function index()
    {
        $cartList = $this->cart->where(['id_user' => session()->get('id')])->findAll();

        $barang = [];

        foreach ($cartList as $c) {
            array_push($barang, $this->market->where(['id'=>$c['id_produk']])->first());
        }
        $data = [
            'carts' => $barang,
        ];

        return view('cartada', $data);
    }
    public function add($id_market)
    {
        $this->cart->save(['id_user' => session()->get('id'),'id_produk'=>$id_market]);
        return redirect()->to('cartada');
    }
}
