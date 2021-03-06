@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
<div class="col-md-8">
            <!-- display form-->
 <div class="container">
        <form action="{{ route ('storeFilms')}}" method="POST" enctype="multipart/form-data">
          @csrf
            <h2>Ajouter Un Film</h2>
            <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" class="form-control" placeholder="" name="title" id="title">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" ></textarea>
                
                </div>
            </div>
        </div>


    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="image">Image</label>
          <input type="file" class="form-control" placeholder=""name="img" id="image">
        </div>
      </div>
    </div> 
     
      <div class="row">
      <div class="col-md-3">
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Envoyer</button>
     </div>
    </div>

   
  </form>
</div>
</div>
 </div>
    

@endsection