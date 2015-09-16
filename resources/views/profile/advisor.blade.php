@extends('profile.layouts.master')

@section('content')
	<div class="container">
        <div class="row">
            <div class="col l8 m12 s12">

                <div class="collection white">
                    <h5 class="collection-item grey-text">Orientador</h5>
                    <div class="collection-item">
                        @if(count(Auth::user()->advisor))
                            <p>{{ Auth::user()->advisor->name }}</p>
                        @else
                        <p>Você não tem um orientador</p>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>        
@stop