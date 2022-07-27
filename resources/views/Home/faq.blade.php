@extends('layouts.FrontBase')

@section('title', 'Frequently Asked Questions. | '. $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon',Storage::URL($setting->icon))
@section('content')
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Frequently Asked Questions.</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{route('home')}}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Contact</p>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5">
        @foreach($datalist as $rs)
            <div id="accordion">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq1" aria-expanded="false">
                           <h5> {!! $rs->question !!} </h5>
                        </button>
                    </div>
                    <div id="faq1" class="collapse" data-parent="#accordion" style="">
                        <div class="card-body">
                            {!! $rs->answer !!}
                        </div>
                    </div>

                </div>
           </div>
        @endforeach

                </div>
            </div>
        </div>
    </div>


@endsection
