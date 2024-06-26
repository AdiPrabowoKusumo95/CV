@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <form action="{{route('admin.experience.store')}}" method="post">
            <div class="card-body">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Jabatan</label>
                    <input type="text" name="jabatan" placeholder="Masukkan Nama Pekerjaan" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Nama PT</label>
                    <input type="text" name="nama_pt" placeholder="Masukkan Nama Perusahaan" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Deskripsi</label>
                    <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="">Tgl_Mulai</label>
                    <input type="year" name="tgl_mulai" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tgl_Akhir</label>
                    <input type="year" name="tgl_akhir" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </form>
    </div>

@endsection
