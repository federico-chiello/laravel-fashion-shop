<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class HomeController extends Controller
{
    public function index(){
        $data = [
            'benvenuto' => 'Benvenuti nella Home'
        ];
        return view('home', $data);
    }

    public function products(){
        $vestito = Dress::all();
        $data = [
            'vestiti' => $vestito
        ];
        return view('products', $data);
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
