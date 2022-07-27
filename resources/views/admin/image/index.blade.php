

@extends('layouts.adminwindow')

@section('title', 'Service Image Gallery')


@section('content')






    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <h2>{{$Service->title}}</h2>
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>blank</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">blank</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">


                            </div>
                        </div>
                    </div>
                </div>
                <!-- table -->
                <form action="{{route('admin.image.store' , ['sid'=>$Service->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                     <div class="form-group row">
                                <label for="title" class="col-sm-12 col-md-12 col-form-label"><b>Text</b></label>
                                <div class="col-sm-12 col-md-12">
                                    <input class="form-control" type="text" name="title" >
                                </div>
                     </div>
                    <div class="form-group">
                        <label>Example file input</label>
                        <input name="image" type="file" class="form-control-file form-control height-auto">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Data</button>
                </form>
                <!-- table -->
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix mb-20">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Services</h4>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">title</th>
                            <th scope="col">image</th>
                            <th style="width: 40px">Edit</th>
                            <th style="width: 40px">Delete</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($images as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->title}}</td>
                                <td>
                                    @IF   ( $rs->image )
                                        <img src="{{Storage::URL($rs->image)}}" style="height: 40px">
                                    @endif
                                </td>
                                <td><a href={{route('admin.image.destroy',['sid'=>$Service->id ,'id'=>$rs->id])}} class="btn btn-success" >Delete </a> </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="collapse collapse-box" id="basic-table">
                        <div class="code-box">
                            <div class="clearfix">
                                <a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
                                <a href="#basic-table" class="btn btn-primary btn-sm pull-right" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
                            </div>
                            <pre><code class="xml copy-pre hljs" id="basic-table-code">
<span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"table"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">thead</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">th</span> <span class="hljs-attr">scope</span>=<span class="hljs-string">"col"</span>&gt;</span>#<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">thead</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">tbody</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-name">th</span> <span class="hljs-attr">scope</span>=<span class="hljs-string">"row"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
							</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

