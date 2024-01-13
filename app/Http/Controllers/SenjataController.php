<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Senjata;
use File;

class SenjataController extends Controller
{
    public function create()
    {
        return view('senjata.input');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|min:3|max:50',
            'no_seri' => 'required|size:20',
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
        $mahasiswa = new Senjata();
        $mahasiswa->nama = $validateData['nama'];
        $mahasiswa->no_seri = $validateData['no_seri'];
        $mahasiswa->kapasitas = $validateData['kapasitas'];
        $mahasiswa->ukuran = $validateData['ukuran'];
        $mahasiswa->berat = $validateData['berat'];
        $mahasiswa->daya_tembak = $validateData['daya_tembak'];
        $mahasiswa->kecepatan = $validateData['kecepatan'];
        $mahasiswa->status = $validateData['status'];
        $mahasiswa->pemilik = $validateData['pemilik'];
        $mahasiswa->sejarah = $validateData['sejarah'];
        $mahasiswa->pemakaian = $validateData['pemakaian'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            $path = $request->image->move('assets/image/senjata',$namaFile);
            $mahasiswa->gambar = $path;
        }
        $mahasiswa->save();
        $request->session()->flash('pesan','Penambahan data berhasil');
        return redirect()->route('senjata.senjata');
    }

    public function index()
    {
        $mahasiswas = Senjata::all();
        return view('senjata.senjata',['senjata' => $mahasiswas]);
    }
    
    public function show($student_id)
    {
        $result = Student::findOrFail($student_id);
        return view('student.show',['student' => $result]);
    }


}
