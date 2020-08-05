@extends('layouts.template')
@section('title','Dasboard')
@section('sub-judul','Home')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label>About</label>    
                <textarea class="form-control" placeholder="About" name="about"></textarea>
              </div>
              <div class="form-group">
                <button class="ml-3 btn btn-primary">EDIT</button>
              </div>
        </div>
     
</div>







@endsection