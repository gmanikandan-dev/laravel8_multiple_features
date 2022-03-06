<?php
// echo "<pre>";
// print_r($user[0]->name);exit;
?>

@extends('layouts.app')
@section('content')
<div class="container bg-light">
<div class="card-header">
        <h4>User List</h4>
</div>
<div class="card-body">
        <table class="table">
            <thead>

                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                   </tr>
                </thead>
                <tbody>

                    @foreach($user as $key=>$value)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $value->name }}</td> 
                        <td>{{ $value->email }}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
        </table>
       
</div>
</div>
@endsection