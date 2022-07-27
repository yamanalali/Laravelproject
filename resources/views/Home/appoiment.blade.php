@extends('layouts.FrontBase')

@section('content')


    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Contact For Any Queries</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form action="{{route('storeappoiment')}}" novalidate="novalidate" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="service_id"></label>
                            <input type="hidden" class="form-control" name="service_id" value="{{$data->id}}">
                        </div>

                        <div class="control-group">
                            <input type="date" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject">
                            <p class="help-block text-danger"></p>
                        </div>

                        <input type="time" id="appt" name="appt"
                               min="09:00" max="18:00" required>

                        <small>Office hours are 9am to 6pm</small>
                        <div class="control-group">
                                <input type="number" class="form-control" id="price" placeholder="The price" required="required" data-validation-required-message="Please enter your email">
                            <p class="help-block text-danger"></p>
                        </div>
                            <label for="payment">Choose a payment method:</label>
                            <select name="payment" id="payment">
                                <option value="1">Nakit</option>
                                <option value="2">Kredi Kart</option>
                            </select>


                        <div>
                            @auth()
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Send
                                Message</button>
                            @else
                                    <a href="/login"  class="btn btn-primary px-3">To make an Appoiment, Please Login</a>
                                @endauth

                        </div>
                    </form>
                </div>
            </div>

            </div>
        </div>
    </div>

@endsection
