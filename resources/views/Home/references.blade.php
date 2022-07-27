@extends('layouts.FrontBase')

@section('title', 'References | '. $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon',Storage::URL($setting->icon))
@section('content')
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">About Us</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{route('home')}}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">References</p>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5">
            {!! $setting->references !!}


           </div>

                </div>
            </div>
        </div>
    </div>


@endsection
