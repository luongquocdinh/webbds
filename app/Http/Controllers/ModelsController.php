<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models;


class ModelsController extends Controller
{
    public function index()
    {
        $data = Models::paginate(self::PAGE);
        return view('admin.page.models.index', compact('data'));
    }

    public function detail($id, Request $request)
    {
        $detail = Models::find($id)->first();
        if ($request->isMethod('GET')) {
            return view('admin.page.models.detail', compact('detail'));
        }
        if ($request->isMethod('POST')) {
            $data = [
                'title' => $request->title,
                'content' => base64_encode($request->content)
            ];

            $detail->update($data);
            return redirect()->route('models.index');
        }
    }

    public function status($id)
    {
        DB::table('models')->update(['is_enable' => self::DISABLE]);
        DB::table('models')->where(['id' => $id])->update(['is_enable' => self::ENABLE]);

        return redirect()->route('models.index');
    }

    public function client()
    {
        $detail = Models::where('is_enable', self::ENABLE)->first();

        return view('page.models', compact('detail'));
    }
}