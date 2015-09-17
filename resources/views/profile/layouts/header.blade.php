<div class="navbar-fixed">
    <nav class="white">


        <div class="nav-wrapper">
            <ul>
                <li><a href="{{ route('home') }}" class="brand-logo logo-top"><img src="img/logo-header.png" alt=""></a></li>
            </ul>
            <div class="container">
                <ul class="hide-on-med-and-down left">
                    
                </ul>

                <ul class="right hide-on-med-and-down">
                    
                    <li>
                        <a href="{{ route('home') }}">
                            <img src="{{ Auth::user()->getAvatar(Auth::user()->id) }}" class="avatar-top" alt="">
                            <span class="cyan-text text-darken-3 user-name-top">{{ Auth::user()->name }}</span>
                        </a>
                    </li>
                    <li><a href="{{ url('auth/logout') }}" class="cyan-text">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>