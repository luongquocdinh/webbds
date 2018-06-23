<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Introduce;


class IntroduceController extends Controller
{
    public function index()
    {
        $data = Introduce::paginate(self::PAGE);
        return view('admin.page.introduce.index', compact('data'));
    }

    public function detail($id, Request $request)
    {
        $detail = Introduce::find($id)->first();
        if ($request->isMethod('GET')) {
            return view('admin.page.introduce.detail', compact('detail'));
        }
        if ($request->isMethod('POST')) {
            $data = [
                'title' => $request->title,
                'content' => base64_encode($request->content)
            ];

            $detail->update($data);
            return redirect()->route('introduce.index');
        }
    }

    public function status($id)
    {
        DB::table('introduce')->update(['is_enable' => self::DISABLE]);
        DB::table('introduce')->where(['id' => $id])->update(['is_enable' => self::ENABLE]);

        return redirect()->route('introduce.index');
    }

    public function client()
    {
        $detail = Introduce::where('is_enable', self::ENABLE)->first();

        return view('page.introduce', compact('detail'));
    }
}