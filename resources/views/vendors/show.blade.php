@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="table-responsive">
			<div class="com-md-6">

				<table class="table table-dark">
					<tr>
						<th>Name:</th> <td> {{$vendor->name}} </td>
					</tr>
				  <tr>
				  		<th> Title </th> <td> {{$vendor->title}} </td>
				  </tr>
				  <tr>
				  		<th> Street Address </th> <td> {{$vendor->street_address}} </td>
				  </tr>
				  <tr>
				  		<th> Apartment </th> <td> {{$vendor->apartment}} </td>
				  </tr>
				  <tr>
				  		<th>  City </th> <td> {{$vendor->city}} </td>
				  </tr>
				  <tr>
				  		<th> State </th> <td> {{$vendor->state}} </td>
				  </tr>
				  <tr>
				  		<th> Zip </th> <td> {{$vendor->zip}} </td>
				  </tr>
				  <tr>
				  		<th> Phone </th> <td> {{$vendor->phone}} </td>
				  </tr>
				  @if ($vendor->home_phone)
				  	<tr>
				  		<th> Home Phone </th> <td> {{$vendor->home_phone}} </td>
				  	</tr>
				  @endif
				  @if ($vendor->alternate_phone)
				  	<tr>
				  		<th> Alternate Phone </th> <td> {{$vendor->alternate_phone}} </td>
				  	</tr>
				  @endif
				  @if ($vendor->work_phone)
				  	<tr>
				  		<th> Work Phone </th> <td> {{$vendor->work_phone}} </td>
				  	</tr>
				  @endif
				  @if ($vendor->email)
				  	<tr>
				  		<th> Email </th><td> {{$vendor->email}} </td>
				  	</tr>
				  @endif
				  
				  <tr>
				  	<th> Aadhar ID </th><td> {{$vendor->aadhar_id}} </td>
				  </tr>
				  <tr>
				  	<th> Birth Date </th><td> {{$vendor->birth_date}} </td>
				  </tr>
				  <tr>
				  		<th> Marital Status </th><td> {{$vendor->married ? "Married" : 'Unmarried'}} </td>
				  </tr>
				  <tr>
				  	<th> Vendor ID </th><td> {{$vendor->vendor_id}} </td>
				  </tr>
				  <tr>
				  	<th> Department </th><td> {{$vendor->department}} </td>
				  </tr>
				  <tr>
				  	<th> Work Location </th><td> {{$vendor->work_location}} </td>
				  </tr>
				  <tr>
				  	<th> Start Date </th><td> {{$vendor->start_date}} </td>
				  </tr>
				  <tr>
				  	<th> Experience </th><td> {{$vendor->experience}} </td>
				  </tr>
				</table>	
				<a href="/vendors/{{$vendor->id}}/edit" class="btn btn-primary float-right">Edit Vendor</a>
			</div>
		</div>
	</div>
</div>
@endsection