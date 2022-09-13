@extends('layouts.main')
@push('title')
    <title>Customer DataShow!</title>   
@endpush
@section('main-section')
    <h1 class="text-center bg-success text-light col-sm-8 offset-2">Customer Data Table!</h1>
    {{-- @php
        echo "<pre>";
            print_r($customer->toArray( ));   
    @endphp --}}
    <hr> 
    {{--Add Button Right Side--}}
    <div class="btn-group float-end" role="group" aria-label="Basic checkbox toggle button group">
        <button class="btn btn-outline-primary"><a href="{{route('insertCustomerFormOpen')}}" class="text-decoration-none fw-bold text-dark">Add Customer</a></button>
    </div>
    <div class="container">
        <table class="table table-success table-striped">
            <thead class="text-center ">      
                <th>Name</th>
                <th>Email</th>
                <th>State</th>
                <th>Address</th>
                <th>Country</th>
                <th>Gender</th>
                <th>Birth</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($customer as $customers)
                <tr class="text-center">
                    <td>{{$customers->customer_name}}</td>
                    <td>{{$customers->email}}</td>
                    <td>{{$customers->state}}</td>
                    <td>{{$customers->address}}</td>
                    <td>{{$customers->country}}</td>
                    <td>
                        @if($customers->gender=="M")
                        {{"Male"}}
                        @elseif($customers->gender=="F")
                        {{"Female"}}
                        @else
                        {{"Others"}}
                        @endif
                    </td>
                    {{-- <td>{{dateFormatting("d-M-y", $customers->dob)}}</td> --}}
                    <td>{{$customers->dob}}</td>
                    <td>
                        <div class="btn-group btn-group-sm fw-bold text-dark" role="group" aria-label="...">
                            <button class="btn btn-outline-danger "><a href="{{route('customerDataDelete',['id'=>$customers->customer_id])}}" class="text-decoration-none fw-bold text-dark">Delete</a></button> ||
                            <button class="btn btn-outline-primary "><a href="{{route('customerDataEdit',['id'=>$customers->customer_id])}}" class="text-decoration-none fw-bold text-dark">Update</a></button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>  
    </div>
@endsection