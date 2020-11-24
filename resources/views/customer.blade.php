@extends('index')

@section('content')

<form action="/customer" class = "container" method='POST'>
  @csrf
<h4>Enter Your Details</h4>
<div class="form-group">
    <label for="firstname">First Name:</label>
    <input type="firstname" class="form-control" placeholder="Enter First Name" id="firstname" name="firstname" >
  </div>
  <div class="form-group">
    <label for="lastname">Last Name:</label>
    <input type="lastname" class="form-control" placeholder="Enter Last Name" id="lastname" name="lastname">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="telephone">Telephone:</label>
    <input type="telephone" class="form-control" placeholder="Enter Telephone" id="telephone" name="telephone">
  </div>
  <div class="form-group">
    <label for="vehicle">Vehicle:</label>
    <input type="vehicle" class="form-control" placeholder="Enter vehicle" id="vehicle" name="vehicle">
  </div>
  <div class="form-group" id = "addVehicle">
  <button onclick="addVehicleFunction()" type="submit" class="btn btn-primary">Add Another Vehicle</button>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection
