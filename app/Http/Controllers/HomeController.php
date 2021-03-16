<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class HomeController extends Controller
{
    public function index(){
        $data = [
            'benvenuto' => 'Benvenuti nella Home',
            'testo' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore molestias odio autem harum blanditiis, veniam illo, quod voluptas eaque, nobis vel sapiente rem beatae exercitationem quisquam omnis ipsam temporibus ullam!'
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
