@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <form action="{{route('admin.education.store')}}" method="post">
            <div class="card-body">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Lulusan</label>
                    <input type="text" name="lulusan" placeholder="Masukkan Lulusan Pendidikan Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Nama Sekolah</label>
                    <input type="text" name="nama_sekolah" placeholder="Masukkan Nama Sekolah Anda" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="">Jurusan</label>
                    <input type="text" name="jurusan" placeholder="Masukkan Jurusan Pendidikan Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Deskripsi</label>
                    <input type="text" name="deskripsi" placeholder="Masukkan Deskripsi Pendidikan Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tahun_Awal</label>
                    <input type="year" name="tahun_awal" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tahun_Akhir</label>
                    <input type="year" name="tahun_akhir" class="form-control">
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
