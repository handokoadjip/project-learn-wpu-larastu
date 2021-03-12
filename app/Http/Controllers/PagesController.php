<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about', [
            'nama' => 'Handoko Adji Pangestu',
            'umur' => 12
        ]);
    }
}
