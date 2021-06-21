<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('customer.home');
    }

    public function index(){
        return view('customer.index');
    }

    public function login(){
        return view('customer.login');
    }
    public function optionproduct(){
        return view('customer.chonLSP');
    }
    public function addproduct(){
        $var = $_GET['heard'];
        if ($var == 3){
            $var="Phụ kiện";
        }
        if($var == 2){
            $var="Ipad";

        }if($var == 1){
            $var="Iphone";
        }
        return view('customer.addproduct')->with([
            'var'=>$var,
        ]);

    }
    public function themkh(){
        return view('customer.themkh');
    }
}
