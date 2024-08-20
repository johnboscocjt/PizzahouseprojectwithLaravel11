{{-- @extends('layouts.layout') --}}
@extends('layouts.app')

@section('content')
{{-- <div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List - {{$id}}
        </div>
    </div> 
</div> --}}

<div class="wrapper pizza-details">
    {{-- output the name of user who oders, from the database --}}
    <h1>Order for {{ $pizza -> name}} </h1> 
    <p class="type"> The type is - {{ $pizza -> type }}</p>
    <p class="base"> The type is - {{ $pizza -> base }}</p>

    {{-- outputting the toppings, its already an array --}}
    <ul>
    @foreach ($pizza->toppings as $topping )
    
        <li>{{ $topping }}</li>
    
    @endforeach
    </ul>

    {{-- <form action="/pizzas/{{ $pizza->id }}" method="POST"> passing id --}}
        {{-- using named routes --}}
    <form action="{{route('pizzas.destroy', $pizza->id) }}" method="POST">
    @csrf
    @method('DELETE')
        <button>Complete Order</button>
    
    </form>

</div>

<a href="/pizzas" class="back"><- Back to all pizzas</a>

@endsection