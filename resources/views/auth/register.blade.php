<form method="POST" action="/auth/register">
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
        <button type="submit">Registrovat</button>
    </div>
</form>