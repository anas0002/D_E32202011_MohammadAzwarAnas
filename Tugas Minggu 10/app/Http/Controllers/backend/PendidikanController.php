<?php

Namespace App\Http\Controllers\backend;

use Illuminate\Http\Request, App\Http\Controllers\Controller, App\Models\Pendidikan;

class PendidikanController extends Controller
{
    public function index()
    {
        $pendidikan = Pendidikan::get();
        return view('backend.pendidikan.index',compact('pendidikan'));
    }
    public function create()
    {
        $pendidikan = null;
        return view('backend.pendidikan.create',compact('pendidikan'));
    } 
    public function store(Request $request)
    {
        Pendidikan::create($request->all());

        return redirect()->route('pendidikan.index')
                        -> with('success','Data Pendidikan Baru Berhasil Disimpan');
    }
}
