<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Ground;


class GroundController extends Controller
{
    public function index()
    {
        $data = Ground::paginate(self::PAGE);
        return view('admin.page.ground.index', compact('data'));
    }

    public function detail($id, Request $request)
    {
        $detail = Ground::find($id)->first();
        if ($request->isMethod('GET')) {
            return view('admin.page.ground.detail', compact('detail'));
        }
        if ($request->isMethod('POST')) {
            $data = [
                'title' => $request->title,
                'content' => base64_encode($request->content)
            ];

            $detail->update($data);
            return redirect()->route('ground.index');
        }
    }

    public function status($id)
    {
        DB::table('ground')->update(['is_enable' => self::DISABLE]);
        DB::table('ground')->where(['id' => $id])->update(['is_enable' => self::ENABLE]);

        return redirect()->route('ground.index');
    }

    public function client()
    {
        $detail = Ground::where('is_enable', self::ENABLE)->first();

        return view('page.ground', compact('detail'));
    }
}