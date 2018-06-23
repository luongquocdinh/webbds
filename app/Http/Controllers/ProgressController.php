<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Progress;


class ProgressController extends Controller
{
    public function index()
    {
        $data = Progress::paginate(self::PAGE);
        return view('admin.page.progress.index', compact('data'));
    }

    public function detail($id, Request $request)
    {
        $detail = Progress::find($id)->first();
        if ($request->isMethod('GET')) {
            return view('admin.page.progress.detail', compact('detail'));
        }
        if ($request->isMethod('POST')) {
            $data = [
                'title' => $request->title,
                'content' => base64_encode($request->content)
            ];

            $detail->update($data);
            return redirect()->route('progress.index');
        }
    }

    public function status($id)
    {
        DB::table('progress')->update(['is_enable' => self::DISABLE]);
        DB::table('progress')->where(['id' => $id])->update(['is_enable' => self::ENABLE]);

        return redirect()->route('progress.index');
    }

    public function client()
    {
        $detail = Progress::where('is_enable', self::ENABLE)->first();

        return view('page.progress', compact('detail'));
    }
}