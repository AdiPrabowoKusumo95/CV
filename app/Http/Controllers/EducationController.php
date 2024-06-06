<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Education::get();
        $title = "Data education";
        return view('education.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Profil";
        return view('education.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        Education::create([
            'nama_univ' => $request->nama_univ,
            'lulusan' => $request->lulusan,
            'jurusan' => $request->jurusan,
            'tgl_lulus' => $request->tgl_lulus,
            'gpa' => $request->gpa,
        ]);

        return redirect()->to('admin/education')->with('message', 'Data berhasil ditambah');
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
        $edit = Education::find($id);
        $title = "Edit Data" . $edit->name;
        return view('education.edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Education::where('id', $id)->update([
            'nama_univ' => $request->nama_univ,
            'lulusan' => $request->lulusan,
            'jurusan' => $request->jurusan,
            'tgl_lulus' => $request->tgl_lulus,
            'gpa' => $request->gpa,
        ]);

        return redirect()->to('admin/education')->with('message', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Education::where('id', $id)->delete();
        return redirect()->to('admin/education')->with('message', 'Data berhasil dihapus');
    }
}
