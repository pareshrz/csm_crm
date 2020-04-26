@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
	<div class="table-responsive">
		<table class="table table-dark">
		  <caption>List of vendors</caption>
		  <thead class="thread-dark">
		    <tr>
		      <th scope="col">Name</th>
		      <th scope="col">Phone</th>
		      <th scope="col">Department</th>
		      <th scope="col">Email</th>
		      <th scope="col">Address</th>
		      <th scope="col">Title</th>
		      <th scope="col">Street Address</th>
		    </tr>
		  </thead>
		  <tbody>
		    @foreach ($vendors as $vendor)
		    	<tr>
		    	  <td> {{$vendor->name}} </td>
		    	  <td>{{$vendor->phone}}</td>
		    	  <td>{{$vendor->department}}</td>
		    	  <td>{{$vendor->email}}</td>
		    	  <td>{{$vendor->street_address}}</td>
		    	  <td>{{$vendor->title}}</td>
		    	  <td>{{$vendor->street_address}}</td>
		    	</tr>
		    @endforeach
		  </tbody>
		</table>
	</div>
</div>
@endsection