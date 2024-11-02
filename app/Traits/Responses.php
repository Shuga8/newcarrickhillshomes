<?php

namespace App\Traits;

trait Responses
{

    public function success($message)
    {
        return back()->with(['success' => $message]);
    }

    public function error($message)
    {
        return back()->with(['error' => $message]);
    }
}
