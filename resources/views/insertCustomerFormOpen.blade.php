@extends('layouts.main')
@push('title')
    <title>Customer Insert!</title>   
@endpush
@section('main-section')
    <h1 class="text-center bg-success text-light col-sm-8 offset-2">Insert Customer's Info</h1>
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
        <form action="{{url('/')}}/insertCustomerFormOpenPost" method="POST" class="offset-3 col-sm-6 bg-light">
            @csrf
            <x-input type="text" name="name" placeholder="Enter customer name" value="{{old('name')}}" label="Name"/>
            <span class="text-danger">
                @error('name')
                    {{$message}}   
                @enderror
            </span>

            <x-input type="email" name="email" placeholder="Enter customer email" value="{{old('email')}}" label="Email"/>
            <span class="text-danger">
                @error('email')
                    {{$message}}   
                @enderror
            </span>

            <x-input type="password" name="password" placeholder="Enter customer password" value="" label="Password"/>
            <span class="text-danger">
                @error('password')
                    {{$message}}   
                @enderror
            </span>

            <x-input type="password" name="password_confirmation" placeholder="Re-type password" value="" label="Confirm password"/>
            <span class="text-danger">
                @error('password_confirmation')
                    {{$message}}   
                @enderror
            </span>

            <x-input type="text" name="country" placeholder="Country" value="{{old('country')}}" label="Country"/>
            <span class="text-danger">
                @error('country')
                    {{$message}}   
                @enderror
            </span>

            <x-input type="text" name="state" placeholder="State" value="{{old('state')}}" label="State"/>
            <span class="text-danger">
                @error('state')
                    {{$message}}   
                @enderror
            </span>

            <x-input type="text" name="address" placeholder="Address" value="{{old('address')}}" label="Address"/>
            <span class="text-danger">
                @error('address')
                    {{$message}}   
                @enderror
            </span>
           
            <x-input type="date" name="dob" placeholder="Birth Info" value="{{old('dob')}}" label="Date of Birht"/>
            <span class="text-danger">
                @error('dob')
                    {{$message}}   
                @enderror
            </span>

            <div class="form-check fw-bold">
                <p>Select Gender</p>
                <input type="radio" name="gender" value="M"  />
                <label>Male</label>
                <input type="radio" name="gender" value="F"  />
                <label>Fale</label>
                <input type="radio" name="gender" value="O" />
                <label>Others</label>
                <br>
                <span class="text-danger">
                    @error('gender')
                        {{$message}}   
                    @enderror
                </span>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>  
          {{-- @php
            echo "<pre>";
                print_r($errors->all());
        @endphp --}}
    </div>   
@endsection