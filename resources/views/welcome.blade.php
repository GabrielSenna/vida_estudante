@extends('layouts.master')

@include('layouts.header')

@section('content')
<div class="row">

    <div class=" big-image cyan accent-4">
        <div class="container" >

            <div id="welcome-landpage">
                <div class="row">
                    <div class="col l5 m12 s12">

                        <div class="card login-card">
                            <div class="card-content">
                                <form action="">
                                    {!! csrf_field() !!}
                                    <div class="input-field">
                                        <input type="text" name="email" id="email">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="input-field">
                                        <input type="password" name="password" id="password">
                                        <label for="password">Senha</label>
                                    </div>
                                    <button type="submit" class="btn btn-flat waves-effect cyan white-text send-form">Entrar</button>
                                    <br>
                                    <a href="#" class="btn btn-flat waves-effect blue darken-2 white-text send-form facebook-btn">Entrar com o facebook</a>
                                </form>
                                <h6 class="center-align grey-text">Ainda não é cadastrado?</h6>
                                <a href="#" class="center-align register-btn"><h5>Registre-se aqui!</h5></a>
                            </div>
                        </div>
                    </div>
                    <div class="col l7">
                        <h4 class="white-text center-align">Seja bem-vindo ao Vida Estudante!</h4>
                        <div class="row">
                            <div class="col l6">
                                <div class="image-info">
                                    <img src="{{ asset('img/estudante.jpg') }}" alt="">
                                    <h5 class="center-align cyan-text text-darken-4">Aluno</h5>
                                    <p class="cyan-text text-lighten-4 center-align">Não se preocupe mais em ter que marcar horário com seu professor para orientar seu projeto</p>
                                </div>
                            </div>
                            <div class="col l6">
                                <div class="image-info">
                                    <img src="{{ asset('img/professor.jpg') }}" alt="">
                                    <h5 class="center-align cyan-text text-darken-4">Professor</h5>
                                    <p class="cyan-text text-lighten-4 center-align">Oriente seus alunos de forma objetiva e sem precisar sair de casa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>

    </div>

</div>



@stop