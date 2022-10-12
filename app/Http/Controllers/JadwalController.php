<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        // $Jadwals = Jadwal::all();
        // return view('jadwal.index',compact(['Jadwals']));
        // dd($Jadwals);
        $jadwal = Jadwal::all();
        return view('jadwal.index',['jadwal' => $jadwal]);

    }
    public function create()
    {
        return view('jadwal.create');
    }
    public function store(Request $request)
    {
        Jadwal::create($request->except(['_token']));
        return redirect('/Jadwal-index');
        // dd($request);
    }
    public function edit($id)
    {
        $jadwal = Jadwal::find($id);
    // dd($menus);
    return view('jadwal.edit',compact(['jadwal']));
    }
    public function update(Request $request, $id)
    {
        // dd($request);
        $jadwal = Jadwal::find($id);
        $jadwal->update($request->except(['_token']));
        // Alert::success('Success Title', 'Data Updated Successfully');
        return redirect('/Jadwal-index');
    }
    public function destroy($id)
    {
        $jadwal = Jadwal::find($id);
        $jadwal->delete();
       return back();
    }
}
