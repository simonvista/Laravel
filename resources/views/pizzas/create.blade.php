@extends('layouts.layout')
@section('content')
<div class="wrapper create-pizza">
    <h1>Create New Pizza</h1>
    <form action="/pizzas" method="POST">
        {{-- prvent 419 page expired error --}}
        @csrf
        <label for="name">name:</label>
        <input type="text" name="name" id="name">
        <label for="type">type:</label>
        <select name="type" id="type">
            <option value="margherita">margherita</option>
            <option value="hawaiian">hawaiian</option>
            <option value="veg supreme">veg supreme</option>
            <option value="valcano">valcano</option>
        </select>
        <label for="base">base:</label>
        <select name="base" id="base">
            <option value="cheesy crust">cheesy crust</option>
            <option value="garlic crust">garlic crust</option>
            <option value="thin & crispy">thin & crispy</option>
            <option value="thick">thick</option>
        </select>
        <fieldset>
            <label>Extra Toppings: </label>
            <input type="checkbox" name="toppings[]" value="mushrooms">mushrooms<br />
            <input type="checkbox" name="toppings[]" value="peppers">peppers<br />
            <input type="checkbox" name="toppings[]" value="garlics">garlics<br />
            <input type="checkbox" name="toppings[]" value="olives">olives<br />
        </fieldset>
        <input type="submit" value="order pizza" />
    </form>
</div>
@endsection 