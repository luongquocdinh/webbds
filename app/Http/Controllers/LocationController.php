<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Location;


class LocationController extends Controller
{
    public function index()
    {
        $data = Location::paginate(self::PAGE);
        return view('admin.page.location.index', compact('data'));
    }

    public function detail($id, Request $request)
    {
        $detail = Location::find($id)->first();
        if ($request->isMethod('GET')) {
            return view('admin.page.location.detail', compact('detail'));
        }
        if ($request->isMethod('POST')) {
            $data = [
                'title' => $request->title,
                'content' => base64_encode($request->content)
            ];

            $detail->update($data);
            return redirect()->route('location.index');
        }
    }

    public function status($id)
    {
        DB::table('location')->update(['is_enable' => self::DISABLE]);
        DB::table('location')->where(['id' => $id])->update(['is_enable' => self::ENABLE]);

        return redirect()->route('location.index');
    }

    public function client()
    {
        $detail = Location::where('is_enable', self::ENABLE)->first();

        return view('page.location', compact('detail'));
    }
}