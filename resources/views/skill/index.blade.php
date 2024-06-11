@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <div align="right" class="mb-3">
                <a href="{{ route('admin.skill.create') }}" class="btn btn-primary">Tambah Keahlihan</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Keahlihan dan Persentase</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="progress-bar-wrap">
                                                <span class="skill">{{ $data->skill }} <i class="val">{{ $data->persentase }}%</i></span>
                                                <div class="progress-bar" role="progressbar" aria-valuemin="0"
                                                    aria-valuemax="100" style="max-width: {{ $data->persentase }}%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="{{ route('admin.skill.edit', $data->id) }}"
                                        class="btn btn-success btn-sm">Edit</a> |

                                    <form method="POST" action="{{ route('admin.skill.destroy', $data->id) }}"
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
