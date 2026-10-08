<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Selamat Datang',
            'description' => 'Ini adalah halaman utama aplikasi Laravel saya',
            'items' => ['Laravel', 'PHP', 'MySQL', 'MVC']
        ];
        
        return view('home', compact('data'));
    }

    public function about()
    {
        $data = [
            'title' => 'Tentang Saya',
            'description' => 'Aplikasi ini dibuat untuk tugas Laravel Pertemuan 9',
            'author' => 'Ajeng Selsyra Viona',
            'version' => '1.0'
        ];
        
        return view('about', compact('data'));
    }

    public function contact()
    {
        $data = [
            'title' => 'Hubungi Kami',
            'email' => 'ajengselsyrafiona@gamil.com',
            'phone' => '083844272916',
            'address' => 'Medan, Indonesia'
        ];
        
        return view('contact', compact('data'));
    }

    public function hello($nama)
    {
        return view('hello', compact('nama'));
    }
}