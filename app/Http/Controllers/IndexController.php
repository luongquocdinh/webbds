<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ground;
use App\Introduce;
use App\Location;
use App\Models;
use App\Payment;
use App\Progress;
use App\Utility;


class IndexController extends Controller
{
    public function index()
    {
        return view('admin.page.index.add');
    }

    public function add(Request $request)
    {
        $type = $request->type;
        $data = [
            'title' => $request->title,
            'content' => base64_encode($request->content)
        ];
        if ($type == self::INTRODUCE) {
            Introduce::create($data);
        }

        if ($type == self::LOCATION) {
            Location::create($data);
        }

        if ($type == self::GROUND) {
            Ground::create($data);
        }

        if ($type == self::UTILITY) {
            Utility::create($data);
        }

        if ($type == self::MODELS) {
            Models::create($data);
        }

        if ($type == self::PAYMENT) {
            Payment::create($data);
        }

        if ($type == self::PROGRESS) {
            Progress::create($data);
        }

        return redirect()->route('main.add');
    }
}