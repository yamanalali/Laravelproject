

@extends('layouts.adminbase')

@section('title', 'Edit Service:' .$data->title)


@section('content')





<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h1 style="color:DodgerBlue;">> Edit Service: {{$data->title}}</h1>
                            <br>
                        </div>
                        <!--  Forms Start -->
                        <form action="{{route('admin.service.update',['id'=>$data->id ])}}" method="post" enctype="multipart/form-data">
                            @csrf


                            <div  div class="form-group">
                                <label>Parent Category</label>
                                <select class="selectpicker form-control" data-style="btn-outline-primary" data-size="5" tabindex="-98" name="category_id" style="width:100%;">
                                @foreach($datalist as $rs)
                                    <option value="{{ $rs->id}}" @if($rs->id == $data->category_id)  selected="selected" @endif >
                                    {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                                @endforeach
                            </select>

                            <div class="form-group row">
                                <label for="title" class="col-sm-12 col-md-12 col-form-label"><b>Text</b></label>
                                <div class="col-sm-12 col-md-12">
                                    <input class="form-control" type="text" name="title" value="{{$data->title}}" placeholder="title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-sm-12 col-md-12 col-form-label"><b>description</b></label>
                                <div class="col-sm-12 col-md-12">
                                    <input class="form-control" type="text" name="description" value="{{$data->description}}"description">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="keywords" class="col-sm-12 col-md-12 col-form-label"><b>keywords</b></label>
                                <div class="col-sm-12 col-md-12">
                                    <input class="form-control" type="text" name="keywords" value="{{$data->keywords}}"keywords">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="price" class="col-sm-12 col-md-12 col-form-label"><b>price</b></label>

                                <div class="col-sm-12 col-md-12">
                                    <input class="form-control" type="text" name="price" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="type" class="col-sm-12 col-md-12 col-form-label"><b>type</b></label>
                                <div class="col-sm-12 col-md-12">
                                    <input class="form-control" type="text" name="type" value="{{$data->type}}"type">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="sessions" class="col-sm-12 col-md-12 col-form-label"><b>sessions</b></label>
                                <div class="col-sm-12 col-md-12">
                                    <input class="form-control" type="text" name="sessions" value="{{$data->sessions}}"sessions">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tax" class="col-sm-12 col-md-12 col-form-label"><b>tax %</b></label>
                                <div class="col-sm-12 col-md-12">
                                    <input class="form-control" type="text" name="tax" value="{{$data->tax}}"tax">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="detail" >detail</label>
                                <textarea class="form-control" name="detail" value="{{$data->detail}}"detail"></textarea>
                            </div>


                            <div class="form-group">
                                <label><b>Custom file input</b></label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="image">
                                    <label class="custom-file-label"><b>Choose file</b></label>
                                </div>
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


