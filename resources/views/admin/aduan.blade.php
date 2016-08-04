@extends('admin/layout')

@section('content')
<h1>{{ $page_title or "" }}</h1>

<div class="table-responsive">

<table class="table table-bordered table-hover">

<thead>
  <tr class="active">
    <th></th>
    <th>ID</th>
    <th>Sabjek</th>
    <th>Kandungan</th>
    <th>Tarikh</th>
    <th>Kategori</th>
    <th>Lampiran</th>
    <th>Status</th>
    <th>Tindakan</th>
  </tr>
</thead>
<tbody>

@foreach( $senarai_aduan as $aduan )
<tr>
  <td> {!! Form::checkbox('id', $aduan->id, false) !!}  </td>
  <td>{{ $aduan->id }}</td>
  <td>{{ $aduan->sabjek }}</td>
  <td>{{ $aduan->kandungan }}</td>
  <td>{{ $aduan->tarikh }}</td>
  <td>{{ $aduan->kategori }}</td>
  <td><a href="{{ url('/upload/'  . $aduan->lampiran ) }}">Klik Sini</a></td>
  <td>{{ $aduan->status }}</td>
  <td>
    <a href="{{ url('admin/staff/' . $aduan->id ) }}" class="btn btn-xs btn-primary">Detail</a>
    <a href="{{ url('admin/staff/' . $aduan->id . '/edit' ) }}" class="btn btn-xs btn-info">Edit</a>
    <!-- modal -->
    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-delete-{{ $aduan->id }}">Hapus</button>

    <div id="modal-delete-{{ $aduan->id }}" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
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
            <a href="{{ url('admin/staff/' . $aduan->id . '/delete') }}" class="btn btn-danger">Ya Setuju!</a>
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
{!! $senarai_aduan->render() !!}


@endsection
