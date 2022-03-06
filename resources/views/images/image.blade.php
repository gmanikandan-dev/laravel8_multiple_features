<?php
use App\Models\Image;
$images=Image::all();


// print_r($url);
// exit;
 
// echo "<pre>";
// print_r($result);

?>

@extends('layouts.app')
@section('content') 
    <div class="container mt-5 bg-light">
    @if (session('success'))
    <div class="alert alert-success">
      <button class="btn-close" type="button" data-bs-dismiss="alert"></button>
      <strong> {{ session('success') }} </strong> 
    </div>
@endif
        <h3 class="text-center mb-5">Multiple Image Upload in Laravel 8</h3>
        <form action="{{route('productupload')}}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                </div>
            @endif -->  
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="user-image mb-3 text-center">
                <div class="imgPreview"> </div>
            </div>            
            <div class="custom-file">
                <input type="file" name="images[]" class="custom-file-input" id="images" multiple="multiple">
                <label class="custom-file-label" for="images">Choose image</label>
            </div>
            <button type="submit" name="submit" class="btn btn-warning btn-block mt-4">
                Upload Images
            </button>
        </form>
    </div>
  @if(!empty($images))

  <div class="container mt-5 bg-light">
  <div class="row">
      <?php 
      foreach($images as $key=>$value){
      $url =json_decode($value->url);
      foreach($url as $k=>$image)  { ?>
     <div class="col-lg-3 card">
       <img src="{{ asset('storage/uploads/'.$image) }}" class="card-img-top" alt="{{ $image }}" height="150px" width="50px">
     </div>
        <?php } } ?>
  </div>
  </div>
  @endif


@endsection