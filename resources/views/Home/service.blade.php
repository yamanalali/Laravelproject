@extends('layouts.FrontBase')

@section('title', 'Services' )
@section('content')


    <link rel="stylesheet" type="text/css" href="{{asset("assets")}}/css/stars.css">
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3"><a href="">{{$data->category->title}}</a></h1>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Service Detail</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Shop Detail Start -->
<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col-lg-5 pb-5">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner border">
                    <div class="carousel-item active" style="height: 360px;width: 680px">
                        <img class="w-100 h-100" src="{{Storage::URL($data->image)}}" alt="Image" style="height: 400px;width: 400px">
                    </div>
                    @foreach($images as $rs)
                        <div class="carousel-item" style="height: 360px;width: 680px">
                            <img class="w-100 h-100" src="{{Storage::URL($rs->image)}}" alt="Image" style="height: 400px;width: 400px">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                    <i class="fa fa-2x fa-angle-left text-dark"></i>
                </a>
                <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                    <i class="fa fa-2x fa-angle-right text-dark"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-7 pb-5">
            @include('home.message')

            <h3 class="font-weight-semi-bold">{{$data->title}}</h3>

            <div class="d-flex mb-3">
                <div class="text-primary mr-2">
                    @php
                    $average=$data->comment->average('rate');
                    @endphp
                    <i class="fas fa-star @if($average<1) -0 empty @endif" ></i>
                    <i class="fas fa-star @if($average<2) -0 empty @endif"></i>
                    <i class="fas fa-star @if($average<3) -0 empty @endif"></i>
                    <i class="fas fa-star @if($average<4) -0 empty @endif"></i>
                    <i class="far fa-star @if($average<5) -0 empty @endif"></i>
                </div>
                <small
                  class ="pt-1"> {{$data->comment->count('id')}}
                    {{number_format($average,1)}}
                    Reviews  </small>

            </div>
            <h3 class="font-weight-semi-bold mb-4">{{$data->price * $data->sessions+ $data->price * $data->tax}}$</h3>
            <p class="mb-4">{{$data->description}}</p>
            <div class="d-flex mb-3">
                <p class="text-dark font-weight-medium mb-0 mr-3">Sizes:</p>
                <form>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="size-1" name="size">
                        <label class="custom-control-label" for="size-1">XS</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="size-2" name="size">
                        <label class="custom-control-label" for="size-2">S</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="size-3" name="size">
                        <label class="custom-control-label" for="size-3">M</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="size-4" name="size">
                        <label class="custom-control-label" for="size-4">L</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="size-5" name="size">
                        <label class="custom-control-label" for="size-5">XL</label>
                    </div>
                </form>
            </div>
            <div class="d-flex mb-4">
                <p class="text-dark font-weight-medium mb-0 mr-3">Colors:</p>
                <form>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="color-1" name="color">
                        <label class="custom-control-label" for="color-1">Black</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="color-2" name="color">
                        <label class="custom-control-label" for="color-2">White</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="color-3" name="color">
                        <label class="custom-control-label" for="color-3">Red</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="color-4" name="color">
                        <label class="custom-control-label" for="color-4">Blue</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="color-5" name="color">
                        <label class="custom-control-label" for="color-5">Green</label>
                    </div>
                </form>
            </div>
            <div class="d-flex align-items-center mb-4 pt-2">
                <div class="input-group quantity mr-3" style="width: 130px;">
                    <div class="input-group-btn">
                        <button class="btn btn-primary btn-minus" >
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <input type="text" class="form-control bg-secondary text-center" value="1">
                    <div class="input-group-btn">
                        <button class="btn btn-primary btn-plus">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
            </div>
            <div class="d-flex pt-2">
                <p class="text-dark font-weight-medium mb-0 mr-2">Share on:</p>
                <div class="d-inline-flex">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-pinterest"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>


