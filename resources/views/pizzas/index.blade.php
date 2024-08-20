{{-- @extends('layouts.layout') --}}
@extends('layouts.app')

@section('content')
{{-- <div class="flex-center position-ref full-height">
    <div class="content">
      <div class="title m-b-md">
          Pizza List
      </div> --}}


      {{-- <p>
        {{$name}} - {{$age}}
      </p> --}}
      
      {{-- @for($i = 0; $i < 5; $i++)
        <p>the value of i is {{ $i }}</p>
      @endfor --}}

      {{-- @for($i = 0; $i < count($pizzas); $i++)
        <p>{{ $pizzas[$i]['type'] }}</p>
      @endfor --}}


      <div class="wrapper pizza-index">
        <h1>Pizza Orders</h1>

        @foreach($pizzas as $pizza)
        <div class="pizza-item">
          <img src="/img/pizza.png" alt="pizza icon"> 
          <h4> <a href="/pizzas/{{ $pizza-> id }}"> {{ $pizza -> name }} </a> </h4> 
        </div>
        @endforeach

      </div>



@endsection



      {{-- @foreach($pizzas as $pizza)
        <div> --}}
          {{-- {{ $loop->index }} - {{ $pizza['type'] }} - {{ $pizza['base'] }}
          @if($loop->first)
            <span> - first in the loop</span>
          @endif
          @if($loop->last)
            <span> - last in the loop</span>
          @endif --}}

          {{-- using the model --}}
          {{-- {{ $pizza -> name }} - {{ $pizza -> type }} - {{ $pizza -> base }} --}}

        {{-- </div>
      @endforeach --}}



    {{-- </div>
</div> --}}
{{-- @endsection --}}