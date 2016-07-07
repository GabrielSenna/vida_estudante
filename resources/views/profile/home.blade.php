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
                            <h5 class="left" style="font-size:1.2rem">{{ Auth::user()->name }}</h5>
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
                        <h5 class="cyan-text">Amigos</h5>
                        <div class="row">
                            @forelse(Auth::user()->myFriends()->slice(0,4) as $user)
                                <div class="col l12 m6 s12 ">
                                    <a href="#" class="friends-link grey lighten-5 waves-effect waves-teal card">
                                        <img src="{{ $user->getAvatar() }}" alt="" class="avatar-friends" style="">
                                        <div>
                                            <p class="grey-text text-darken-3 truncate" style="font-size:14px">{{ $user->name }}</p>
                                            <p class="grey-text text-darken-2 truncate" style="font-size:13px">{{ $user->occupation }}</p>    
                                        </div>
                                    </a>   
                                </div>
                            @empty
                                <div class="row">
                                    <div class="col sm 12">
                                        <p class="collection-item" style="margin-left: 13px">Você não possui amigos</p>
                                    </div>

                                </div>
                            @endforelse
                        </div>
                        <a href="{{ route('friends') }}" class="btn cyan darken-2 center-align">Ver todos</a>
                        
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