@extends('layouts.basic')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View branch</div>

                <div class="card-body">

<table class="table">
<tr><th>ID</th><td>{{ $branch->id }}</td></tr>
<tr><th>branch Name</th><td> {{ $branch->name }}</td></tr>
<tr><th>branch phone</th><td>{{ $branch->phone }}</td></tr>
<tr><th>branch address</th><td>{{ $branch->address }}</td></tr>
<tr><th>branch details</th><td>{{ $branch->details }}</td></tr>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
