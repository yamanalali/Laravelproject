
@if($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">
            <strong>{{$message}}</strong>
        </button>
    </div>
@endif


@if($message = Session::get('warning'))
    <div class="alert alert-warning alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">
            <strong>{{$message}}</strong>
        </button>
    </div>
@endif


@if($message = Session::get('error'))
    <div class="alert alert-secondary alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">
            <strong>{{$message}}</strong>
        </button>
    </div>
@endif


@if($message = Session::get('info'))
    <div class="alert alert-info alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">
            <strong>{{$message}}</strong>
        </button>
    </div>
@endif


@if($errors->any())
    <div class="alert alert-secondary">
        <button type="button" class="close" data-dismiss="alert">
            Check These errors
        </button>
    </div>
@endif
