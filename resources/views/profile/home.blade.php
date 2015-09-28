@extends('profile.layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col l12 m12 s12">
            @include('errors._error-alert')
            <div class="card col l7 m8 s12">
                <div class="card-content ">
                    <div class="table-profile">
                        <img class="avatar-image left" src="{{ Auth::user()->getAvatar(Auth::user()->id) }}" alt="">
                        <div class="left info-profile">
                            <h5 class="left">{{ Auth::user()->name }}</h5>
                            <br>
                            <p class="grey-text occupation-text">{{ Auth::user()->occupation }}</p>
                        </div>
                    </div>
                    
                    <div class="divider"></div>
                </div>
            </div>
            

        </div>
    </div>
</div>


@stop