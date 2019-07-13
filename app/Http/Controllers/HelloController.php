<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $name = 'Khang';
        $tuoi = 20;
        $diachi = 'Đông Quan, Cầu Giấy';
        $lop = 'Pt13312';

        return view('hello', [
            'ten' => $name,
            'tuoi' => $tuoi,
            'diachi' => $diachi,
            'lop' => $lop,
        ]);
    }
    //
}