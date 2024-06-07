@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <form action="{{route('admin.profile.store')}}" method="post">
            <div class="card-body">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Nama</label>
                    <input type="text" name="nama" placeholder="Masukkan Nama Lengkap Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" placeholder="Masukkan Email Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Nomor Tlp</label>
                    <input type="number" name="telpon" placeholder="Masukkan Nomor Telp Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Alamat</label>
                    <textarea name="alamat" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="">Usia</label>
                    <input type="text" name="usia" placeholder="Masukkan Usia Anda" class="form-control"></input>
                </div>
                <div class="form-group mb-3">
                    <label for="">Deskripsi</label>
                    <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="Masukkan Email Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Twitter</label>
                    <input type="text" name="twitter_link" placeholder="Masukkan Url Twitter Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Facebook</label>
                    <input type="text" name="facebook_link" placeholder="Masukkan Url Facebook Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Instagram</label>
                    <input type="text" name="instagram_link" placeholder="Masukkan Url Instagram Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Linkedin</label>
                    <input type="text" name="linkedin_link" placeholder="Masukkan Url Linkedin Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </form>
    </div>

@endsection
