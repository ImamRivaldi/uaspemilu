@extends('master')
@section('content')
 
<div class="row">
   <div class="col-lg-12 text-center">
      <h1 class="mt-5">Tambah Data Pemilih</h1>
    </div>
    <div class="col-md-12"><hr>
        <div class="col-md-2"></div>
            <div class="col-md-8">
                <form action="{{ Route('create') }}" class="from-horizontal" method="post">
                    <fieldset>
                        @csrf
                         <div class="form-group label-floating">
                          <label class="control-label" for="nik">NIK</label>
                          <input class="form-control" id="focusedInput2" type="text" name="nik">
                          <p class="help-block">Masukan data dengan benar.</p>
                        </div>
                        <div class="form-group label-floating">
                          <label class="control-label" for="nama">Nama</label>
                          <input class="form-control" id="focusedInput2" type="text" name="nama">
                          <p class="help-block">Masukan data dengan benar.</p>
                        </div>
                        <div class="form-group label-floating">
                          <label class="control-label" for="tmpt_lahir">Tempat Lahir</label>
                          <input class="form-control" id="focusedInput2" type="text" name="tmpt_lahir">
                          <p class="help-block">Masukan data dengan benar.</p>
                        </div>
                        <div class="form-group label-floating">
                          <label class="control-label" for="tgl_lahir">Tanggal Lahir</label>
                          <input class="form-control" id="focusedInput2" type="date" name="tgl_lahir">
                          <p class="help-block">Masukan data dengan benar.</p>
                        </div>
                        <div class="form-group label-floating">
                          <label class="control-label" for="keterangan">Keterangan</label>
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
@endsection