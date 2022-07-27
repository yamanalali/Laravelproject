

@extends('layouts.adminbase')

@section('title', 'BeautyCenter - Settings')


@section('content')





<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Settings</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active"><a href="{{route('admin.index')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Settings</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                    <h5 class="h4 text-blue mb-20">Settings</h5>
                    <form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
                        <div class="tab">
                            @csrf
                                    <form class="tab">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link text-blue active" data-toggle="tab" href="#general" role="tab" aria-selected="true">General</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-blue" data-toggle="tab" href="#stmp" role="tab" aria-selected="true">StmpEmail</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-blue" data-toggle="tab" href="#about" role="tab" aria-selected="true">About Us</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-blue" data-toggle="tab" href="#reference" role="tab" aria-selected="false">Reference</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-blue" data-toggle="tab" href="#contact" role="tab" aria-selected="false">Contact</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-blue" data-toggle="tab" href="#social" role="tab" aria-selected="false">Social</a>
                                            </li>
                                        </ul>


                                        <!--stmp-->


                                        <div class="tab-content">
                                            <div class="tab-pane fade" id="stmp" role="tabpanel">
                                                <div class="pd-20">


                                                    <div class="form-group">
                                                        <label for="smtpserver" class="col-sm-12 col-md-12 col-form-label"><b>smtpserver</b></label>
                                                        <div class="col-sm-12 col-md-12">
                                                            <input class="form-control" type="text" name="smtpserver" value="{{$data->smtpserver}}" >
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="smtpemail" class="col-sm-12 col-md-12 col-form-label"><b>smtpemail</b></label>
                                                        <div class="col-sm-12 col-md-12">
                                                            <input class="form-control" type="text" name="smtpemail" value="{{$data->smtpemail}}" >
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="smtppassword" class="col-sm-12 col-md-12 col-form-label"><b>smtppassword</b></label>
                                                        <div class="col-sm-12 col-md-12">
                                                            <input class="form-control" type="password" name="smtppassword" value="{{$data->smtppassword}}" >
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="smtpport" class="col-sm-12 col-md-12 col-form-label"><b>smtpport</b></label>
                                                        <div class="col-sm-12 col-md-12">
                                                            <input class="form-control" type="number" name="smtpport" value="{{$data->smtpport}}" >
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                            <!--reference-->

                                            <div class="tab-pane fade" id="reference" role="tabpanel">
                                                <div class="pd-20">

                                                    <div class="form-group">
                                                        <label for="references" >Reference</label>
                                                        <textarea class="form-control" name="references" >{{$data->references}}</textarea>

                                                    </div>

                                                </div>
                                            </div>

                                            <!--about-->

                                            <div class="tab-pane fade" id="about" role="tabpanel">
                                                <div class="pd-20">

                                                    <div class="form-group">
                                                        <label for="aboutus" >{{$data->aboutus}}</label>
                                                        <textarea class="form-control" name="aboutus" ></textarea>

                                                    </div>

                                                </div>
                                            </div>


                                            <!--contact-->

                                            <div class="tab-pane fade" id="contact" role="tabpanel">
                                                <div class="pd-20">

                                                    <div class="form-group">
                                                        <label for="contact" >Contact Us</label>
                                                        <textarea class="form-control" name="contact">{{$data->contact}}</textarea>

                                                    </div>

                                                </div>
                                            </div>

                                            <!--general-->
                                            <div class="tab-pane fade active show" id="general" role="tabpanel">
                                                <div class="pd-20">
                                                    <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-group">
                                                    <div class="form-group row">
                                                        <label id="title" class="col-sm-12 col-md-12 col-form-label"><b>title</b></label>
                                                        <div class="col-sm-12 col-md-12">
                                                            <input class="form-control" type="text" name="title" value="{{$data->title}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="keywords" class="col-sm-12 col-md-12 col-form-label"><b>keywords</b></label>
                                                        <div class="col-sm-12 col-md-12">
                                                            <input class="form-control" type="text" name="keywords" value="{{$data->keywords}}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="description" class="col-sm-12 col-md-12 col-form-label"><b>description</b></label>
                                                        <div class="col-sm-12 col-md-12">
                                                            <input class="form-control" type="text" name="description" value="{{$data->description}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="company" class="col-sm-12 col-md-12 col-form-label"><b>company</b></label>
                                                        <div class="col-sm-12 col-md-12">
                                                            <input class="form-control" type="text" name="company" value="{{$data->company}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="address" class="col-sm-12 col-md-12 col-form-label"><b>address</b></label>
                                                        <div class="col-sm-12 col-md-12">
                                                            <input class="form-control" type="text" name="address" value="{{$data->address}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="phone" class="col-sm-12 col-md-12 col-form-label"><b>Phone</b></label>
                                                        <div class="col-sm-12 col-md-12">
                                                            <input class="form-control" type="number" name="phone" value="{{$data->phone}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="fax" class="col-sm-12 col-md-12 col-form-label"><b>Fax</b></label>
                                                        <div class="col-sm-12 col-md-12">
                                                            <input class="form-control" type="number" name="fax" value="{{$data->fax}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="email" class="col-sm-12 col-md-12 col-form-label"><b>Email</b></label>
                                                        <div class="col-sm-12 col-md-12">
                                                            <input class="form-control" type="text" name="email" value="{{$data->email}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Custom file input</label>
                                                        <div class="custom-file"  >
                                                            <input type="file" class="custom-file-input"  name="icon">
                                                            <label class="custom-file-label"  ><b>{{$data->icon}}</b></label>
                                                        </div>
                                                    </div>
                                                    <div

                                                    <label for="status" class="col-sm-12 col-md-12"><b>Status</b></label>
                                                    <select id="status" name="status" class="form-control" placeholder="status" required>
                                                        <option>True</option>
                                                        <option>False</option>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>




                                            <!--social-->

                                            <div class="tab-pane fade" id="social" role="tabpanel">
                                                <div class="pd-20">

                                                    <div class="form-group">
                                                        <label for="youtube" class="col-sm-12 col-md-12 col-form-label"><b>YouTube</b></label>
                                                        <div class="col-sm-12 col-md-12">
                                                            <input class="form-control" type="text" name="youtube" value="{{$data->youtube}}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="instagram" class="col-sm-12 col-md-12 col-form-label"><b>instagram</b></label>
                                                        <div class="col-sm-12 col-md-12">
                                                            <input class="form-control" type="text" name="instagram" value="{{$data->instagram}}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="twitter" class="col-sm-12 col-md-12 col-form-label"><b>twitter</b></label>
                                                        <div class="col-sm-12 col-md-12">
                                                            <input class="form-control" type="text" name="twitter" value="{{$data->twitter}}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="facebook" class="col-sm-12 col-md-12 col-form-label"><b>facebook</b></label>
                                                        <div class="col-sm-12 col-md-12">
                                                            <input class="form-control" type="text" name="facebook" value="{{$data->twitter}}">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                        <button type="submit" class="btn btn-primary">Submit Data</button>

                    </form>
                                        </div>
                                    </div>
                    </form>
                </div>
                </form>

            </div>

