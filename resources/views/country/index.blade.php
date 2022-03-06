@extends('layouts.app')

@section('content')

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Create Country</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
                <form action="{{ route('countrystore') }}" method="POST" autocomplete="off">
                  @csrf
                    <div class="form-group input-group-sm">
                        <label for="name">Country</label>
                        <input type="text" style="box-shadow:none !important;" class="form-control mt-1" name="name" placeholder="enter country...">
                    </div>
                    <div class="form-group input-group-sm">
                            <button class="btn btn-outline-success mt-4" style="width:100%;" type="submit"> Save </button>
                            <!-- <button type="button" class="btn btn-danger mt-4" data-bs-dismiss="modal">Close</button> -->

                    </div>
                </form>
          </div>

    </div>
  </div>
</div>

<!-- end modal  -->



<div class="container">

@if (session('success'))
    <div class="alert alert-success">
      <button class="btn-close" type="button" data-bs-dismiss="alert"></button>
      <strong> {{ session('success') }} </strong> 
    </div>
@endif
      <div class="row">
          <div class="col-lg-12">
                <div style="float:right;">
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#myModal">
                      Create Country
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
                                  @foreach($country as $key=>$value)
                                  <tr>
                                      <td class="text-center"> {{ $value['name'] }}</td>
                                        <td class="text-center align-middle">
                                            <div class="btn-group">
                                                <button class="btn btn-primary btn-sm"  style="text-decoration: none; color:white;">view</button>&nbsp;
                                                <button class="btn btn-info btn-sm"><a href="{{ url('countryedit/'.$value['id']) }}" style="text-decoration: none; color:white;"> edit </a></button>&nbsp;
                                                <button class="btn btn-danger btn-sm"> <a href="{{ url('countrydestroy/'.$value['id']) }}" class="button delete-confirm" style="text-decoration: none; color:white;"> drop</a></button>
                                            </div>                
                                        </td>
                                  </tr>
                                  @endforeach

                              </table>
                            </div>
              </div>
          </div>
        </div>
  </div>
@section('script')

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$('.delete-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'This record and it`s details will be permanantly deleted!',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});
</script>

@endsection
<!-- </div> -->
@endsection