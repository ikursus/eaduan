@extends('layout')

@section('content')

<div class="row">
  <div class="col-md-8 col-md-offset-2">

    <div class="panel panel-default">
      <div class="panel-heading">Borang Aduan</div>
      <div class="panel-body">

        @if ( Session::get('error') )

        <div class="alert alert-danger">
          {{ Session::get('error') }}
        </div>

        @endif

        {!! Form::open( ['method' => 'POST', 'action' => 'BorangController@hantarAduan', 'files' => true] ) !!}

          <div class="form-group">
            <label for="nama">Nama Pengadu</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda...">
          </div>

          <div class="form-group">
            <label for="email">Email Pengadu</label>
            <input type="email"name="email" class="form-control" placeholder="Masukkan Email Anda...">
          </div>

          <div class="form-group">
            <label for="alamat">Alamat Pengadu</label>
            <textarea name="alamat" class="form-control" placeholder="Masukkan Alamat Anda..."></textarea>
          </div>

          <div class="form-group">
            <label for="telefon">Telefon Pengadu</label>
            <input type="text" name="telefon" class="form-control" placeholder="Masukkan Nama Anda...">
          </div>

          <hr>

          <div class="form-group">
            <label for="telefon">Sabjek Aduan</label>
            <input type="text" name="sabjek" class="form-control" placeholder="Sabjek Aduan...">
          </div>

          <div class="form-group">
            <label for="telefon">Maklumat Aduan</label>
            {!! Form::textarea('kandungan', null, [ 'class' => 'form-control']) !!}
          </div>

          <div class="form-group">
            <label for="nama">Tarikh Peristiwa</label>
            <input type="date" name="tarikh" class="form-control">
          </div>

          <div class="form-group">
            <label for="nama">Kategori</label>
            <select name="kategori" class="form-control">
              <option value="normal">Normal</option>
              <option value="urgent">Urgent</option>
              <option value="immediate">Immediate</option>
            </select>
          </div>

          <div class="form-group">
            <label for="nama">Lampiran</label>
            {!! Form::file('lampiran', ['class' => 'form-control']) !!}
          </div>

        {!! Form::close() !!}

      </div>
    </div>

  </div>
</div>

@endsection
