<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee App</title>
    <link rel="stylesheet" href="/css/default.css" />
    @yield('head')
</head>
<body>
<header class="header">
    <h1 class="header-ttl">
        <a href="http://127.0.0.1:8000/employee/indicate">
            株式会社ワキプリントピア
        </a>
    </h1>
    <nav class="header-nav">
        <ul class="header-nav-list">
            <li class="header-nav-item"><a href="http://127.0.0.1:8000/employee/indicate">ホーム</a></li>
            <li class="header-nav-item"><a href="#">ニュース</a></li>
            <li class="header-nav-item"><a href="#">社員ブログ</a></li>
            <li class="header-nav-item"><a href="#">お問い合わせ</a></li>
            <li class="header-nav-item">
                <a href="#">{{ $user->name }}</a>
            <ul>
                <li><a href="#">プロフィール</a></li>
                <li><a href="#">ログアウト</a></li>
            </ul>
            </li>
        </ul>
    </nav>
</header>
<main>
    @yield('content')
</main>
</body>
</html>
