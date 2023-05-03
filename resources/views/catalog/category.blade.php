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
    <h1>Категория: {{ $category->name }}</h1>
    <ul>
        @foreach ($products as $product)
            <li>
                <a href="{{ route('catalog.product', ['slug' => $product->slug]) }}">
                    {{ $product->name }}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>