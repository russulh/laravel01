@extends('layout.master')

@section('home')
   active
@endsection

@section('title')
   Home
@endsection

@section('css')
   <style media="screen">
      .container{
         color: blue;
      }
   </style>
@endsection

@section('contain')
   {{-- @include('welcome')
   @includeif('welcome') --}}
   {{-- @includeWhen(true, 'welcome') --}}
   @each('welcome', ['Russul', 'Chiku'], 'name')
   <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            hello boo
        </div>
      </div>
   </div>
@endsection

@section('js')
   <script>
      // alert("Home page");
   </script>
@endsection
