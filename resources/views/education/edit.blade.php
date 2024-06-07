@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <form action="{{route('admin.education.update', $edit->id)}}" method="post">
            <div class="card-body">
                @csrf
                @method("PUT")
                <div class="form-group mb-3">
                    <div class="form-group mb-3">
                        <label for="">Lulusan</label>
                        <input value="{{$edit->lulusan}}" type="text" name="lulusan" placeholder="Masukkan Lulusan Pendidikan Anda" class="form-control">
                    </div>
                    <label for="">Nama Sekolah</label>
                    <input value="{{$edit->nama_sekolah}}" type="text" name="nama_sekolah" placeholder="Masukkan Nama Sekolah Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Jurusan</label>
                    <input value="{{$edit->jurusan}}" type="text" name="jurusan" placeholder="Masukkan Jurusan Pendidikan Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Deskripsi</label>
                    <input value="{{$edit->deskripsi}}" type="text" name="deskripsi" placeholder="Masukkan Deskripsi Pendidikan Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tahun Awal</label>
                    <input value="{{$edit->tahun_awal}}" type="year" name="tahun_awal" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tahun Akhir</label>
                    <input value="{{$edit->tahun_akhir}}" type="year" name="tahun_akhir" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">GPA</label>
                    <input value="{{$edit->gpa}}" type="text" name="gpa" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </form>
    </div>

@endsection
