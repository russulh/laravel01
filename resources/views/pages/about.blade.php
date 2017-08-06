@extends('layout.master')

@section('about')
   active
@endsection

@section('title')
   About
@endsection

@section('contain')
   <div class="container">
      <div class="row">
         @if($bool_v)
            <h1>{{ $var }}</h1>
         @else
            <h1>False ❌</h1>
         @endif

         {{-- @unless ($bool_v)
            <h1>{{ $var }}</h1>
         @endunless --}}

         <h3>for loop</h3>
         @for ($i=0; $i < 10; $i++)
            <li>{{ $var }}</li>
         @endfor

         <h3>foreach loop</h3>
         @foreach ($names as $key => $value)
            <li>value = {{ $value }} - index {{ $loop->index }} - count {{ $loop->count }} - iteration {{ $loop->iteration}} - remain {{$loop->remaining}}</li>
         @endforeach

         <h3>forelse loop</h3>
         @forelse ($names2 as $key => $value)
            <li>{{ $value }}</li>
         @empty
            <li>Empty</li>
         @endforelse

         <h3>php</h3>
         @php
            $x=   3;
            $y=   4;
            $z=   $x+$y;
            // echo $z;
         @endphp
         {{$z}}

         <h3>useing mostage with vuejs</h3>
         <div id="app">
            {{-- @{{}} is the best and cleanest way to use --}}
            @{{msg}}
            {{-- verbatim not good --}}
            {{-- @verbatim
               {{msg}}
            @endverbatim --}}
         </div>

         <h3>use empty and set</h3>
      </div>
   </div>


      {{-- <script src="https://unpkg.com/vue@2.4.2"></script>
      <script>
         var app = new Vue({
            el: "#app",
            data:{
               msg:"vuejs"
            }
         });

      </script> --}}
@endsection
