<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return 'Ini adalah halaman home dari HomeController';
    }

    public function product($id){
        return 'Ini adalah halaman produk dengan ID ' .$id;
    }
}
