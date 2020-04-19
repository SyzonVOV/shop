@extends('layouts.master')

@section('title', 'Категория ' . $category->name)

@section('content')
        <h1>
            {{$category->name}} {{$category->products->count()}}
        </h1>
        <p>
            В этом разделе вы найдёте самые популярные {{$category->name}} по отличным ценам!
        </p>
        <div class="row">
            @foreach($category->products as $product)
                @include('layouts.productCard', compact('product'))
            @endforeach
        </div>
@endsection
