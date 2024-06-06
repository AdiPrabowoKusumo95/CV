@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <form action="{{route('admin.education.update', $edit->id)}}" method="post">
            <div class="card-body">
                @csrf
                @method("PUT")
                <div class="form-group mb-3">
                    <label for="">Nama Universitas</label>
                    <input value="{{$edit->nama_univ}}" type="text" name="nama_univ" placeholder="Masukkan Nama Universitas" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Lulusan</label>
                    <input value="{{$edit->lulusan}}" type="text" name="lulusan" placeholder="Masukkan Jurusan Pendidikan Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Jurusan</label>
                    <input value="{{$edit->jurusan}}" type="text" name="jurusan" placeholder="Masukkan Jurusan Pendidikan Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tgl Lulus</label>
                    <input value="{{$edit->tgl_lulus}}" type="text" name="tgl_lulus" class="form-control">
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
