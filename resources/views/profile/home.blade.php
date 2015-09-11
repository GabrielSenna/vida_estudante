@extends('profile.layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col l12">
            <div class="card col l7">
                <div class="card-content ">
                    <div class="table-profile">
                        <img class="avatar-image left" src="{{ Auth::user()->getAvatar(Auth::user()->id) }}" alt="">
                        <div class="left info-profile">
                            <h5 class="left">{{ Auth::user()->name }}</h5>
                            <h6 class="grey-text">Estudante</h6>
                        </div>
                    </div>
                    
                    <div class="divider"></div>
                </div>
            </div>
            

        </div>
    </div>
</div>


@stop