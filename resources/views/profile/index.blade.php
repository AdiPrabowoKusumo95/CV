@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <div align="right" class="mb-3">
                <a href="{{ route('admin.profile.create') }}" class="btn btn-primary">Tambah</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Nomor Telp</th>
                            <th>Alamat</th>
                            <th>Usia</th>
                            <th>Deskripsi</th>
                            <th>Email</th>
                            <th>Twitter</th>
                            <th>Facebook</th>
                            <th>Instagram</th>
                            <th>Linkedin</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ date("d F Y", strtotime($data->tgl_lahir))}}</td>
                                <td>{{ $data->telpon }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->usia }}</td>
                                <td>{{ $data->deskripsi }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->twitter_link }}</td>
                                <td>{{ $data->facebook_link }}</td>
                                <td>{{ $data->instagram_link }}</td>
                                <td>{{ $data->linkedin_link }}</td>
                                <td>
                                    <a href="{{ route('admin.profile.edit', $data->id) }}"
                                        class="btn btn-success btn-sm">Edit</a> |

                                    <form method="POST" action="{{ route('admin.profile.destroy', $data->id) }}"
                                        class="d-inline">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
