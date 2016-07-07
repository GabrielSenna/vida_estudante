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
                            <li><a class="modal-trigger grey-text text-darken-2 drop-item" href="#help">Ajuda<i class="material-icons right grey-text text-darken-2">help</i></a></li>
                            <li><a href="{{ url('auth/logout') }}" class="grey-text text-darken-2 drop-item">Logout<i class="material-icons right grey-text text-darken-2 ">directions_run</i></a></li>
                        </ul>

                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
</div>
<div id="help" class="modal">
    <div class="modal-content">
        <h4>Ajuda</h4>
        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s6"><a class="active cyan-text" href="#test1">Orientador</a></li>
                    <li class="tab col s6"><a href="#test2" class="cyan-text">Aluno</a></li>
                </ul>
            </div>
            <div id="test1" class="col s12">
                <div class="center-align">
                    <a class="btn-floating btn-flat" onclick="plusDivs(-1)"><i class="material-icons grey-text">chevron_left</i></a>
                    <a class="btn-floating btn-flat" onclick="plusDivs(+1)"><i class="material-icons grey-text">chevron_right</i></a>
                </div>
                <img src="{{ asset('img/help/orientador1.png') }}" class="helpSlides1 center-display">
                <img src="{{ asset('img/help/orientador3.png') }}" class="helpSlides1 center-display">
                <img src="{{ asset('img/help/orientador4.png') }}" class="helpSlides1 center-display">
                <img src="{{ asset('img/help/orientador5.png') }}" class="helpSlides1 center-display">
                <img src="{{ asset('img/help/orientador6.png') }}" class="helpSlides1 center-display">
            </div>
            <div id="test2" class="col s12">
                <div class="center-align">
                    <a class="btn-floating btn-flat" onclick="plusDivs2(-1)"><i class="material-icons grey-text">chevron_left</i></a>
                    <a class="btn-floating btn-flat" onclick="plusDivs2(+1)"><i class="material-icons grey-text">chevron_right</i></a>
                </div>
                <img src="{{ asset('img/help/estudante1.png') }}" class="helpSlides2 center-display">
                <img src="{{ asset('img/help/estudante2.png') }}" class="helpSlides2 center-display">
                <img src="{{ asset('img/help/estudante3.png') }}" class="helpSlides2 center-display">
                <img src="{{ asset('img/help/estudante4.png') }}" class="helpSlides2 center-display">
                <img src="{{ asset('img/help/estudante5.png') }}" class="helpSlides2 center-display">
                <img src="{{ asset('img/help/estudante6.png') }}" class="helpSlides2 center-display">
                <img src="{{ asset('img/help/estudante7.png') }}" class="helpSlides2 center-display">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="row">

        </div>
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat cyan white-text">Entendi</a>
    </div>
</div>