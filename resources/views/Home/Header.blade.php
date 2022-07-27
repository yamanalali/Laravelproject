<!-- Topbar Start -->
<div class="container-fluid">
    <div class="row bg-secondary py-2 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
            <div class="d-inline-flex align-items-center">
                <a class="text-dark" href="{{route('faq')}}">FAQs</a>
                <span class="text-muted px-2">|</span>
                <a class="text-dark" href="">Help</a>
                <span class="text-muted px-2">|</span>
                <a class="text-dark" href="">Support</a>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">

            </div>
        </div>
    </div>
    <div class="row align-items-center py-3 px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a href="{{route('home')}}" class="text-decoration-none">
                <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">Y</span>aman</h1>
            </a>
        </div>
        <div class="col-lg-6 col-6 text-left">
            <form action="">
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="Search for products">
                    <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                    </div>
                </div>
            </form>
        </div>
            @auth()
        <div class="col-lg-3 col-6 text-center">

            <a href="{{route('userpanel.index')}}" class="btn btn-primary">{{Auth::user()->name}}</a>
            <a href="/logoutuser" class="btn border">Logout</a>
            @endauth
            @guest()
            <a href="/loginuser" class="btn border">Login</a>

                <a href="/registeruser" class="btn border">Register</a>
                @endguest
            </a>

        </div>
    </div>

</div>
</div>

<!-- Topbar End -->
<!-- Navbar Start -->
<div class="container-fluid">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                                <div class="navbar-nav mr-auto py-0">
                                    <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                                    <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                                    <a href="{{route('about')}}" class="nav-item nav-link">About Us</a>
                                    <a href="{{route('reference')}}" class="nav-item nav-link">Reference</a>
                                    <a href="{{route('faq')}}" class="nav-item nav-link">Faqs</a>
                                    <div class="nav-item dropdown">

            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->
