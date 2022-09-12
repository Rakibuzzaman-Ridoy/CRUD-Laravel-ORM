@extends('layouts.main')
@push('title')
    <title>Welcome!</title>   
@endpush
@section('main-section')
    <h1 class="text-center bg-success text-light col-sm-8 offset-2">Laravel Crud Operation using ORM!</h1> 
    <p>This is a small <i><b>CRUD</b></i> operation of a customer. In the Navbar you can click on the the insert(on the top),  to crate a new customer and you can see all the customers
    data. You can also update and delete data from the data shwoing page!    
    </p>  
@endsection