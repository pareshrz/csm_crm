@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header">
			<h3>Create a new vendor <a href="/dashboard" class="btn btn-primary float-right">Vendors List</a></h3>
		</div>
		<div class="card-body">
			@include('inc.display_errors')
			<form action="/vendors/" method="post">
				@csrf
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputEmail4">Name</label>
						<input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{old('name')}}">
					</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Title</label>
						<input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{old('title')}}">
					</div>
				</div>
				<div class="form-group">
					<label for="inputAddress">Street Address</label>
					<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="street_address" value="{{old('street_address')}}">
				</div>
				<div class="form-group">
					<label for="inputAddress">Appartment/Unit#</label>
					<input type="text" class="form-control" id="appartment" placeholder="Apartment No." name="appartment" value="{{old('appartment')}}">
				</div>
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="inputCity">City</label>
						<input type="text" class="form-control" id="inputCity" name="city" placeholder="City" name="city" value="{{old('city')}}" >
					</div>
					<div class="form-group col-md-4">
						<label for="inputState">State</label>
						<input type="text" name="state" class="form-control" id="state" placeholder="State" value="{{old('state')}}" name="state">
					</div>
					<div class="form-group col-md-4">
						<label for="inputZip">Zip</label>
						<input type="text" class="form-control" id="inputZip" name="zip" placeholder="Zip" value="{{old('zip')}}">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="Phone">Phone</label>
						<input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" value="{{old('phone')}}" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
					</div>
					<div class="form-group col-md-4">
						<label for="HomePhone">Home Phone</label>
						<input type="tel" class="form-control" id="home_phone" name="home_phone" placeholder="HomePhone" value="{{old('home_phone')}}" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
					</div>
					<div class="form-group col-md-4">
						<label for="WorkPhone">Work Phone</label>
						<input type="tel" class="form-control" id="work_phone" name="work_phone" placeholder="Work Phone" value="{{old('work_phone')}}" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{old('email')}}">
					</div>
					<div class="form-group col-md-4">
						<label for="aadhar_id">aadhar_id</label>
						<input type="text" class="form-control" id="aadhar_id" name="aadhar_id" placeholder="aadhar_id" value="{{old('aadhar_id')}}">
					</div>
					<div class="form-group col-md-4">
						<label for="birth_date">birth_date</label>
						<input type="date" class="form-control" id="birth_date" name="birth_date" placeholder="birth_date" value="{{old('birth_date')}}">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-4">
						<p>Marital Status</p>
						<div class="pl-3">
							<input type="radio" name="married" value="1" class="">
							<label for="married">Married</label>
							<br>
							<input type="radio" name="married" value="0" class="">
							<label for="married">Unmarried</label>
						</div>
					</div>
					<div class="form-group col-md-4">
						<label for="vendor_id">vendor_id</label>
						<input type="text" class="form-control" id="vendor_id" name="vendor_id" placeholder="vendor_id" value="{{old('vendor_id')}}">
					</div>
					<div class="form-group col-md-4">
						<label for="department">department</label>
						<input type="text" class="form-control" id="department" name="department" placeholder="department" value="{{old('department')}}">
					</div>
				</div>
				<div class="form-group">
					<label for="work_location">work_location</label>
					<input type="text" class="form-control" id="work_location" name="work_location" placeholder="work_location" value="{{old('work_location')}}">
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="start_date">start_date</label>
						<input type="date" class="form-control" id="start_date" name="start_date" placeholder="start_date" value="{{old('start_date')}}">
					</div>
					<div class="form-group col-md-6">
						<label for="experience">experience</label>
						<input type="text" class="form-control" id="experience" name="experience" placeholder="experience" value="{{old('experience')}}">
					</div>
				</div>
				<button type="submit" class="btn btn-dark btn-lg float-right">Add Vendor</button>
			</form>
		</div>
	</div>
@endsection