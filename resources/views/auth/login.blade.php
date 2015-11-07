<form method="POST" action="/auth/login">
    /*{!! csrf_field() !!}*/

    <div>
        Email
        <input type="email" name="email" id="email">
    </div>

    <div>
        Heslo
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Zapamatat ma
    </div>

    <div>
        <button type="submit">Prihlas sa</button>
    </div>
</form>