@extends('admin/layout')

@section('content')
<h1>{{ $page_title or "" }}</h1>

<a href="{{ url('admin/staff/create') }}" class="btn btn-primary">Tambah Staff</a>

<div class="table-responsive">

<table class="table table-bordered table-hover">

<thead>
  <tr class="active">
    <th>ID</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Tarikh Lahir</th>
    <th>Kad Pengenalan</th>
    <th>Telefon</th>
    <th>Role</th>
    <th>Unit</th>
    <th>Tindakan</th>
  </tr>
</thead>
<tbody>

@foreach( $senarai_staff as $staff )
<tr>
  <td>{{ $staff->id }}</td>
  <td>{{ $staff->nama }}</td>
  <td>{{ $staff->email }}</td>
  <td>{{ $staff->tarikh_lahir }}</td>
  <td>{{ $staff->kad_pengenalan }}</td>
  <td>{{ $staff->telefon }}</td>
  <td>{{ $staff->role }}</td>
  <td>{{ $staff->unit }}</td>
  <td>
    <a href="" class="btn btn-xs btn-primary">Detail</a>
    <a href="" class="btn btn-xs btn-danger">Hapus</a>
  </td>
</tr>
@endforeach

</tbody>

</table>

</div>
{!! $senarai_staff->render() !!}

@endsection
