<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Payment;


class PaymentController extends Controller
{
    public function index()
    {
        $data = Payment::paginate(self::PAGE);
        return view('admin.page.payment.index', compact('data'));
    }

    public function detail($id, Request $request)
    {
        $detail = Payment::find($id)->first();
        if ($request->isMethod('GET')) {
            return view('admin.page.payment.detail', compact('detail'));
        }
        if ($request->isMethod('POST')) {
            $data = [
                'title' => $request->title,
                'content' => base64_encode($request->content)
            ];

            $detail->update($data);
            return redirect()->route('payment.index');
        }
    }

    public function status($id)
    {
        DB::table('payment')->update(['is_enable' => self::DISABLE]);
        DB::table('payment')->where(['id' => $id])->update(['is_enable' => self::ENABLE]);

        return redirect()->route('payment.index');
    }

    public function client()
    {
        $detail = Payment::where('is_enable', self::ENABLE)->first();

        return view('page.payment', compact('detail'));
    }
}