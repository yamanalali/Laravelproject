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
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Service</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Price</th>
                <th scope="col">payment</th>
                <th scope="col">Note</th>
                <th scope="col">status</th>
                <th style="width: 40px">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($appoiments as $rs)
                <tr>
                    <td>{{$rs->id}}</td>
                    <td> <a href="{{route('service',['id'=>$rs->service_id])}}">
                            {{$rs->service_id}} </a>
                    </td>
                    <td>{{$rs->date}}</td>
                    <td>{{$rs->time}}</td>
                    <td>{{$rs->price}}</td>
                    <td>{{$rs->payment}}</td>
                    <td>{{$rs->note}}</td>
                    <td>{{$rs->status}}</td>
                    <td>
                        <a href='{{route('userpanel.appoimentdestroy',['id'=>$rs->id ])}}'      onclick="return confirm('Deleting !! Are You Sure ?')" class="btn btn-danger" >Delete </a>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>

        </div>
    </div>
@endsection
