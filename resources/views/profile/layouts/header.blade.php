<div class="navbar-fixed">
    <nav class="white">
        <div class="nav-wrapper">
            <ul>
                <li>
                    <a href="javascript:void(0)" id="hamburger-btn">
                         <i class="material-icons cyan-text">dehaze</i>
                    </a>
                </li>
                <li><a href="{{ route('home') }}" class="logo-top"><img src="{{ asset('img/logo-header.png') }}" alt=""></a></li>
            </ul>
            <div class="">
                <ul class="hide-on-med-and-down left">
                    
                </ul>

                <ul class="right">
                    
                    <li class="hide-on-small-only">
                        <a href="{{ route('home') }}">
                            <img src="{{ Auth::user()->getAvatar(Auth::user()->id) }}" class="avatar-top" alt="">
                            <span class="cyan-text text-darken-3 user-name-top">{{ Auth::user()->name }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-btn-user dropdown-button" data-activates="dropdown-user"><i class="material-icons cyan-text" >arrow_drop_down</i></a>
                        <ul class="dropdown-content" id="dropdown-user">
                            <li class=""><a href="{{ route('profile.edit') }}" class="grey-text text-darken-2 drop-item">Editar perfil<i class="material-icons right grey-text text-darken-2 ">person</i></a></li>
                            <li><a href="{{ url('auth/logout') }}" class="grey-text text-darken-2 drop-item">Logout<i class="material-icons right grey-text text-darken-2 ">directions_run</i></a></li>
                        </ul>

                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
</div>
