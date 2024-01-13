<?php
use App\Models\Country;
use App\Models\State;
use App\Models\District;
use App\Models\Taluk;

$country= Country::all();
$state =State::all();
$district = District::all();
$taluk = Taluk::all();


?>

@extends('layouts.app')

@section('content')
<div class="container px-1 py-5 mx-auto">
@if (session('success'))
    <div class="alert alert-success">
      <button class="btn-close" type="button" data-bs-dismiss="alert"></button>
      <strong> {{ session('success') }} </strong> 
    </div>
@endif
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11">
            <div class="card bg-light mt-3">
                <div class="card-header">
                    <h5 class="text-center text-primary">Student Management System</h5>
                </div>
                        <div class="card-body">

                        <form class="form-card" action="{{ route('student/store') }}" method="post" autocomplete="off" >
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <label for="name" style="text-align:left">Student</label>
                                            <input type="name" class="form-control" name="name" placeholder="enter your name...">
                                            <div class="valid-feedback">
                                            Looks good!
                                            </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                            <label for="email" style="text-align:left">Email</label>
                                            <input type="email" class="form-control" name="email" placeholder="enter your email...">
                                            <div class="valid-feedback">
                                            Looks good!
                                            </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                            <label for="phone" style="text-align:left">Phone</label>
                                            <input type="tel" pattern="[0-9]{10}" class="form-control" name="phone" placeholder="enter your phone...">
                                            <div class="valid-feedback">
                                            Looks good!
                                            </div>
                                </div>
                                <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="country" style="text-align:left">Country</label>
                                                <select class="form-select" id="country" name="country" required>
                                                <option selected="" value="">Choose Country...</option>
                                                @foreach($country as $key=>$value)
                                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                @endforeach
                                                </select>
                                                <div class="invalid-feedback">
                                                Please select a valid country.
                                                </div>
                                            </div>
                                </div>
                                <div class="col-lg-6">
                                                <label for="state" class="form-label">State</label>
                                                <select class="form-select" name="state" id="state" required="">
                                                <option selected="" disabled="" value="">Choose State...</option>
                                                <!-- @foreach($state as $key=>$value)
                                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                @endforeach -->
                                                </select>
                                                <div class="invalid-feedback">
                                                Please select a valid state.
                                                </div>
                                </div>
                                <div class="col-lg-6">
                                <div class="form-group">
                                                <label for="district" class="form-label">District</label>
                                                <select class="form-select" name="district" id="district" required>
                                                <option selected="" disabled="" value="">Choose District...</option>
                                                <!-- @foreach($district as $key=>$value)
                                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                @endforeach -->
                                                </select>
                                                <div class="invalid-feedback">
                                                Please select a valid district.
                                                </div>
                                </div>
                                </div>
                                <div class="col-lg-6">
                                <div class="form-group">
                                                <label for="taul" class="form-label">Taluk</label>
                                                <select class="form-select" name="taluk" id="taluk" required>
                                                <option selected="" disabled="" value="">Choose Taluk...</option>
                                                <!-- @foreach($taluk as $key=>$value)
                                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                @endforeach -->
                                                </select>
                                                <div class="invalid-feedback">
                                                Please select a valid taluk.
                                                </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" name="address" placeholder="enter your address...">
                                </div>
                            </div>


                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <button class="btn btn-outline-success mt-5" style="width:100%;" type="submit"> Save </button>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <button class="btn btn-outline-primary mt-5" style="width:100%;" type="reset"> Reset </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@section('script')
<script>
            //   $("#state").empty();
            //   $("#state").append('<option value="">--Select State--</option>');
 $( "#country" ).change(function()
   {
         var country = $('#country').val();
         var _token   = $('meta[name="csrf-token"]').attr('content');
         
         console.log(country);
         console.log(_token);
         $.ajax(
           {
             type: "POST",
             url: '/getstate', //This is what I have updated
             data:
             { 
                 state: country,
               _token: _token
             },
             success: function(data) {
             console.log(data);
           $('#state').empty();
             
            $("#state").append('<option value="">Choose State...</option>');
             $.each(data,function(key,value)
             {

                 $("#state").append('<option value="'+key+'">'+value+'</option>');
         });
         }
   }) });
   $( "#state" ).change(function()
   {
         var state = $('#state').val();
         var _token   = $('meta[name="csrf-token"]').attr('content');
         
         console.log(state);
         console.log(_token);
         $.ajax(
           {
             type: "POST",
             url: '/getdistrict', //This is what I have updated
             data:
             { 
                 district: state,
               _token: _token
             },
             success: function(data) {
             console.log(data);
           $('#district').empty();
             
            $("#district").append('<option value="">Choose District...</option>');
             $.each(data,function(key,value)
             {

                 $("#district").append('<option value="'+key+'">'+value+'</option>');
         });
         }
   }) });
   $( "#district" ).change(function()
   {
         var district = $('#district').val();
         var _token   = $('meta[name="csrf-token"]').attr('content');
         
         console.log(district);
         console.log(_token);
         $.ajax(
           {
             type: "POST",
             url: '/gettaluk', //This is what I have updated
             data:
             { 
                 taluk: district,
               _token: _token
             },
             success: function(data) {
             console.log(data);
           $('#taluk').empty();
             
            $("#taluk").append('<option value="">Choose Taluk...</option>');
             $.each(data,function(key,value)
             {

                 $("#taluk").append('<option value="'+key+'">'+value+'</option>');
         });
         }
   }) });
</script>
@endsection










