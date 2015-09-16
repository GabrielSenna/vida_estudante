<div class="row side-bar-content hide-on-med-and-down">
    <div class="side-bar col l2 hide-on-med-and-down">

        <ul class="collection z-depth-1">
            <li class="collection-item">
                <form action="{{ route('search') }}" method="get">

                    <div class="input-field row search-field">

                        <div class="col l10">
                            <input type="text" name="p" id="p">
                            <label for="p" class="blue-text">Buscar</label>
                        </div>
                        <div class="col l2">
                            <button type="submit" class="btn btn-floating btn-flat orange waves-effect"><i class="material-icons">search</i></button>
                        </div>

                    </div>

                </form>
            </li>
            <li class=""><a href="{{ route('profile.edit') }}" class="collection-item grey-text">Editar perfil<i class="material-icons right grey-text">person</i></a></li>
            <li class=""><a href="{{ route('friends') }}" class="collection-item grey-text">Amigos({{ count(Auth::user()->myFriends()) }})<i class="material-icons right grey-text">group</i></a></li>
            <li class=""><a href="#" class="collection-item grey-text">Projeto<i class="material-icons right grey-text">picture_as_pdf</i></a></li>
            <li class=""><a href="{{ route('myAdvisor') }}" class="collection-item grey-text">Meu instrutor<i class="material-icons right grey-text">work</i></a></li>
            <li class=""><a href="{{ route('students') }}" class="collection-item grey-text">Meus alunos({{ count(Auth::user()->allStudents()) }})<i class="material-icons right grey-text">school</i></a></li>
        </ul>

    </div>
     <button class="side-bar-btn-open close btn-floating cyan accent-4 btn-small btn-flat"><i class="material-icons yellow-text">keyboard_arrow_down</i></button>
</div>