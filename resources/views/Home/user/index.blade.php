@extends('layouts.FrontBase')

@section('title', 'User Panel ')

@section('content')
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">User Panel</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{route('home')}}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">User Panel</p>
            </div>
        </div>
    </div>
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
                @include('home.user.usermenu')


            </div>
        </div>

            @include('profile.show')


        </div>
    </div>
    </div>
    </div>
@endsection
