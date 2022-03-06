@extends('layouts.app')

@section('content')
<!-- <div class="container mt-5">
</div> -->
<div class="container mt-3">
  
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Create Country
  </button>
</div>

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
                <form action="" autocomplete="off">
                    <div class="form-group input-group-sm">
                        <label for="name">Country</label>
                        <input type="text" style="box-shadow:none !important;" class="form-control mt-1" name="name" placeholder="enter country...">
                    </div>
                    <div class="form-group input-group-sm">
                            <button class="btn btn-outline-success mt-4" style="width:100%;" type="submit"> Save </button>
                            <button type="button" class="btn btn-danger mt-4" data-bs-dismiss="modal">Close</button>

                    </div>
                </form>
          </div>

    </div>
  </div>
</div>
<div class="card border-warning mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Warning card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<!-- table section -->
<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div style="overflow-x:auto;">
                <table class="table table-striped" >
                      <tr>
                          <th class="text-center">Name</th>
                          <th class="text-center">Email</th>
                          <th class="text-center">Phone</th>
                          <th class="text-center">Address</th>
                          <th class="text-center">Country</th>
                          <th class="text-center">State</th>
                          <th class="text-center">District</th>
                          <th class="text-center">Taluk</th>
                          <th class="text-center">Action</th>
                      </tr>
                      <tr>
                          <td>Manikandan</td>
                          <td>gmanikandan845@gmail.com</td>
                          <td>9629322688</td>
                          <td>No 43/6,Udangudi</td>
                          <td>India</td>
                          <td>Tamilnadu</td>
                          <td>Thoothukudi</td>
                          <td>Thiruchendur</td>
                             <td class="text-center align-middle">
                                <div class="btn-group">
                                    <button class="btn btn-primary">view</button>
                                    <button class="btn btn-info">edit</button>
                                    <button class="btn btn-danger">drop</button>
                                </div>                
                            </td>
                      </tr>

                  </table>
                </div>
                  
            </div>
        </div>
</div>

<!-- end table section -->
@endsection