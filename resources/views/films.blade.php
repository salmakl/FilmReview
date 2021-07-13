@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <button class="btn btn-primary">AJouter nouveau film</button>
            <div class="card">
            <!-- display posts -->
            
            <table class="table">
  <thead>
    <tr>
      <th scope="col">Titre</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($films as $film)
    <tr>
      <th scope="row">{{$film->title}}</th>
      <td>{{$film->description}}</td>
      <td><img src="../images/{{$film->img}}" alt="" class="img-fluid img-thumbnail" style="width: 25vh ;height: 30vh"></td>
      <td><form action="/single/{{$film->id}}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Delete</button></form>

        <a href="/edit/{{$film->id}}">
       
          <button class="btn btn-secondary">Edit</button>
        </a>
      
    </td>
    </tr>
    @endforeach
  </tbody>
</table>

            
         </div>
        </div>
    </div>
</div>
@endsection
