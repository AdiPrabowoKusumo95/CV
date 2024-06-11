<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Certification::get();
        $title = "Data Sertifikasi";
        return view('certification.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Data Sertifikasi";
        return view('certification.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        Certification::create([
            'nama_sertifikasi' => $request->nama_sertifikasi,
            'penyelenggara' => $request->penyelenggara,
            'tahun' => $request->tahun,
        ]);

        return redirect()->to('admin/certification')->with('message', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Certification::find($id);
        $title = "Edit Data Sertifikasi" . $edit->name;
        return view('certification.edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Certification::where('id', $id)->update([
            'nama_sertifikasi' => $request->nama_sertifikasi,
            'penyelenggara' => $request->penyelenggara,
            'tahun' => $request->tahun,
        ]);

        return redirect()->to('admin/certification')->with('message', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Certification::where('id', $id)->delete();
        return redirect()->to('admin/certification')->with('message', 'Data berhasil dihapus');
    }
}
