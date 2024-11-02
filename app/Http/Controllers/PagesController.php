<?php

namespace App\Http\Controllers;

use App\Traits\Responses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    use Responses;
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];

        return view('index')->with($data);
    }

    public function subscribe(Request $request)
    {
        return $this->success("Continue");
    }

    public function listings()
    {
        $data = [
            'title' => 'Apartments',
        ];

        return view('apartments')->with($data);
    }

    public function single(int $index)
    {
        $data = [
            'title' => 'Apartment',
            'index' => $index
        ];

        return view('single')->with($data);
    }

    public function gallery()
    {
        $data = [
            'title' => 'Our Gallery'
        ];

        return view('gallery')->with($data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us'
        ];

        return view('contact')->with($data);
    }

    public function send(Request $request)
    {

        return $this->success("Continue");
        // $validator = Validator::make($request->all(), [
        //     'email' => ['required', 'string', 'email', 'unique:subscribers,email']
        // ]);

        // if($validator->fails()){

        // }
    }
}
