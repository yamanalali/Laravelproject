

@extends('layouts.adminwindow')

@section('title', 'Show message:' .$data->title)


@section('content')





    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h1 style="color:DodgerBlue;">> Show message: {{$data->title}}</h1>
                                <br>
                            </div>
                            <!--  Forms Start -->

                            <a class="btn btn-danger btn-lg btn-block" href="{{route('admin.message.destroy',['id'=>$data->id ])}}" role="button" >Delete message</a>
                            <div class="card-body">
                                <table class="table table-bordered">

                                    <thead>

                                    <tr>
                                        <th style="width: 50px">Id</th>
                                        <th>{{$data->id}}</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 50px">Name</th>
                                        <th>{{$data->name}}</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 50px">Phone</th>
                                        <th>{{$data->phone}}</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 50px">Email</th>
                                        <th>{{$data->email}}</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 50px">Subject</th>
                                        <th>{{$data->subject}}</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 50px">Message</th>
                                        <th>{{$data->message}}</th>
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


                                    <d>
                           <div>
                                     <tbody>

                                        <!-- horizontal Basic Forms End -->


                        </div>
                        </div>

                            <form action="{{route('admin.message.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <textarea class="textarea"  cols="110" id='note' name="note">{{$data->note}}</textarea>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-secondary btn-lg btn-block">Add Your Note</button>
                                </div>
                            </form>
