@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <form action="{{route('admin.skill.store')}}" method="post">
            <div class="card-body">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Keahlihan</label>
                    <input type="text" name="skill" placeholder="Masukkan Keahlihan Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Persentase</label>
                    <input type="text" name="persentase" placeholder="Masukkan Persentase Keahlihan Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </form>
    </div>

@endsection
