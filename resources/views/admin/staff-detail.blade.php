@extends('admin/layout')

@section('content')
<h1>{{ $page_title or "" }}</h1>

<div class="panel panel-default">
  <div class="panel-body">
    <div class="table-responsive">

<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th colspan="2">Butiran</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>ID</td>
      <td>{{ $staff->id }}</td>
    </tr>
    <tr>
      <td>Nama</td>
      <td>{{ $staff->nama }}</td>
    </tr>
    <tr>
      <td>Email</td>
      <td>{{ $staff->email }}</td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>{{ $staff->alamat }}</td>
    </tr>
    <tr>
      <td>Telefon</td>
      <td>{{ $staff->telefon }}</td>
    </tr>
    <tr>
      <td>Unit</td>
      <td>{{ $staff->unit }}</td>
    </tr>
    <tr>
      <td>Role</td>
      <td>
        @if( $staff->role == 'admin' )
        <span class="btn btn-sm btn-primary">
        {{ ucwords( $staff->role ) }}
        </span>
        @else
        <span class="btn btn-sm btn-success">
        {{ ucwords( $staff->role ) }}
        </span>
        @endif
      </td>
    </tr>
  </tbody>
</table>

    </div>
  </div>
</div>





@endsection
