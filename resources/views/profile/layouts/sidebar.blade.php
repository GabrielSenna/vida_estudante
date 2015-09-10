<div class="row side-bar-content">
    <div class="side-bar col l2 hide-on-med-and-down">

        <ul class="collection">
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
            <li class=""><a href="#" class="collection-item grey-text">Projetos<i class="material-icons right grey-text">insert_drive_file</i></a></li>
            <li class=""><a href="#" class="collection-item grey-text">Seus professores<i class="material-icons right grey-text">school</i></a></li>
        </ul>

    </div>
</div>