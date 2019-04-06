<div id="footer" class="text-center" style="font-size: 1.1rem;">

    @guest<a href="/login">Log in</a>&nbsp;|&nbsp;<a href="/register">Register</a>@endguest
    @auth<a href="/{{ Auth::user()->slug }}">Profile</a>&nbsp;|&nbsp;<a href="/{{ Auth::user()->slug }}/edit">Edit</a>&nbsp;|&nbsp;<a href="/logout">Logout</a>&nbsp;|&nbsp;<a href="/{{ Auth::user()->slug }}/code"><i class="fas fa-qrcode"></i></a>@endauth

</div>
