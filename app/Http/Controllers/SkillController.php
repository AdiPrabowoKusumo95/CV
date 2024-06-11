<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Skill::get();
        $title = "Data Keahlihan";
        return view('skill.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Data Keahlihan";
        return view('skill.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        Skill::create([
            'skill' => $request->skill,
            'persentase' => $request->persentase,
        ]);

        return redirect()->to('admin/skill')->with('message', 'Data berhasil ditambah');
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
        $edit = Skill::find($id);
        $title = "Edit Data Keahlihan" . $edit->name;
        return view('skill.edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Skill::where('id', $id)->update([
            'skill' => $request->skill,
            'persentase' => $request->persentase,
        ]);

        return redirect()->to('admin/skill')->with('message', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Skill::where('id', $id)->delete();
        return redirect()->to('admin/skill')->with('message', 'Data berhasil dihapus');
    }
}
