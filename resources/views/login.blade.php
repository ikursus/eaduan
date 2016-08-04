@extends('layout')

@section('content')

<div class="row">
  <div class="col-md-8 col-md-offset-2">

    <div class="panel panel-default">
      <div class="panel-heading">Login</div>
      <div class="panel-body">

        @if ( Session::get('error') )

        <div class="alert alert-danger">
          {{ Session::get('error') }}
        </div>

        @endif

        {!! Form::open( ['method' => 'POST', 'action' => 'Auth\AuthController@authenticate'] ) !!}
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email"name="email" class="form-control" placeholder="Masukkan Email">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan Password...">
          </div>

          <button type="submit" class="btn btn-default">Masuk</button>
        {!! Form::close() !!}

      </div>
    </div>

  </div>
</div>

@endsection

@section('footer')

@endsection
