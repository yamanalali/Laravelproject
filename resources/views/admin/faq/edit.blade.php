

@extends('layouts.adminbase')

@section('title', 'Edit faq:' .$data->title)


@section('content')





<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h1 style="color:DodgerBlue;">> Edit faq: {{$data->title}}</h1>
                            <br>
                        </div>
                        <!--  Forms Start -->
                        <form action="{{route('admin.faq.update',['id'=>$data->id ])}}" method="post" enctype="multipart/form-data">
                            @csrf


                            <div  div class="form-group">


                            <div class="form-group row">
                                <label for="question" class="col-sm-12 col-md-12 col-form-label"><b>question</b></label>
                                <div class="col-sm-12 col-md-12">
                                    <input class="form-control" type="text" name="question" value="{{$data->question}}" placeholder="title">
                                </div>
                            </div>

                                <div class="form-group">
                                    <label for="answer" >Answer</label>
                                    <textarea class="form-control" name="answer">{{$data->answer}}</textarea>
                                </div>
                            <div
                            </div>
                             <div>
                                <label for="status"  class="col-sm-12 col-md-12"><b>Status</b></label>
                                <select id="status" name="status" class="form-control" placeholder="status" required>
                                    <option selected>{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>

                                <button type="submit" class="btn btn-primary">Edit Data</button>

                            </div>
                        </form>

</form>

</code></pre>
                                </div>
                            </div>
                        </div>
                        <!-- horizontal Basic Forms End -->