<!-- Shop Detail End -->
    <div class="row px-xl-5">
        <div class="col">
            <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Appointment</a>
                <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-2">Information</a>
                <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3">Reviews ({{$data->comment->count('id')}} )</a>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="tab-pane-1">
                    <form action="{{route('storeappoiment')}}" novalidate="novalidate" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="service_id"></label>
                            <input type="hidden" class="form-control" name="service_id" value="{{$data->id}}">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="price" value="{{$data->price}}">
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" name="date" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                        <input type="time" id="appt" name="time"
                               min="09:00" max="18:00" required>
                        </div>
                        <label for="payment">Choose a payment method:</label>
                        <select name="payment" id="payment">
                            <option value="Nakit">Nakit</option>
                            <option value="Kredi Kart">Kredi Kart</option>
                        </select>


                        <div>
                            @auth()
                                <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Send
                                    Message</button>
                            @else
                                <a href="/login"  class="btn btn-primary px-3">To make an Appoiment, Please Login</a>
                            @endauth

                        </div>
                </div>
                <div class="tab-pane fade" id="tab-pane-2">
                    <h4 class="mb-3"> Detail</h4>
                    <p>{!! $data->detail!!}</p>
            </div>


            <div class="tab-pane fade" id="tab-pane-3">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="media mb-4">

                                <div class="media-body">
                                    @foreach($reviews as $rs)

                                    <h6>{{$rs->user->name}}<small> - <i>{{$rs->created_at}}</i></small></h6>

                                    <div class="text-primary mb-2">
                                        <i class="far fa-star @if($rs->rate<1) -0 empty @endif" ></i>
                                        <i class="far fa-star @if($rs->rate<2) -0 empty @endif"></i>
                                        <i class="far fa-star @if($rs->rate<3) -0 empty @endif"></i>
                                        <i class="far fa-star @if($rs->rate<4) -0 empty @endif"></i>
                                        <i class="far fa-star @if($rs->rate<5) -0 empty @endif"></i>
                                    </div>
                                    <strong>{{$rs->subject}}</strong>
                                    <p>{{$rs->review}}</p>
                                    @endforeach

                                </div>

                                    <div class="col-md-6">
                                        <h4 class="mb-4">Leave a review</h4>
                                        <div class="rating">
                                            <small>Your email address will not be published. Required fields are marked *</small>
                                            <div class="d-flex my-3">
                                <form class="review-form" action="{{route('storecomment')}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                            <p class="mb-0 mr-2">Your Rating * :</p>
                                            <div class="rate">
                                                <input type="radio" id="star5" name="rate" value="5" />
                                                <label for="star5" title="text">5 stars</label>
                                                <input type="radio" id="star4" name="rate" value="4" />
                                                <label for="star4" title="text">4 stars</label>
                                                <input type="radio" id="star3" name="rate" value="3" />
                                                <label for="star3" title="text">3 stars</label>
                                                <input type="radio" id="star2" name="rate" value="2" />
                                                <label for="star2" title="text">2 stars</label>
                                                <input type="radio" id="star1" name="rate" value="1" />
                                                <label for="star1" title="text">1 star</label>
                                            </div>
                                        </div>
                                <div class="form-group">
                                    <label for="service_id"></label>
                                    <input type="hidden" class="form-control" name="service_id" value="{{$data->id}}">
                                </div>
                                <div class="form-group">
                                    <label for="subject">Your Subject *</label>
                                    <input type="text" class="form-control" name="subject">
                                </div>
                                <div class="form-group">
                                    <label for="review">Your Review *</label>
                                    <textarea type="text" minlength="146" class="form-control" name="review">
                                    </textarea>
                                </div>
                                        @auth()

                                    <div class="form-control">
                                            <input id="button" type="submit" value="Leave Your Review" class="btn btn-primary px-3">
                                        @else
                                    <a href="/login"  class="btn btn-primary px-3">For Submit Your Review, Please Login</a>
                                        @endauth

                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
</div>
    </div>
    <!-- Products End -->
@endsection
