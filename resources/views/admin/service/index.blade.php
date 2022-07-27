

@extends('layouts.adminbase')

@section('title', 'BeautyCenter - Service List')


@section('content')





<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
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
                            <a class="btn btn-outline-primary" href="{{route('admin.service.create')}}" role="button" >Add Service</a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Export List</a>
                                <a class="dropdown-item" href="#">Policies</a>
                                <a class="dropdown-item" href="#">View Assets</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                        <th scope="col">Category</th>
                        <th scope="col">title</th>
                        <th scope="col">Price</th>
                        <th scope="col">type</th>
                        <th scope="col">image</th>
                        <th scope="col">image Gallery</th>
                        <th scope="col">status</th>
                        <th style="width: 40px">Edit</th>
                        <th style="width: 40px">Delete</th>
                        <th style="width: 40px">Show</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>  {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category, $rs->category->title)}}</td>
                        <td>{{$rs->title}}</td>
                        <td>{{$rs->price}}</td>
                        <td>{{$rs->type}}</td>
                        <td>
                        @IF   ($rs->image)
                            <img src="{{Storage::URL($rs->image)}}" style="height: 40px">
                            @endif
                        </td>

                        <td>
                            <a href='{{route('admin.image.index',['sid'=>$rs->id ])}}' onclick="return !window.open(this.href, '','top=50 left')">
                                <img  src="{{asset("assets")}}\admin\vendors\images\download.png" style="height: 40px">
                        <td>{{$rs->status}}</td>
                        <td><a href={{route('admin.service.edit',['id'=>$rs->id ])}} class="btn btn-danger" >Edit</td>
                        <td><a href={{route('admin.service.destroy',['id'=>$rs->id ])}} class="btn btn-success" >Delete </a> </td>
                        <td><a href={{route('admin.service.show',['id'=>$rs->id ])}} class="btn btn-warning" >Show</a> </td>
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
