@extends('admin/layout')

@section('content')
<h1>{{ $page_title or "" }}</h1>

{!! Form::open( ['method' => 'POST', 'action' => 'StaffController@store'] ) !!}

<div class="form-group">
  <label for="nama">Nama</label>
  {!! Form::text('nama', null, [ 'class' => 'form-control'] ) !!}
</div>

  <div class="form-group">
    <label for="email">Email</label>
    {!! Form::email('email', null, [ 'class' => 'form-control'] ) !!}
  </div>

  <div class="form-group">
    <label for="nama">Kad Pengenalan</label>
    {!! Form::text('kad_pengenalan', null, [ 'class' => 'form-control'] ) !!}
  </div>

  <div class="form-group">
    <label for="nama">Tarikh Lahir</label>
    {!! Form::date('tarikh_lahir', null, [ 'class' => 'form-control'] ) !!}
  </div>

  <div class="form-group">
    <label for="nama">Telefon</label>
    {!! Form::text('telefon', null, [ 'class' => 'form-control'] ) !!}
  </div>

  <div class="form-group">
    <label for="nama">Alamat</label>
    {!! Form::textarea('alamat', null, [ 'class' => 'form-control'] ) !!}
  </div>

  <div class="form-group">
    <label for="nama">Password</label>
    {!! Form::password('password', [ 'class' => 'form-control'] ) !!}
  </div>

  <div class="form-group">
    <label for="nama">Nama</label>
    {!! Form::select('role', array('admin' => 'Admin', 'user' => 'User'),  null, [ 'class' => 'form-control'] ) !!}
  </div>

  <div class="form-group">
    <label for="nama">Unit</label>
    {!! Form::text('unit', null, [ 'class' => 'form-control'] ) !!}
  </div>



  <button type="submit" class="btn btn-primary btn-lg">Submit</button>

{!! Form::close() !!}

@endsection
