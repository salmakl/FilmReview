@extends('layouts.app')

@section('content')

<div class="container">
 
  <div class="row">
    @foreach($films as $film)   
    <div class="col">
      
      <img src="../images/{{$film->img}}" alt="">
      <p>{{$film->title}}</p>
      <p><a href="{{route ('single',$film->id)}}">Description</a></p>
      
    </div>
    @endforeach
  </div>
 
</div>
@endsection