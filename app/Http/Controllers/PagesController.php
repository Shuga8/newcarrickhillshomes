<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];

        return view('index')->with($data);
    }

    public function subscribe(Request $request) {}

    public function listings()
    {
        $data = [
            'title' => 'Apartments',
        ];

        return view('apartments')->with($data);
    }

    public function gallery()
    {
        $data = [
            'title' => 'Our Gallery'
        ];

        return view('gallery')->with($data);
    }
}
