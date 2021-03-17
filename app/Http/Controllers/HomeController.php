<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.beranda');
    }

    public function dasboard()
    {
        $title = "Daftar Buku";
        return view('admin.dasboard', compact('title'));
    }
}
