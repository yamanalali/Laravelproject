

@extends('layouts.adminwindow')

@section('title', 'Show Roles:' .$data->title)


@section('content')





    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h1 style="color:DodgerBlue;">> Show Roles: {{$data->title}}</h1>
                                <br>
                            </div>
                            <!--  Forms Start -->

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
                                        <th style="width: 50px">Email</th>
                                        <th>{{$data->email}}</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 50px">Roles</th>
                                        <th>
                                        @foreach($data->role as $role)

                                                {{$role->name}}

                                                <a href='{{route('admin.user.destroyrole',['uid'=>$data->id ,'rid'=>$role->id ])}}'
                                                   onclick="return confirm('Deleting !! Are You Sure ?')" >[x]</a>
                                        @endforeach
                                        </th>

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

                            <form action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post">
                                @csrf
                                <select name="role_id">
                                    @foreach($roles as $role)

                                    <option value="{{$role->id}}">{{$role->name}}</option>

                                    @endforeach

                                </select>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-secondary btn-lg btn-block">Add Role</button>
                                </div>
                            </form>
