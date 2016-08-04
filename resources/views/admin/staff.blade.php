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
    <a href="{{ url('admin/staff/' . $staff->id ) }}" class="btn btn-xs btn-primary">Detail</a>

    <!-- modal -->
    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-delete-{{ $staff->id }}">Hapus</button>

    <div id="modal-delete-{{ $staff->id }}" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Hapus Data Pengesahan</h4>
          </div>
          <div class="modal-body">
            <p>Adakah anda bersetuju untuk hapuskan data ini?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <a href="{{ url('admin/staff/' . $staff->id . '/delete') }}" class="btn btn-danger">Ya Setuju!</a>
          </div>
        </div>
      </div>
    </div>


  </td>
</tr>
@endforeach

</tbody>

</table>

</div>
{!! $senarai_staff->render() !!}

@endsection
