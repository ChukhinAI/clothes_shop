<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Товар: {{ $product->name }}</h1>
    <p>Цена: {{ number_format($product->price, 2, '.', '') }}</p>
    <p>
        Категория:
        <a href="{{ route('catalog.category', ['slug' => $product->category_slug]) }}">
            {{ $product->category_name }}
        </a>
    </p>
    <p>
        Бренд:
        <a href="{{ route('catalog.brand', ['slug' => $product->brand_slug]) }}">
            {{ $product->brand_name }}
        </a>
    </p>
    <p>{{ $product->content }}</p>
</body>
</html>
