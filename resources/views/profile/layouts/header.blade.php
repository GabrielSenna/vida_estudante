<div class="navbar-fixed">
    <nav class="white">
        <div class="nav-wrapper container">
            <ul class="hide-on-small-only left">
                <li>
                    <a href="{{ route('home') }}">
                        <img src="{{ Auth::user()->getAvatar(Auth::user()->id) }}" class="avatar-top" alt="">
                        <span class="cyan-text text-darken-3 user-name-top">{{ Auth::user()->name }}</span>
                    </a>
                </li>
            </ul>
            
            <ul class="right hide-on-small-only">
                <li><a href="{{ url('auth/logout') }}" class="cyan-text">Logout</a></li>
                
            </ul>
        </div>
    </nav>
</div>