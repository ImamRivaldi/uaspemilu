@extends('master')
@section('content')

<div class="panel panel-info">
    <div class="panel-heading">
        <center>
            <h1>Data Pemilih</h1>
        </center>
    </div>
    <div class="panel-body">
        <a href="{{ Route ('index') }}" class="btn btn-raised btn-danger pull-left">Kembali</a>
        
        @if (Session::has('after_update'))
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-dismissible alert-{{ Session::get('after_update.alert') }}">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ Session::get('after_update.title') }}</strong>
                    <a href="javascript:void(0)" class="alert-link">{{ Session::get('after_update.text-1') }}</a> {{ Session::get('after_update.text-2') }}
                </div>
            </div>
        </div>
        @endif
        
        <div class="row">
            <div class="col-md-12"><hr>
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <form action="{{ URL('pemilih/store') }}" class="from-horizontal" method="post">
                        {{ csrf_field() }}
                        <fieldset>
                            <legend>UPDATE DATA PEMILIH</legend>
                            <div class="form-group label-floating">
                              <label class="control-label" for="focusedInput2">NIK</label>
                              <input class="form-control" id="focusedInput2" type="text" name="nik">
                              <p class="help-block">Masukan data dengan benar.</p>
                            </div>
                            <div class="form-group label-floating">
                              <label class="control-label" for="focusedInput2">Nama</label>
                              <input class="form-control" id="focusedInput2" type="text" name="nama">
                              <p class="help-block">Masukan data dengan benar.</p>
                            </div>
                            <div class="form-group label-floating">
                              <label class="control-label" for="focusedInput2">Tempat Lahir</label>
                              <input class="form-control" id="focusedInput2" type="text" name="tmpt_lahir">
                              <p class="help-block">Masukan data dengan benar.</p>
                            </div>
                            <div class="form-group label-floating">
                              <label class="control-label" for="focusedInput2">Tanggal Lahir</label>
                              <input class="form-control" id="focusedInput2" type="date" name="tgl_lahir">
                              <p class="help-block">Masukan data dengan benar.</p>
                            </div>
                            <div class="form-group label-floating">
                              <label class="control-label" for="select111">Keterangan</label>
                              <div class="col-md-12">
                                <select id="select111" class="form-control" name="keterangan">
                                    <option value="Tetap">Tetap</option>
                                    <option value="Baru">Baru</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-raised btn-primary pull-right">Submit</button>
                                <button type="reset" class="btn btn-raised btn-warning pull-right">Reset</button>
                              </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
</div>
@stop