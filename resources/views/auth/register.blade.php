@extends('layouts.master')


@section('content')
@parent




        <!-- resources/views/auth/register.blade.php -->

<form method="POST" action="/auth/register" style="position: relative;padding:30px">
    {!! csrf_field() !!}

    <div>
        Meno
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Heslo
        <input type="password" name="password">
    </div>

    <div>
       Heslo znova
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit" style="background-color: #333">Registrovat</button>
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