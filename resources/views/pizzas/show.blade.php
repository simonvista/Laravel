@extends('layouts.layout')
@section('content')
<div class="wrapper pizza-details">
    {{-- {{ $pizza }} // return all info about single Pizza obj --}}
    <h1>Order by {{ $pizza->name }}</h1>
    <p class="type">Type: {{ $pizza->type }}</p>
    <p class="base">Base: {{ $pizza->base }}</p>
    <p class="toppings">Extra Toppins: </p>
    <ul>
        @foreach ($pizza->toppings as $topping)
            <li>{{ $topping }}</li>
        @endforeach
    </ul>
    {{-- form action points to url!!! --}}
    <form action="/pizzas/{{ $pizza->id }}" method="POST">
        @csrf
        {{-- Route::delete in routes file (web.php) --}}
        @method('DELETE') 
        <button>Complete Order</button>
    </form>
</div>
<a href="/pizzas" class="back">Back to waiting order list</a>
@endsection 