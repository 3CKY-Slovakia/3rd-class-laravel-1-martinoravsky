@extends('layouts.master')


@section('content')



<form method="POST" action="/auth/login" style="position:relative;padding:30px">
    {!! csrf_field() !!}

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Heslo
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Zapamatat
    </div>

    <div>
        <button type="submit" style="background-color: #333">Prihlasit</button>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Prihlasenie nebolo uspesne.</strong>
                <br />
                <ul> @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach </ul>
            </div>
        @endif
    </div>
</form>

@stop