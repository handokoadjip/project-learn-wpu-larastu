<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// Untuk Connect Model
// use App\User;

class Pages1Controller extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        $nama = "Handoko Adji Pangestu";
        $umur = 20;
        return view('about', [
            'nama' => $nama,
            'umur' => $umur
        ]);
    }
}
