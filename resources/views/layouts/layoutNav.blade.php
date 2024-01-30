<nav class="navbar navbar-expand navbar-light  navbg border border-4 rounded">
    <a class="navbar-brand ms-3 " href="{{auth()->check() ?  route('admin.home'): '/'}}">{{auth()->check() ?  auth()->user()->firstName : 'Nodovi'}}</a>
    <ul class="nav navbar-nav ms-auto">
        @if (auth()->check())
    <!-- Korisnik je ulogovan, prikaži opciju za logout -->
    <li class="nav-item h4">
        <form method="POST" action="{{ route('user.logout') }}">
            @csrf
            <button type="submit" class="btn btn-link nav-link text-light ">Logout</button>
        </form>
    </li>
@else
    <!-- Korisnik nije ulogovan, prikaži link za login -->
    <li class="nav-item h4">
        <a class="nav-link text-light mt-1" href="{{ route('user.login') }}">Login</a>
    </li>
@endif
         <li class="nav-item h4" ><a class="nav-link text-light mt-1"   href="{{route('user.register')}}">Register</a></li>
    </ul>
</nav>
