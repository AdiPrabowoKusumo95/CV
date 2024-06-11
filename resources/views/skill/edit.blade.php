@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <form action="{{route('admin.skill.update', $edit->id)}}" method="post">
            <div class="card-body">
                @csrf
                @method("PUT")
                <div class="form-group mb-3">
                    <label for="">Keahlihan</label>
                    <input value="{{$edit->skill}}" type="text" name="skill" placeholder="Masukkan Keahlihan Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Penyelenggara</label>
                    <input value="{{$edit->persentase}}" type="text" name="persentase" placeholder="Masukkan Persentase Keahlihan Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </form>
    </div>

@endsection
