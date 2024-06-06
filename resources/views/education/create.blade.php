@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <form action="{{route('admin.education.store')}}" method="post">
            <div class="card-body">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Nama Universitas</label>
                    <input type="text" name="nama_univ" placeholder="Masukkan Nama Universitas" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Lulusan</label>
                    <input type="text" name="lulusan" placeholder="Masukkan Lulusan Pendidikan Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Jurusan</label>
                    <input type="text" name="jurusan" placeholder="Masukkan Jurusan Pendidikan Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tgl_Lulus</label>
                    <input type="date" name="tgl_lulus" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">GPA</label>
                    <input type="text" name="gpa" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </form>
    </div>

@endsection
