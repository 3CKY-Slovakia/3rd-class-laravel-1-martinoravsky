@extends('layouts.master')


@section('content')


      <form class="my_form" method="POST" action="/auth/register" role="form" >
          {!! csrf_field() !!}
            <div class="form-group">
              <label for="name">Meno</label>
              <input type="text" name="name" class="form-control" value="{{old('name')}}">
          </div>
          <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" name="email" class="form-control" value="{{old('email')}}">
          </div>
          <div class="form-group">
              <label for="password">Heslo</label>
              <input type="password" class="form-control" name="password">
          </div>
          <div class="form-group">
              <label for="password_confirmation">Heslo znova</label>
              <input type="password" class="form-control" name="password_confirmation">
          </div>
          <div>
              <button type="submit" class="btn btn-success">Registrovať</button>
              @if (count($errors) > 0)
                  <div class="alert alert-danger">
                      <strong>Registracia nebola uspesna.</strong>
                      <br />
                      <ul> @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach </ul>
                  </div>
              @endif
          </div>
      </form>

@stop