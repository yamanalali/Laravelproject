

@extends('layouts.adminbase')

@section('title', 'Show Category:' .$data->title)


@section('content')





<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h1 style="color:DodgerBlue;">> Show Category: {{$data->title}}</h1>
                            <br>
                        </div>
                        <!--  Forms Start -->

                        <form action="{{route('admin.appoiment.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <select for="status" name="status" >
                                <option value="approved">Approved</option>
                                <option value="rejected">Rejected</option>
                            </select>
                                <textarea class="textarea"  cols="110" id='note' name="note">{{$data->note}}</textarea>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-secondary btn-lg btn-block">Update appoiment</button>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 50px">Id</th>
                                        <th>{{$data->id}}</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 50px">User</th>
                                        <th>{{$data->user->name}}</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 50px">Service</th>
                                        <th>{{$data->service_id}}</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 50px">Date</th>
                                        <th>{{$data->date}}</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 50px">Time</th>
                                        <th>{{$data->time}}</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 50px">Price</th>
                                        <th>{{$data->price}}</th>
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


