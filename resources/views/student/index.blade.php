@extends('layouts.app')

@section('content')

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

@endsection