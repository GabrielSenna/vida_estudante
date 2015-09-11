@extends('layouts.master')

@section('content')
<div class="big-image cyan accent-4">

</div>
    <div class="card login-card">
        <div class="card-content">
            @if(count($errors))
                @foreach($errors->all() as $error)
                    <div class="card">
                        <div class="card-content red lighten-3 white-text">
                            <p>{{ $error }}</p>
                        </div>
                    </div>
                @endforeach
            @endif
            <form action="{{ url('auth/register') }}" method="post">
                {!! csrf_field() !!}
                <div class="input-field">
                    <input type="text" name="name" id="name" value="{{ old('name') }}">
                    <label for="name">Nome</label>
                </div>
                <div class="input-field">
                    <input type="text" name="email" id="email" value="{{ old('email') }}">
                    <label for="email">Email</label>
                </div>
                <div class="input-field">
                    <input type="password" name="password" id="password">
                    <label for="password">Senha</label>
                </div>
                <div class="input-field">
                    <input type="password" name="password_confirmation" id="password_confirmation">
                    <label for="password_confirmation">Confirmar Senha</label>
                </div>
                <button type="submit" class="btn btn-flat waves-effect orange white-text send-form">Registrar</button>

            </form>

        </div>
    </div>

@stop