@extends('master')
@section('content')

<div class="row">
    <div class="col-md-12"><hr>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="{{ Route('update', ['id' => $pemilih->id]) }}" class="from-horizontal" method="post">
                <fieldset>
                     <div class="form-group label-floating">
                          <label class="control-label" for="focusedInput2">NIK</label>
                          <input class="form-control" id="focusedInput2" type="text" name="nik" value="{{ $pemilih->nik }}">
                          <p class="help-block">Masukan data dengan benar.</p>
                    </div>
                    <div class="form-group label-floating">
                          <label class="control-label" for="focusedInput2">Nama</label>
                          <input class="form-control" id="focusedInput2" type="text" name="nama" value="{{ $pemilih->nama }}">
                          <p class="help-block">Masukan data dengan benar.</p>
                    </div>
                    <div class="form-group label-floating">
                          <label class="control-label" for="focusedInput2">Tempat Lahir</label>
                          <input class="form-control" id="focusedInput2" type="text" name="tmpt_lahir" value="{{ $pemilih->tmpt_lahir }}">
                          <p class="help-block">Masukan data dengan benar.</p>
                    </div>
                    <div class="form-group label-floating">
                          <label class="control-label" for="focusedInput2">Tanggal Lahir</label>
                          <input class="form-control" id="focusedInput2" type="date" name="tgl_lahir" value="{{ $pemilih->tgl_lahir }}">
                          <p class="help-block">Masukan data dengan benar.</p>
                    </div>
                    <div class="form-group label-floating">
                          <label class="control-label" for="select111">Keterangan</label>
                          <div class="col-md-12">
                            <select id="select111" class="form-control" name="keterangan">
                                <option value="{{ $pemilih->keterangan }}" selected="selected">Tetap</option>
                                <option value="{{ $pemilih->keterangan }}">Baru</option>
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
@stop