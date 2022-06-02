
@extends('layouts.basic')
@section('content')

<table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>branch Name</td>
          <td>branch phone</td>
          <td colspan="3">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($branches as $branch)
        <tr>
            <td>{{$branch->id}}</td>
            <td>{{$branch->name}}</td>
            <td>{{$branch->phone}}</td>
            <td><a href="{{ route('branches.show', $branch->id)}}" class="btn btn-success">Show</a></td>
            <td><a href="{{ route('branches.edit', $branch->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('branches.destroy', $branch->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  @endsection

