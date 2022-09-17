@extends('layouts.main')
@push('title')
    <title>Customer Update!</title>   
@endpush
@section('main-section')
    <h1 class="text-center bg-success text-light col-sm-8 offset-2">Update Customer's Info</h1>
    <hr>
     {{--Customer Show Button Left Side--}}
     <div class="btn-group float-start" role="group" aria-label="Basic checkbox toggle button group">
        <button class="btn btn-outline-primary">
            <a href="{{route('customerDataShow')}}" class="text-decoration-none fw-bold text-dark">
                Show Customer's Data
            </a>
        </button>
    </div>
    <div class="jumbotron">
        <form action="{{url('/')}}/customerDataUpdate/{{$customer->customer_id}}" method="POST" class="offset-3 col-sm-6 bg-light">
            @csrf
            <x-input type="text" name="name" placeholder="Enter customer name" value="{{$customer->customer_name}}" label="Name"/>
            <span class="text-danger">
                @error('name')
                    {{$message}}   
                @enderror
            </span>

            <x-input type="email" name="email" placeholder="Enter customer email" value="{{$customer->email}}" label="Email"/>
            <span class="text-danger">
                @error('email')
                    {{$message}}   
                @enderror
            </span>

            <x-input type="text" name="country" placeholder="Country" value="{{$customer->country}}" label="Country"/>
            <span class="text-danger">
                @error('country')
                    {{$message}}   
                @enderror
            </span>

            <x-input type="text" name="state" placeholder="State" value="{{$customer->state}}" label="State"/>
            <span class="text-danger">
                @error('state')
                    {{$message}}   
                @enderror
            </span>

            <x-input type="text" name="address" placeholder="Address" value="{{$customer->address}}" label="Address"/>
            <span class="text-danger">
                @error('address')
                    {{$message}}   
                @enderror
            </span>
           
            <x-input type="date" name="dob" placeholder="Birth Info" value="{{$customer->dob}}" label="Date of Birth" required/>
                <small class="text-success fw-bold">Provide Birth Info Plz ^</small>
            <span class="text-danger">
                @error('address')
                    {{$message}}   
                @enderror
            </span>

            <div class="form-check fw-bold">
                <p>Select Gender</p>
                <input type="radio" name="gender" value="M" {{$customer->gender=="M" ? "checked":""}}  />
                <label>Male</label>
                <input type="radio" name="gender" value="F"  {{$customer->gender=="F" ? "checked":""}} />
                <label>Female</label>
                <input type="radio" name="gender" value="O" {{$customer->gender=="O" ? "checked":""}} />
                <label>Others</label>
                <br>
                <span class="text-danger">
                    @error('gender')
                        {{$message}}   
                    @enderror
                </span>
            </div>
            <br>
            <button type="submit" class="btn btn-outline-success">Update</button>
          </form>  
    </div>   
@endsection