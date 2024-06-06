@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <form action="{{route('admin.experience.update', $edit->id)}}" method="post">
            <div class="card-body">
                @csrf
                @method("PUT")
                <div class="form-group mb-3">
                    <label for="">Nama Pekerjaan</label>
                    <input value="{{$edit->nama_pekerjaan}}" type="text" name="nama_pekerjaan" placeholder="Masukkan Nama Pekerjaan" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Perusahaan</label>
                    <input value="{{$edit->perusahaan}}" type="text" name="perusahaan" placeholder="Masukkan Nama Perusahaan" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$edit->description}}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="">Tgl Mulai</label>
                    <input value="{{$edit->tgl_mulai}}" type="date" name="tgl_mulai" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tgl Akhir</label>
                    <input value="{{$edit->tgl_akhir}}" type="date" name="tgl_akhir" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </form>
    </div>

@endsection
