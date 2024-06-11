<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Profile::get();
        $title = "Data Profile";
        return view('profile.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Profil";
        return view('profile.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        Profile::create([
            'nama' => $request->nama,
            'tgl_lahir' => $request->tgl_lahir,
            'telpon' => $request->telpon,
            'alamat' => $request->alamat,
            'usia' => $request->usia,
            'deskripsi' => $request->deskripsi,
            'email' => $request->email,
            'twitter_link' => $request->twitter_link,
            'facebook_link' => $request->facebook_link,
            'instagram_link' => $request->instagram_link,
            'linkedin_link' => $request->linkedin_link,
        ]);

        return redirect()->to('admin/profile')->with('message', 'Data berhasil ditambah');
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
        $edit = Profile::find($id);
        $title = "Edit Data Profile" . $edit->name;
        return view('profile.edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Profile::where('id', $id)->update([
            'nama' => $request->nama,
            'tgl_lahir' => $request->tgl_lahir,
            'telpon' => $request->telpon,
            'alamat' => $request->alamat,
            'usia' => $request->usia,
            'deskripsi' => $request->deskripsi,
            'email' => $request->email,
            'twitter_link' => $request->twitter_link,
            'facebook_link' => $request->facebook_link,
            'instagram_link' => $request->instagram_link,
            'linkedin_link' => $request->linkedin_link,
        ]);

        return redirect()->to('admin/profile')->with('message', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Profile::where('id', $id)->delete();
        return redirect()->to('admin/profile')->with('message', 'Data berhasil dihapus');
    }
}
