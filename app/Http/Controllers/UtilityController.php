<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Utility;


class UtilityController extends Controller
{
    public function index()
    {
        $data = Utility::paginate(self::PAGE);
        return view('admin.page.utility.index', compact('data'));
    }

    public function detail($id, Request $request)
    {
        $detail = Utility::find($id)->first();
        if ($request->isMethod('GET')) {
            return view('admin.page.utility.detail', compact('detail'));
        }
        if ($request->isMethod('POST')) {
            $data = [
                'title' => $request->title,
                'content' => base64_encode($request->content)
            ];

            $detail->update($data);
            return redirect()->route('utility.index');
        }
    }

    public function status($id)
    {
        DB::table('utility')->update(['is_enable' => self::DISABLE]);
        DB::table('utility')->where(['id' => $id])->update(['is_enable' => self::ENABLE]);

        return redirect()->route('utility.index');
    }

    public function client()
    {
        $detail = Utility::where('is_enable', self::ENABLE)->first();

        return view('page.utility', compact('detail'));
    }
}