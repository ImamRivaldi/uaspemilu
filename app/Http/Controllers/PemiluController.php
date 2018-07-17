<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemilih;
use PDF;

class PemiluController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->get('search')){
            $pemilih = Pemilih::where('nama', 'LIKE', '%'.$request->get('search').'%')->get();
        } else {
            $pemilih = Pemilih::all();
        }
		return view('pemilih.show', ['pemilih' => $pemilih]);
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
        $validate = \Validator::make($request->all(),[
            'nik' => 'required',
            'nama' => 'required',
            'tmpt_lahir' => 'required',
            'tgl_lahir' => 'required',
            'keterangan' => 'required'
        ],
        
        $after_save = [
            'alert' => 'Danger',
            'title' => 'Wait!',
            'text-1' => 'Ada kesalahan',
            'text-2' => 'Try again.'
        ]);
        
        if($validate->fails()){
            return redirect()->back()->with('after_save', $after_save);
        }
        
        $after_save = [
            'alert' => 'Success',
            'title' => 'Good Job!',
            'text-1' => 'Tambah Lagi',
            'text-2' => 'Atau Kembali.'
        ];
        
        $data = [
            'nik' => $request->nik,
            'nama' => $request->nama,
            'tmpt_lahir' => $request->tmpt_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'keterangan' => $request->keterangan
        ];
        
        $store = Pemilih::insert($data);
        
        return redirect()->back()->with('after_save', $after_save);
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
        $validate = \Validator::make($request->all(),[
            'nik' => 'required',
            'nama' => 'required',
            'tmpt_lahir' => 'required',
            'tgl_lahir' => 'required',
            'keterangan' => 'required'
        ],
        
        $after_update = [
            'alert' => 'Danger',
            'title' => 'Wait!',
            'text-1' => 'Ada kesalahan',
            'text-2' => 'Try again.'
        ]);
        
        if($validate->fails()){
            return redirect()->back()->with('after_update', $after_update);
        }
        
        $after_update = [
            'alert' => 'Success',
            'title' => 'Good Job!',
            'text-1' => 'Update Data Berhasil',
            'text-2' => ''
        ];
        
        $data = [
            'nik' => $request->nik,
            'nama' => $request->nama,
            'tmpt_lahir' => $request->tmpt_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'keterangan' => $request->keterangan
        ];
        
        $update = Pemilih::where('id', $id)->update($data);
        
        return redirect()->back()->with('after_update', $after_update);
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
    
    public function cetak()
    {
        $pemilih = Pemilih::all();
        $pdf = PDF::loadview('pemilih.cetak', ['pemilih' => $pemilih]);
        return $pdf->setPaper('a4', 'potrait')->stream();
    }
}
