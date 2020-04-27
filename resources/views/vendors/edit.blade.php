@extends('layouts.app')
@section('content')
{{-- <div class="container"> --}}
    {{-- <div class="row justify-content-center"> --}}
		<div class="card">
			<div class="card-header">
				<h3>Edit Vendor : {{$vendor->name}} <a href="/dashboard" class="btn btn-primary float-right">Vendors List</a></h3>
			</div>
			<div class="card-body">
				@include('inc.display_errors')
				<form action="{{route('vendors.update', $vendor->id)}}" method="post">
					@csrf
					@method('patch')
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputEmail4">Name</label>
							<input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{$vendor->name}}">
						</div>
						<div class="form-group col-md-6">
							<label for="inputPassword4">Title</label>
							<input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{$vendor->title}}">
						</div>
					</div>
					<div class="form-group">
						<label for="inputAddress">Street Address</label>
						<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="street_address" value="{{$vendor->street_address}}">
					</div>
					<div class="form-group">
						<label for="Apartment">Apartment/Unit#</label>
						<input type="text" class="form-control" id="apartment" placeholder="Apartment No." name="apartment" value="{{$vendor->apartment}}">
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="inputCity">City</label>
							<input type="text" class="form-control" id="inputCity" name="city" placeholder="City" name="city" value="{{$vendor->city}}" >
						</div>
						<div class="form-group col-md-4">
							<label for="inputState">State</label>
							<input type="text" name="state" class="form-control" id="state" placeholder="State" value="{{$vendor->state}}" name="state">
						</div>
						<div class="form-group col-md-4">
							<label for="inputZip">Zip</label>
							<input type="text" class="form-control" id="inputZip" name="zip" placeholder="Zip" value="{{$vendor->zip}}">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="Phone">Phone</label>
							<input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" value="{{$vendor->phone}}">
						</div>
						<div class="form-group col-md-4">
							<label for="HomePhone">Home Phone</label>
							<input type="tel" class="form-control" id="home_phone" name="home_phone" placeholder="HomePhone" value="{{$vendor->home_phone}}">
						</div>
						<div class="form-group col-md-4">
							<label for="WorkPhone">Work Phone</label>
							<input type="tel" class="form-control" id="work_phone" name="work_phone" placeholder="Work Phone" value="{{$vendor->work_phone}}">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="email">Email</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{$vendor->email}}">
						</div>
						<div class="form-group col-md-4">
							<label for="aadhar_id">aadhar_id</label>
							<input type="text" class="form-control" id="aadhar_id" name="aadhar_id" placeholder="aadhar_id" value="{{$vendor->aadhar_id}}">
						</div>
						<div class="form-group col-md-4">
							<label for="birth_date">birth_date</label>
							<input type="date" class="form-control" id="birth_date" name="birth_date" placeholder="birth_date" value="{{$vendor->birth_date}}">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<p>Marital Status</p>
							<div class="pl-3">
								<input type="radio" name="married" value="1" class="" {{$vendor->married == '1' ? 'checked' : ""}}>
								<label for="married">Married</label>
								<br>
								<input type="radio" name="married" value="0" class="" {{$vendor->married == '0' ? 'checked' : ""}}>
								<label for="married">Unmarried</label>
							</div>
						</div>
						<div class="form-group col-md-4">
							<label for="vendor_id">vendor_id</label>
							<input type="text" class="form-control" id="vendor_id" name="vendor_id" placeholder="vendor_id" value="{{$vendor->vendor_id}}">
						</div>
						<div class="form-group col-md-4">
							<label for="department">department</label>
							<input type="text" class="form-control" id="department" name="department" placeholder="department" value="{{$vendor->department}}">
						</div>
					</div>
					<div class="form-group">
						<label for="work_location">work_location</label>
						<input type="text" class="form-control" id="work_location" name="work_location" placeholder="work_location" value="{{$vendor->work_location}}">
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="start_date">start_date</label>
							<input type="date" class="form-control" id="start_date" name="start_date" placeholder="start_date" value="{{$vendor->start_date}}">
						</div>
						<div class="form-group col-md-6">
							<label for="experience">experience</label>
							<input type="text" class="form-control" id="experience" name="experience" placeholder="experience" value="{{$vendor->experience}}">
						</div>
					</div>
					<button type="submit" class="btn btn-dark btn-lg float-right">Update Vendor</button>
				</form>
			</div>
		</div>
	{{-- </div> --}}
{{-- </div> --}}
@endsection