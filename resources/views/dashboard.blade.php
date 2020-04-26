@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <a class="btn btn-primary" href="/vendors/create">Add New Vendor</a>
                        <a class="btn btn-danger" href="/vendors">List All Vendors</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
