<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = [
            'benvenuto' => 'Benvenuti nella Home'
        ];
        return view('home', $data);
    }

    public function contacts(){
        $data = [
            'citta' => 'Palermo',
            'indirizzo' => 'via Alcide De Gasperi 80',
            'telefono' => '079416546'
        ];
        return view('contacts', $data);
    }
}
