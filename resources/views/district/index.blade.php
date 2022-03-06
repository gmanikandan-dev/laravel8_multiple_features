@extends('layouts.app')

@section('content')
<!-- <div class="container mt-5">
</div> -->
<div class="container mt-3">
  
  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal">
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

<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div style="overflow-x:auto;">
                <table class="table table-striped" >
                      <tr>
                          <th class="text-center">Country Name</th>
                          <th class="text-center">Action</th>
                      </tr>
                      <tr>
                          <td>Manikandan</td>
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

<!-- </div> -->
@endsection