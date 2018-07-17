<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemilih;

class PemiluController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pemilih = Pemilih::all();
        return view('pemilih.show', ['pemilih' =>$pemilih]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pemilih = Pemilih::all();
		return view('pemilih.create', ['pemilih' => $pemilih]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pemilih = new Pemilih;
        $pemilih->nik = $request->nik;
  		$pemilih->nama = $request->nama;
  		$pemilih->tmpt_lahir = $request->tmpt_lahir;
  		$pemilih->tgl_lahir = $request->tgl_lahir;
        $pemilih->keterangan = $request->keterangan;
  		$pemilih->save();

  		return redirect(Route('create'))->with('alert-success','Berhasil Menambahkan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pemilih = Pemilih::findOrFail($id);
		return view('pemilih.edit', ['pemilih' => $pemilih]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pemilih = Pemilih::findOrFail($id);
        $pemilih->nik = $request->nik;
  		$pemilih->nama = $request->nama;
  		$pemilih->tmpt_lahir = $request->tmpt_lahir;
  		$pemilih->tgl_lahir = $request->tgl_lahir;
        $pemilih->keterangan = $request->keterangan;
  		$pemilih->save();

  		return redirect(Route('index'))->with('alert-success','Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pemilih = Pemilih::findOrFail($id)->delete();

    	return redirect()->back()->with('success');
    }
}
