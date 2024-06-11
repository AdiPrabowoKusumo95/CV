@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <form action="{{route('admin.certification.store')}}" method="post">
            <div class="card-body">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Sertifikasi</label>
                    <input type="text" name="nama_sertifikasi" placeholder="Masukkan Nama Sertifikasi" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Penyelenggara</label>
                    <input type="text" name="penyelenggara" placeholder="Masukkan Instansi Penyelenggara" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tahun</label>
                    <input type="year" name="tahun" placeholder="Masukkan Tahun Penyelenggaraan" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </form>
    </div>

@endsection
