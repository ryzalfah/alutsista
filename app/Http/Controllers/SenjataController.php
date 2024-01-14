<?php

namespace App\Http\Controllers;

use App\Models\Senjata;
use Illuminate\Http\Request;
use File;

class SenjataController extends Controller
{
    public function create()
    {
        return view('senjata.create');
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
        $senjata = new Senjata();
        $senjata->nama = $validateData['nama'];
        $senjata->no_seri = $validateData['no_seri'];
        $senjata->kapasitas = $validateData['kapasitas'];
        $senjata->ukuran = $validateData['ukuran'];
        $senjata->berat = $validateData['berat'];
        $senjata->daya_tembak = $validateData['daya_tembak'];
        $senjata->kecepatan = $validateData['kecepatan'];
        $senjata->status = $validateData['status'];
        $senjata->pemilik = $validateData['pemilik'];
        $senjata->sejarah = $validateData['sejarah'];
        $senjata->pemakaian = $validateData['pemakaian'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            $path = $request->image->move('assets/image/senjata',$namaFile);
            $senjata->image = $path;
        }
        $senjata->save();
        $request->session()->flash('pesan','Penambahan data berhasil');
        return redirect()->route('senjata.index');
    }

    public function index()
    {
        $senjatas = Senjata::all();
        return view('senjata.index',['senjatas' => $senjatas]);
    }

    public function show($senjata_id)
    {
        $result = Senjata::findOrFail($senjata_id);
        return view('senjata.show',['senjata' => $result]);
    }
}
