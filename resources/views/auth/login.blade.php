@extends('layouts.master')


@section('content')



    <form class="my_form" method="POST" action="/auth/login" role="form" >
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" class="form-control" value="{{old('email')}}">
        </div>
        <div class="form-group">
            <label for="password">Heslo</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div>
            <button type="submit" class="btn btn-success">Prihlásiť</button>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Prihlasenie nebolo uspesne..</strong>
                    <br />
                    <ul> @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach </ul>
                </div>
            @endif
        </div>
    </form>

@stop

