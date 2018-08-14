<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartialsController extends Controller
{
    public function nosotros(){
    	return view('partials.nosotros');
    }

    public function galeria(){
    	return view('partials.galeria');
    }

    public function contactanos(){
    	return view('partials.contactanos');
    }
    public function login(){
    	return view('partials.login');
    }
}
