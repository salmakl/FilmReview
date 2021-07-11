@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
    <div class="card">
            <!-- display posts -->
 <h1>RWD List to Table</h1>
<table class="rwd-table">
  <tr>
    <th>Titre du film</th>
    <th>Description</th>
    <th>Image</th>
    <th>Action</th>
    
  </tr>
  <tr>
    <td data-th="Movie Title">Star Wars</td>
    <td data-th="Genre">Adventure, Sci-fi</td>
    <td data-th="Year">img</td>
    <td data-th="Gross"><button class="btn btn-danger">Delete</button></td>
  </tr>

</table>

</div>
</div>
</div>
</div>
@endsection
