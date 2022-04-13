<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <title>@yield('title')</title>
</head>

<body>
  <header>
    <h2>EC TRACK</h2>
    <nav>
      <ul>
        <li><a href="/product">中古トラック</a></li>
        <li><a href="{{route('purchase')}}">トラック買取</a></li>
        <li><a href="{{route('cart.index')}}">気になる</a></li>
      </ul>
    </nav>
  </header>
  @yield('main')
</body>

</html>
