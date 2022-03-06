
@extends('layouts.app')
@section('content')
<div class="container">
    @if(session('success'))
    <div class="alert alert-success">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <strong>{{ session('success') }}</strong>
    </div>
    @endif
    <div class="card bg-light mt-3">
        <div class="card-header">
            Laravel 8 Mail send 
        </div>
        <div class="card-body">
            <form action="{{ url('sendmail') }}" autocomplete="off" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="form-label">Fill To address</label>
                <input type="email" name="to" class="form-control" placeholder="to address" required><br>
                <label for="form-label">Enter Subject</label>
                <input type="text" name="subject" class="form-control" placeholder="subject" required><br>
                <label for="form-label">Enter content</label>
                <input type="text" name="body" class="form-control" placeholder="body" required>
                <br>
                <button class="btn btn-success">Send Mail</button>
                
            </form>
        </div>
    </div>
</div>

@endsection


