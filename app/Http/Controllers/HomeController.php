<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(Request $request) {

        $data = [
            'title'=> 'Qwords',
            'header'=> 'Cloud Hosting Indonesia dengan',
            'text' => 'Cloud Hosting Indonesia dengan pelayanan terbaik dan harga murah serta diskon nama domain.'
        ];

        $data2 = [
            'header' => 'Cloud Hosting dan VPS Diskon Hingga 60% !',
            'text' => 'Layanan unggulan dengan teknologi terbaik untuk website anda'
        ];

        return view('home',[
            'data' => $data,
            'data2' => $data2
        ]);
    }
}
