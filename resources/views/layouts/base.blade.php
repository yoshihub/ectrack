<!doctype html>
<html lang="ja" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"
    integrity="sha256-PDJQdTN7dolQWDASIoBVrjkuOEaI137FI15sqI3Oxu8=" crossorigin="anonymous">

  <title>@yield('title')</title>
</head>

<body class="h-100 vstack" data-bs-spy="scroll" data-bs-target="#navbar">

  <!-- ナビゲーションバー -->
  <nav class="navbar navbar-expand-lg navbar-light bg-info" id="navbar">
    <div class="container">
      <a class="navbar-brand" href="/product">
        <i class="bi bi-app-indicator"></i>
        EC TRACK
      </a>
      <!-- トグルボタン -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- リンク一覧 -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/product">
              中古トラック一覧
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('purchase')}}">トラック買取</a>
          </li>
          <li class=" nav-item">
            <a class="nav-link" href="{{route('cart.index')}}">気になる</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/form">お問い合わせ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
@yield('main')


  <!-- フッター -->
  <footer class="mt-auto py-2 bg-info text-white">
    <div class="container text-center">
      2022 TCTRACK
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>
</body>

</html>
