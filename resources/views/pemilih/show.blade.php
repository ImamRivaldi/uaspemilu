@extends('master')
@section('content')

<div class="panel panel-info">
    <div class="col-lg-12 text-center">
      <h1 class="mt-5">Data Pemilih</h1>
    </div>
    <div class="panel-body">
        <a href="{{ URL('pemilih/create') }}" class="btn btn-raised btn-primary pull-right">Tambah Data</a>
        
        @if (Session::has('after_update'))
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-dismissible alert-{{ Session::get('after_update.alert') }}">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ Session::get('after_update.title')}}</strong>
                    <a href="javascript:void(0)" class="alert-link">{{ Session::get('after_update.text-1')}}</a>{{ Session::get('after_update.text-1')}}
                </div>
            </div>
        </div>
        @endif
        
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php(
                    $no = 1
                )
                @foreach ($pemilih as $pemilih)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $pemilih->nik }}</td>
                    <td>{{ $pemilih->nama }}</td>
                    <td>{{ $pemilih->tmpt_lahir }}</td>
                    <td>{{ $pemilih->tgl_lahir }}</td>
                    <td>{{ $pemilih->keterangan }}</td>
                    <td>
                        <center>
                            <a href="{{ URL('pemilih/edit') }}/{{ $pemilih->id }}" class="btn btn-sm btn-raised btn-info">Edit</a>
                            <a href="{{ URL('pemilih/destroy') }}/{{ $pemilih->id }}" class="btn btn-sm btn-raised btn-danger">Hapus</a>
                        </center>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>