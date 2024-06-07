<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Experience::get();
        $title = "Data Experience";
        return view('experience.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Profil";
        return view('experience.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        Experience::create([
            'jabatan' => $request->jabatan,
            'nama_pt' => $request->nama_pt,
            'deskripsi' => $request->deskripsi,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_akhir' => $request->tgl_akhir,
        ]);

        return redirect()->to('admin/experience')->with('message', 'Data berhasil ditambah');
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
        $edit = Experience::find($id);
        $title = "Edit Data" . $edit->name;
        return view('experience.edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Experience::where('id', $id)->update([
            'jabatan' => $request->jabatan,
            'nama_pt' => $request->nama_pt,
            'deskripsi' => $request->deskripsi,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_akhir' => $request->tgl_akhir,
        ]);

        return redirect()->to('admin/experience')->with('message', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Experience::where('id', $id)->delete();
        return redirect()->to('admin/experience')->with('message', 'Data berhasil dihapus');
    }
}
