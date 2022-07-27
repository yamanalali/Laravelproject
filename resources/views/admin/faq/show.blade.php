

@extends('layouts.adminbase')

@section('title', 'Show faq:' .$data->title)


@section('content')





<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h1 style="color:DodgerBlue;">> Show faq: {{$data->title}}</h1>
                            <br>
                        </div>
                        <!--  Forms Start -->

                        <a class="btn btn-success btn-lg btn-block" href="{{route('admin.faq.edit',['id'=>$data->id ])}}" role="button" >Edit faq</a>
                        <a class="btn btn-success btn-lg btn-block" href="{{route('admin.faq.destroy',['id'=>$data->id ])}}" role="button" >Delete faq</a>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>

                                    <tr>
                                        <th style="width: 50px">Id</th>
                                        <th>{{$data->id}}</th>
                                    </tr>

                                    <tr>
                                        <th style="width: 50px">Question</th>
                                        <th>{{$data->question}}</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 50px">Answer</th>
                                        <th>{{$data->answer}}</th>
                                    </tr>
                                    <tr>

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


