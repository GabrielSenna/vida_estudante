@extends('profile.layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col l12 m12 s12">
            @include('errors._error-alert')
            <div class="col l8 m12 s12">
                <div class="card ">
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
            <div class="col l4 m12 s12">
                <div class="card grey lighten-4">
                    <div class="card-content">
                        <h5 class="blue-text">Amigos</h5>
                        <div class="row center-align">
                            @forelse(Auth::user()->myFriends()->slice(0,6) as $user)


                            <a href="#" class="col l4 m12 s12 center-align white valign-wrapper waves-effect waves-teal" style="height:150px;">

                                <img src="{{ $user->getAvatar() }}" alt="" class="center-align avatar-search" style="margin-top:15px">
                                <br>
                                <p class="valign grey-text text-darken-2" style="font-size:13px">{{ $user->name }}</p>
                                
                                
                                

                            </a>
                            
                            
                        @empty
                            <p class="collection-item">Você não possui amigos</p>
                        @endforelse
                        </div>
                        <a href="{{ route('friends') }}" class="btn center-align">Ver todos</a>
                        
                        <br>
                        <div class="divider">
                        </div>

                    </div>

                </div>
            </div>
            
            

        </div>
    </div>
</div>


@stop