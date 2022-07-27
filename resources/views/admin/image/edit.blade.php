

@extends('layouts.adminbase')

@section('title', 'Edit Category:' .$data->title)


@section('content')





<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h1 style="color:DodgerBlue;">> Edit Category: {{$data->title}}</h1>
                            <br>
                        </div>
                        <!--  Forms Start -->
                        <form action="{{route('admin.category.update',['id'=>$data->id ])}}" method="post" enctype="multipart/form-data">
                            @csrf


                            <label for="parent_id class="col-sm-12 col-md-12"><b>parent_id</b></label>
                            <select id="parent_id" name="parent_id" class="selectpicker form-control" data-style="btn-outline-primary" data-size="5" tabindex="-98">
                                <option value="0" selected="selected">Main Category</option>
                                @foreach($datalist as $rs)
                                    <option value="{{ $rs->id}}" @if($rs->id == $data->parent_id)  selected="selected" @endif >
                                    {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                                @endforeach
                            </select>

                            <div class="form-group row">
                                <label for="title" class="col-sm-12 col-md-12 col-form-label"><b>Text</b></label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" name="title" value="{{$data->title}}" placeholder="title">
                                </div>
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


                                <button type="submit" class="btn btn-primary">Edit Data</button>

                            </div>
                        </form>

</form>

</code></pre>
                                </div>
                            </div>
                        </div>
                        <!-- horizontal Basic Forms End -->


