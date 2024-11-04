<?php

namespace App\Http\Controllers;

use App\Jobs\ThankYouJob;
use App\Models\Subscriber;
use App\Traits\Responses;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'unique:subscribers,email']
        ]);

        if ($validator->fails()) {
            return $this->error($validator->errors()->first());
        }

        try {

            DB::beginTransaction();

            $subscriber = new Subscriber();
            $subscriber->email = $request->email;
            $subscriber->save();

            dispatch(new \App\Jobs\Subscriber($request->email));

            DB::commit();
            return $this->success("Subscription successfull");
        } catch (\Exception $e) {

            DB::rollBack();
            return $this->error($e->getMessage());
        }
    }

    public function listings()
    {
        $data = [
            'title' => 'Apartments',
        ];

        return view('apartments')->with($data);
    }

    public function single(int $index = 1)
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
        $validator = Validator::make($request->all(), [
            'fullname' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'phone' => ['required', 'string'],
            'subject' => ['required', 'string'],
            'message' => ['required', 'string']
        ]);

        if ($validator->fails()) {
            return $this->error($validator->errors()->first());
        }
        $message = nl2br($request->message);

        try {

            $data = [
                'email' => $request->email,
                'subject' => $request->subject,
                'name' => $request->fullname,
                'phone' => $request->phone,
                'message' => $message
            ];
            dispatch(new ThankYouJob($data));

            return $this->success("Message Sent");
        } catch (\Exception $e) {
            return $this->error($e->getMessage());
        }
    }
}
