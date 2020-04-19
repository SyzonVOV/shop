<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">


        </div>
        <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x_silver.jpg" alt="iPhone X 256GB">
        <div class="caption">
            <h3>{{$product->name}}</h3>
            <p>{{$product->price}} руб.</p>
            <p>
{{--            {{ $product->category->name }}--}}
            <form action="{{ route('basket-add', $product) }}" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="{{route('product', [$product->category->code, $product->code])}}"
                   class="btn btn-default"
                   role="button">Подробнее</a>
{{--                <input type="hidden" name="_token" value="4SeOb1GHUtfkwUifmUt2VTzehn4zHNz0DsnYjxXN">--}}
                @csrf
            </form>
            </p>
        </div>
    </div>
</div>
