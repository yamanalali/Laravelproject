<!-- Navbar Start -->


<div class="container-fluid">
    <div class="row border-top px-xl-5">

        <div class="col-lg-3 d-none d-lg-block">

            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                @php
                    $mainCategories = \App\Http\Controllers\HomeController::maincategorylist()
                @endphp
                <h6 class="m-0">Categories</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>

            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                    @foreach($mainCategories as $rs)


                    <div class="navbar-nav w-100 overflow-hidden" style="height: 390px">

                        <div class="nav-item dropdown">

                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                        @if(count($rs->children))
                            @include('home.categorytree',['children' => $rs->children])
                        @endif
                        </div>
                        <a href="#" class="nav-item nav-link" data-toggle="dropdown">{{$rs->title}} <i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                            </div>

                        </div>
                        @endforeach

                </div>

                </nav>

        </div>


<!-- Navbar End -->

