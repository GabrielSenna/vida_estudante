<div class="row side-bar-content hide-on-med-and-down">
    <div class="side-bar col l2 hide-on-med-and-down">

        <ul class="collection z-depth-1">
            <li class="collection-item">
                <form action="{{ route('search') }}" method="get">

                    <div class="input-field row search-field">

                        <div class="col l10">
                            <input type="text" name="p" id="p">
                            <label for="p" class="grey-text">Buscar</lab2l>
                        </div>
                        <div class="col l2">
                            <button type="submit" class="btn btn-floating btn-flat yellow darken-2 waves-effect"><i class="material-icons">search</i></button>
                        </div>

                    </div>

                </form>
            </li>
            <li class=""><a href="{{ route('profile.edit') }}" class="collection-item grey-text text-darken-2">Editar perfil<i class="material-icons right grey-text text-darken-2">person</i></a></li>
            <li class=""><a href="{{ route('friends') }}" class="collection-item grey-text text-darken-2">Amigos({{ count(Auth::user()->myFriends()) }})<i class="material-icons right grey-text text-darken-2">group</i></a></li>
            <li class=""><a href="#" class="collection-item grey-text text-darken-2">Configurações<i class="material-icons right grey-text text-darken-2">settings</i></a></li>
            
            <div class="divider"></div>
            <li class="collection-item blue-grey lighten-5 cyan-text text-darken-2">Área de estudante</li>
            <li class=""><a href="{{ route('myProjects') }}" class="collection-item grey-text text-darken-2">Meus Projetos({{ count(Auth::user()->projectsFromStudent) }})<i class="material-icons right grey-text text-darken-2">picture_as_pdf</i></a></li>
            <li class=""><a href="{{ route('myAdvisor') }}" class="collection-item grey-text text-darken-2">Meus instrutores({{count(Auth::user()->advisors())}})<i class="material-icons right grey-text text-darken-2">work</i></a></li>

            <div class="divider"></div>
            <li class="collection-item blue-grey lighten-5 yellow-text text-darken-2">Área de orientador</li>
            <li class=""><a href="{{ route('students') }}" class="collection-item grey-text text-darken-2">Meus alunos({{ count(Auth::user()->students()) }})<i class="material-icons right grey-text text-darken-2">school</i></a></li>
            <li class=""><a href="{{ route('MyStudentsProjects') }}" class="collection-item grey-text text-darken-2">Projetos dos meus alunos({{ count(Auth::user()->projectsFromAdvisor) }})<i class="material-icons right grey-text text-darken-2">picture_as_pdf</i></a></li>
        </ul>

    </div>
     <button class="side-bar-btn-open close btn-floating cyan accent-4 btn-small btn-flat"><i class="material-icons yellow-text">keyboard_arrow_down</i></button>
</div>