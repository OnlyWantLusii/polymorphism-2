<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index() {
        return view('about', [
            'title' => 'About',
            'active' => 'about',
            'nama' => 'Mirza Qamaruzzaman',
            'profesi' => 'Programmer',
            'gambar' => 'test.jpg',
            'deskripsi' => 'Seorang jones, yg mengabdikan hidupnya untuk belajar programming (mungkin). dan pengen punya doi sih, tapi apa daya muka tidak support. sempet pengen jadi komikus tapi gara gara salah jurusan jadi weh programmer (mereun)'
        ]);
    }
}
