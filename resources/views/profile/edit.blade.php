@extends('profile.layouts.master')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-content ">
                <h4>Editar perfil</h4>
                @if(count($errors))
                    @foreach($errors->all() as $error)
                        <div class="card">
                            <div class="card-content red lighten-3 white-text">
                                <p>{{ $error }}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
                <div class="row">
                    <div class="col">
                        <img src="{{ Auth::user()->getAvatar(Auth::user()->id) }}" alt="" class="avatar-image avatar-image-edit">
                    </div>
                    <div class="">

                        <form action="{{ route('profile.edit.avatar') }}" method="post" class="col l4" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="file-field input-field">
                                <input class="file-path validate" type="text" name="image-field" id="image-field"/>
                                <label for="image-field">Selecione sua imagem</label>


                                <input type="file" name="image-content" id="image-content" />

                                <button type="submit" class="btn btn-flat yellow darken-2 white-text submit-avatar">Enviar</button>



                            </div>
                        </form>

                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <a href="{{ route('edit.avatar.delete') }}" class=" btn btn-flat red lighten-3 white-text">Remover imagem</a>
                    </div>
                </div>
                <br>
                <div class="divider"></div>
                <div class="row">
                    <br>
                    <form method="post" action="{{ route('user.edit') }}" class="col l3 m5 s12">
                        {!! csrf_field() !!}
                        <div class="input-field">
                            <input type="text" id="name" name="name" value="{{ Auth::user()->name }}">
                            <label for="name">Nome</label>
                            <br>
                            
                        </div>
                        <div class="input-field">
                            <input type="text" id="occupation" name="occupation" value="{{ Auth::user()->occupation }}">
                            <label for="occupation">Ocupação atual</label>
                           
                        </div>
                        <button type="submit" class="btn yellow darken-2 btn-flat white-text">Alterar</button>                           
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop