
@section('navbar')
<div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="/">
            <img alt="Brand" src="...">
        </a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            @if (Auth::guest())
                <li><a href="/login">Login</a></li>
                <li>{!! link_to_route('auth.register', $title = 'Register') !!}</a></li>
            @else
                <li class="navbar-text">{{ Auth::user()->name }}</li>
                <li><a href="/logout">Logout</a></li>
            @endif
        </ul>
    </div>
</div>
@stop

