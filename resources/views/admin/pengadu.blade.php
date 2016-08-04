@extends('admin/layout')

@section('content')
<h1>{{ $page_title or "" }}</h1>

<div class="table-responsive">

<table class="table table-bordered table-hover">

<thead>
  <tr class="active">
    <th></th>
    <th>ID</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Alamat</th>
    <th>Telefon</th>
    <th>Tindakan</th>
  </tr>
</thead>
<tbody>

@foreach( $senarai_pengadu as $pengadu )
<tr>
  <td> {!! Form::checkbox('id', $pengadu->id, false) !!}  </td>
  <td>{{ $pengadu->id }}</td>
  <td>{{ $pengadu->nama }}</td>
  <td>{{ $pengadu->email }}</td>
  <td>{{ $pengadu->alamat }}</td>
  <td>{{ $pengadu->telefon }}</td>
  <td>
    <a href="{{ url('admin/staff/' . $pengadu->id ) }}" class="btn btn-xs btn-primary">Detail</a>
    <a href="{{ url('admin/staff/' . $pengadu->id . '/edit' ) }}" class="btn btn-xs btn-info">Edit</a>
    <!-- modal -->
    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-delete-{{ $pengadu->id }}">Hapus</button>

    <div id="modal-delete-{{ $pengadu->id }}" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
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
            <a href="{{ url('admin/staff/' . $pengadu->id . '/delete') }}" class="btn btn-danger">Ya Setuju!</a>
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
{!! $senarai_pengadu->render() !!}

@endsection
