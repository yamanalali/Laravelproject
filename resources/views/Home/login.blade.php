@extends('layouts.FrontBase')

@section('title', 'User login')

@section('content')
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">About Us</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{route('home')}}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">User Login</p>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5">
            @include('auth.login')

           </div>

                </div>
            </div>
        </div>
    </div>


@endsection
