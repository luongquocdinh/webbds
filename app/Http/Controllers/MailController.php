<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyMail;
use App\Http\Controllers\Controller;


class MailController extends Controller
{
    public function send(Request $request)
    {
        $this->sendMail($request);
        return response()->json([
            'message' => 'Cám ơn sự quan tâm của bạn. Chúng tôi sẽ thông báo tới bạn sớm'
        ]);
    }

    private function sendMail($request)
    {
        $email = self::mail;
        Mail::to($email)->send(new NotifyMail($request));
    }
}