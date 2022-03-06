@extends('layouts.app')

@section('content')
<div class="container">
<button type="button" id="showupdate"> Update</button>
</div>
<div class="modal fade" id="update">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Create Country</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ url('countryupdate/'.$update->id) }}" method="POST" autocomplete="off">
                  @csrf
                    <div class="form-group input-group-sm">
                        <label for="name">Country</label>
                        <input type="text" style="box-shadow:none !important;" class="form-control mt-1" name="name" value="{{ $update->name }}" placeholder="enter country...">
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



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script type="text/javascript">
    $(window).on('load', function() {
        $('#update').modal('show');
    });
</script>

@endsection