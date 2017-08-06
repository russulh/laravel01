@extends('layout.master')

@section('videos')
   active
@endsection

@section('title')
   Videos 🎬
@endsection

@section('contain')
   <div class="container">
      <div class="row">
         <div class="col-sm-6 col-sm-offset-3">
            <h1>This page is for videos is 🎬 {{$id}} {{$name}}</h1>   
         </div>
      </div>
   </div>
@endsection
