@extends('layouts.app')

@section('content')

<div class="container">

@if (session('success'))
    <div class="alert alert-success">
      <button class="btn close" type="button" data-bs-dismiss="alert"></button>
      <strong> {{ session('success') }} </strong> 
    </div>
@endif
      <div class="row">
          <div class="col-lg-12">
                <div style="float:right;">
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#myModal">
                      Create State
                    </button>
                </div>
          </div>
      </div>
      <div class="card">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 mt-3">
                        <div  class="table-responsive">
                            <table class="table table-striped">
                                  <tr>
                                      <th class="text-center">Country Name</th>
                                      <th class="text-center">Action</th>
                                  </tr>
                                 {{-- @foreach($state as $key=>$value) -- }} 
                                  <tr>
                                      <td class="text-center"> Mani{{-- $value['name'] --}}</td>
                                        <td class="text-center align-middle">
                                            <div class="btn-group">
                                                <button class="btn btn-primary btn-sm">view</button>&nbsp;
                                                <!-- <button class="btn btn-info btn-sm"><a href="{{ url('countryedit/'.$value['id']) }}"> edit </a></button>&nbsp; -->
                                                <button class="btn btn-danger btn-sm">drop</button>
                                            </div>                
                                        </td>
                                  </tr>
                                 {{--   @endforeach  --}}

                              </table>
                          </div>
              </div>
          </div>
        </div>
  </div>

<!-- </div> -->
@endsection