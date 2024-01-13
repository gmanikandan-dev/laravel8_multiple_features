
@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <form class="form-card" action="{{ route('qrcode') }}" method="post" autocomplete="off" >
            @csrf
            <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                                <label for="name" style="text-align:left">URL/TEXT</label>
                                <input type="text" class="form-control" name="qrcode" placeholder="enter text/url...">
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="col-lg-6">
                    <div class="form-group">
                        <button class="btn btn-outline-success mt-5" style="width:100%;" type="submit"> Generate QR </button>
                    </div>
                </div>
            </div>
        </form>
        @if($result)
        <div class="card">
            <div class="card-header">
                <h2>Simple QR Code</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->generate($result) !!}
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h2>Color QR Code</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->backgroundColor(255,90,0)->generate($result) !!}
            </div>
        </div>
        @endif
    </div>
@endsection
