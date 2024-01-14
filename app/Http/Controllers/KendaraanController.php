<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;
use File;

class KendaraanController extends Controller
{
   public function create()
    {
        return view('kendaraan.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|min:3|max:50',
            'no_seri' => 'required|min:3|max:15',
            'kapasitas' => 'required',
            'ukuran' => 'required',
            'berat' => 'required',
            'berat' => 'required',
            'daya_tembak' => 'required',
            'kecepatan' => 'required',
            'status' => 'required',
            'pemilik' => 'required',
            'sejarah' => 'required',
            'pemakaian' => 'required',
            'image' => 'required|file|image|max:1000',
        ]);
        $kendaraan = new kendaraan();
        $kendaraan->nama = $validateData['nama'];
        $kendaraan->no_seri = $validateData['no_seri'];
        $kendaraan->kapasitas = $validateData['kapasitas'];
        $kendaraan->ukuran = $validateData['ukuran'];
        $kendaraan->berat = $validateData['berat'];
        $kendaraan->daya_tembak = $validateData['daya_tembak'];
        $kendaraan->kecepatan = $validateData['kecepatan'];
        $kendaraan->status = $validateData['status'];
        $kendaraan->pemilik = $validateData['pemilik'];
        $kendaraan->sejarah = $validateData['sejarah'];
        $kendaraan->pemakaian = $validateData['pemakaian'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            $path = $request->image->move('assets/image/kendaraan',$namaFile);
            $kendaraan->image = $path;
        }
        $kendaraan->save();
        $request->session()->flash('pesan','Penambahan data berhasil');
        return redirect()->route('kendaraan.index');
    }

    public function index()
    {
        $kendaraans = kendaraan::all();
        return view('kendaraan.index',['kendaraans' => $kendaraans]);
    }

    public function show($kendaraan_id)
    {
        $result = kendaraan::findOrFail($kendaraan_id);
        return view('kendaraan.show',['kendaraan' => $result]);
    }
}
