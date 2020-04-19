@extends('layouts.master')

@section('title', 'Товар')

@section('content')
        <h1>{{ $product->name }}</h1>
        <h2>{{ $product->name }}</h2>
        <h2>Мобильные телефоны</h2>
        <p>Цена: <b>71990 руб.</b></p>
        <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg">
        <p>{{ $product->description }}</p>

        <form action="http://internet-shop.tmweb.ru/basket/add/1" method="POST">
            <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>

            <input type="hidden" name="_token" value="4SeOb1GHUtfkwUifmUt2VTzehn4zHNz0DsnYjxXN">        </form>
@endsection
