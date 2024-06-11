@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <form action="{{route('admin.profile.update', $edit->id)}}" method="post">
            <div class="card-body">
                @csrf
                @method("PUT")
                <div class="form-group mb-3">
                    <label for="">Nama</label>
                    <input value="{{$edit->nama}}" type="text" name="nama" placeholder="Masukkan Nama Lengkap Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal Lahir</label>
                    <input value="{{$edit->tgl_lahir}}" type="text" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Nomor Tlp</label>
                    <input value="{{$edit->telpon}}" type="number" name="telpon" placeholder="Masukkan Nomor Telp Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Alamat</label>
                    <textarea name="alamat" id="" cols="30" rows="10" class="form-control" required>{{$edit->alamat}}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="">Usia</label>
                    <input value="{{$edit->usia}}" type="text" name="usia" placeholder="Masukkan Usia Anda" class="form-control"></input>
                </div>
                <div class="form-group mb-3">
                    <label for="">Deskripsi</label>
                    <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control" required>{{$edit->deskripsi}}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="">Email</label>
                    <input value="{{$edit->email}}" type="email" name="email" placeholder="Masukkan Email Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Twitter</label>
                    <input value="{{$edit->twitter_link}}" type="text" name="twitter_link" placeholder="Masukkan Url Twitter Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Facebook</label>
                    <input value="{{$edit->facebook_link}}" type="text" name="facebook_link" placeholder="Masukkan Url Facebook Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Instagram</label>
                    <input value="{{$edit->instagram_link}}" type="text" name="instagram_link" placeholder="Masukkan Url Instagram Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Linkedin</label>
                    <input value="{{$edit->linkedin_link}}" type="text" name="linkedin_link" placeholder="Masukkan Url Linkedin Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </form>
    </div>

@endsection
