@extends('layout')

@section('content')
<h1>Sistem e-Aduan</h1>
<p class="lead">Selamat Datang Ke Sistem e-Aduan.</p>

@if ( Session::get('success') )

<div class="alert alert-success">
  {{ Session::get('success') }}
</div>


@endif

@endsection
