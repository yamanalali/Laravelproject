

@extends('layouts.adminbase')

@section('title', 'Show Service:' .$data->title)


@section('content')





<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h1 style="color:DodgerBlue;">> Show Service: {{$data->title}}</h1>
                            <br>
                        </div>
                        <!--  Forms Start -->

                        <a class="btn btn-success btn-lg btn-block" href="{{route('admin.service.edit',['id'=>$data->id ])}}" role="button" >Edit Service</a>
                        <a class="btn btn-success btn-lg btn-block" href="{{route('admin.service.destroy',['id'=>$data->id ])}}" role="button" >Delete Service</a>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>

                                    <tr>
                                        <th style="width: 50px">Id</th>
                                        <th>{{$data->id}}</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 50px">Category</th>
                                        <th>
                                            {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category, $data->category->title)}}

                                        </th>
                                    </tr>
                                    <tr>
                                        <th style="width: 50px">Title</th>
                                        <th>{{$data->title}}</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 50px">Keywords</th>
                                        <th>{{$data->keywords}}</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 50px">Type of service</th>
                                        <th>{{$data->type}}</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 50px">Sessions</th>
                                        <th>{{$data->sessions}}</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 50px">Tax %</th>
                                        <th>{{$data->tax}}</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 50px">Detail</th>
                                        <th>{{$data->detail}}</th>
                                    </tr>

                                    <tr>
                                        <th style="width: 50px">Image</th>
                                        <th>
                                            @IF   ( $data->image )
                                                <img src="{{Storage::URL($data->image)}}" style="height: 40px">
                                            @endif
                                        </th>
                                    </tr>

                                    <tr>
                                        <th style="width: 50px">Status</th>
                                        <th>{{$data->status}}</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 50px">Created at</th>
                                        <th>{{$data->created_at}}</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 50px">Updated at</th>
                                        <th>{{$data->updated_at}}</th>
                                    </tr>

                                    </thead>

                                    <tbody>
                                    <tr>
                        <!-- horizontal Basic Forms End -->


