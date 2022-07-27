

@extends('layouts.adminwindow')

@section('title', 'Show comment:' .$data->title)


@section('content')





    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h1 style="color:DodgerBlue;">> Show Comment: {{$data->title}}</h1>
                                <br>
                            </div>
                            <!--  Forms Start -->

                            <a class="btn btn-danger btn-lg btn-block" href="{{route('admin.comment.destroy',['id'=>$data->id ])}}" role="button" >Delete Comment</a>
                            <div class="card-body">
                                <table class="table table-bordered">

                                    <thead>

                                    <tr>
                                        <th style="width: 50px">Id</th>
                                        <th>{{$data->id}}</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 50px">Service</th>
                                        <th>{{$data->service->title}}</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 50px">Name & Surename</th>
                                        <th>{{$data->user->name}}</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 50px">subject</th>
                                        <th>{{$data->subject}}</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 50px">Phone</th>
                                        <th>{{$data->phone}}</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 50px">Review</th>
                                        <th>{{$data->review}}</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 50px">Rate</th>
                                        <th>{{$data->rate}}</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 50px">iP</th>
                                        <th>{{$data->IP}}</th>
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



                           <div>
                                     <tbody>

                                        <!-- horizontal Basic Forms End -->


                        </div>
                        </div>

                            <form action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <select name="status" >
                                    <option selected>{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-secondary btn-lg btn-block">Update Comment</button>
                                </div>
                            </form>
