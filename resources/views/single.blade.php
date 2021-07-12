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

            </div>
            <div>
        </div>
    </div>
    <form action="{{route("storeComments")}}" method="post" >
        {{method_field('post')}}
        @csrf
    <div class="row">
        <label for="comment">Commenter</label>
        <textarea name="comment" id="comment" ></textarea>
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        <input type="hidden" name="movie_id" value="{{$single->id}}">
        <button class="btn btn-primary h-100 ">Ajouter</button>
        </div>
    </form>
    @foreach ($comments as $comment)
    <div class=" border border-1 p-3 my-3 row">
        <p>{{$comment->comment}}</p>
    </div>
    @endforeach

</div>
@endsection
