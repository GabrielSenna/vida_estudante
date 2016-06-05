<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li>
            <div id="info-user-menu">
                <img src="{{ Auth::user()->getAvatar(Auth::user()->id) }}" class="avatar-menu" alt="">
                <span class="white-text text-darken-3 user-name-menu truncate center-align">{{ Auth::user()->name }}</span>
            </div>
        </li>
        <li class="collection-item search-component">
            <form action="{{ route('search') }}" method="get">
                <div class="input-field row search-field">
                    <input type="text" name="p" id="p" class="white-text">
                    <label for="p" class="grey-text">Buscar</label>
                    <button type="submit" class="btn btn-flat cyan darken-2 waves-effect white-text" style="margin-top: 0; width: 100%">
                        <i class="material-icons">search</i>                            
                    </button>
                </div>
            </form>
        </li>
        <li class="ident">
            <a href="{{ route('friends') }}" class="blue-grey-text text-lighten-5">
                Amigos({{ count(Auth::user()->myFriends()) }})
                <i class="material-icons right blue-grey-text text-lighten-5">group</i>
            </a>
        </li>
        <li class="ident father-menu">
            <a href="#" class="blue-grey-text text-lighten-5">
                Área do Estudante
                <i class="material-icons right white-text">add</i>
            </a>
            <ul class="child-menu">
                <li class="blue-grey darken-3">
                    <a href="{{ route('myProjects') }}" class="white-text">
                    <span>
                        Meus Projetos({{ count(Auth::user()->projectsFromStudent) }})
                    </span>
                        <i class="material-icons right white-text">picture_as_pdf</i>
                    </a>
                </li>
                <li class="blue-grey darken-3">
                    <a href="{{ route('myAdvisor') }}" class="white-text">
                    <span>
                        Meus instrutores({{ Auth::user()->countAdvisors() }})
                    </span>
                        <i class="material-icons right white-text">work</i>
                    </a>
                </li>
            </ul>
        </li>
        <li class="ident father-menu">
            <a href="#" class="blue-grey-text text-lighten-5">
                Área do Orientador
                <i class="material-icons right white-text">add</i>
            </a>
            <ul class="child-menu">
                <li class="blue-grey darken-3">
                    <a href="{{ route('students') }}" class="white-text">
                        <span>
                            Meus alunos({{ Auth::user()->countStudents() }})
                        </span>
                        <i class="material-icons right white-text">school</i>
                    </a>
                </li>
                <li class="blue-grey darken-3">
                    <a href="{{ route('MyStudentsProjects') }}" class="white-text">
                        <span>
                            Projetos dos meus alunos({{ count(Auth::user()->projectsFromAdvisor) }})    
                        </span>
                        <i class="material-icons right white-text">picture_as_pdf</i>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>