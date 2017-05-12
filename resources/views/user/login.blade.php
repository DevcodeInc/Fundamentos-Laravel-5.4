@if(!Auth::check())
<form method="post" action="{{ route('login') }}" >
    {{ csrf_field() }}
    <div class="aside__login__fields">
        <input name="email"   placeholder="email del usuario" type="email" >
        <input name="password" placeholder="contraseña"        type="password">
    </div>
    <div class="aside__login__submit">
        <button class="btn" type="submit" tabindex="1">Iniciar sesión</button>
    </div>
</form>
@endif