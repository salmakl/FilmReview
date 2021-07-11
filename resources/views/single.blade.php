@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card flex-row">
         <!-- display Film -->
         
            <div>
            <img src="../images/{{$single->img}}" alt="">
            </div>
            <div>
                <p >{{$single->title}}</p>
                <p>{{$single->description}}</p>
                <button class="btn btn-secondary">Edit</button>
                <button class="btn btn-danger">Delete</button>
            </div>
            <div>
        </div>
    </div>
        <div class="row">
        <label for="comment">Commenter</label>
        <textarea name="comment" id="comment" ></textarea>
        <button class="btn btn-primary h-100 ">Ajouter</button>
        </div>
</div>
@endsection
