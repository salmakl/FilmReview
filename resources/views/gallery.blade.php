@extends('layouts.app')

@section('content')

<div class="container">
 
  <div class="row">
    @foreach($films as $film)   
    <div class="col">
      
      <img src="../images/{{$film->img}}" alt="" class="img-fluid img-thumbnail" style="width: 35vh ;height: 50vh">
      <p>{{$film->title}}</p>
      <p><a href="{{route('single',$film->id)}}">Description</a></p>
     
      
    </div>
    @endforeach
  </div>
 
</div>
@endsection