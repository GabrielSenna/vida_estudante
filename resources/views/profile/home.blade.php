@extends('profile.layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col l12">
            <div class="card">
                <div class="card-content table-profile">
                    <img class="avatar-image left" src="{{ Auth::user()->getAvatar(Auth::user()->id) }}" alt="">
                    <div class="left info-profile">
                        <h4 class="left">{{ Auth::user()->name }}</h4>
                        <h5 class="grey-text">Estudante</h5>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


@stop