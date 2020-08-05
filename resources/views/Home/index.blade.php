@extends('layouts.template')
@section('title','Dasboard')
@section('sub-judul','Home')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label>Years Experience</label>
                <input type="number" class="form-control " placeholder="14" >
              </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Youtube Token</label>
                <input type="text" class="form-control purchase-code" placeholder="6ektsgs">
              </div>
        </div>
      <div class="col-12">
        <label>Hero </label>
        <input class="form-control" name="hero" type="file" accept="image/*" onchange="loadFile(event)">
        <img id="output" width="150">
     
      </div>
      <button class="ml-3 btn btn-primary">EDIT</button>
</div>



@endsection
@section('addon')
<script>
    var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
 </script>



@endsection