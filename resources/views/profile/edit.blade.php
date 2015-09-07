@extends('profile.layouts.master')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-content">
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
                    <div>
                        <img src="{{ Auth::user()->getAvatar(Auth::user()->id) }}" alt="" class="avatar-image left">
                        <form action="{{ route('profile.edit.avatar') }}" method="post" class="col l4" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="file-field input-field">
                                <input class="file-path validate" type="text" name="image-field" id="image-field"/>
                                <label for="image-field">Selecione sua imagem</label>


                                <input type="file" name="image-content" id="image-content" />

                                <button type="submit" class="btn btn-flat orange white-text submit-avatar">Enviar</button>



                            </div>
                        </form>

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="{{ route('edit.avatar.delete') }}" class="left btn btn-flat red lighten-3 white-text">Remover imagem</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop