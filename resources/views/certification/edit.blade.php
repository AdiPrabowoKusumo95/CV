@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <form action="{{route('admin.certification.update', $edit->id)}}" method="post">
            <div class="card-body">
                @csrf
                @method("PUT")
                <div class="form-group mb-3">
                    <label for="">Sertifikasi</label>
                    <input value="{{$edit->nama_sertifikasi}}" type="text" name="nama_sertifikasi" placeholder="Masukkan Nama Sertifikasi" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Penyelenggara</label>
                    <input value="{{$edit->penyelenggara}}" type="text" name="penyelenggara" placeholder="Masukkan Instansi Penyelenggara" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tahun</label>
                    <input value="{{$edit->tahun}}" type="year" name="tahun" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </form>
    </div>

@endsection
