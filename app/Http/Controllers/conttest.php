<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class conttest extends Controller
{
    function index(){
    	return view('index');
    }

    function tambah(){
    	echo "contoh controler fx tambah";
    }
    function page2(){
    	return view('page2');
    }
    function page3(){
    	return view('page3');
    }
    function page4(){
    	return view('page4');
    }
}
