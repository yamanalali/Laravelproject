<!-- Carousel

<div class="col-lg-9">


        <div id="product-carousel" class="carousel slide" data-ride="carousel">


            @foreach( $sliderdata as $rs )
            <div class="carousel-inner">
                <div class="carousel-item active" style="height: 410px;">
                    <img class="img-fluid" src="{{Storage::urL($rs->image)}}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 700px;">
                    <h4 class="text-light text-uppercase font-weight-medium mb-3">{{$rs->price}}$</h4>
                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">{{$rs->title}}</h3>
                    <a href="{{route('service',['id'=>$rs->id])}}" class="btn btn-light py-2 px-3">See More</a>
                </div>
            </div>
        </div>
    </div>

    @endforeach

    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
            <span class="carousel-control-prev-icon mb-n2"></span>
        </div>
    </a>
    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
            <span class="carousel-control-next-icon mb-n2"></span>
        </div>
    </a>
</div>
</div>

----------------------------------------------------------------------

<div class="col-lg-9">

            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($sliderdata as $rs)
                    <div class="carousel-item active"style="width: 1000px;height: 300px">

                        <img class="w-100 h-100"  src="{{Storage::URL($rs->image)}}" alt="Image"alt="Image" style="width: 1366px;height: 800px" >
                    </div>



                        <div class="carousel-item" style="width: 1000px;height: 300px">
                            <img class="w-100 h-100" src="{{Storage::URL($rs->image)}}" alt="Image" style="width: 1366px;height: 800px">
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

 -->
<div class="col-lg-9">

<div id="header-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @foreach($sliderdata as $rs)
        <div class="carousel-item " style="width: 1366px;height: 500px">
            <img class="img-fluid"  src="{{Storage::URL($rs->image)}}" alt="Image" style="">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 700px;">
                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">{{$rs->title}}</h3>
                    <a href="{{route('service',['id'=>$rs->id])}}" class="btn btn-light py-2 px-3">Shop Now</a>
                </div>
            </div>
        </div>
        @endforeach
        <div class="carousel-item active" style="height: 410px;">
            <img class="img-fluid" src="{{Storage::URL($rs->service_id = 13)}}" style="width: 1366px;height: 500px">
        </div>
    </div>
    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
            <span class="carousel-control-prev-icon mb-n2"></span>
        </div>
    </a>
    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
            <span class="carousel-control-next-icon mb-n2"></span>
        </div>
    </a>
</div>
</div>
