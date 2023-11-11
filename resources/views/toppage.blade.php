<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@700&display=swap" rel="stylesheet">
  <title>minori_portfolio</title>
</head>
<body>
  <header>
    <div class="titleWrap">
      <div class="title fadeInLeft">
        <a href="{{ route('top') }}">
          <p>minori no gallery</p>
        </a>
      </div>
      <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <nav class="navi">
      <ul class="menuBar fadeInRight">
        <li><a href="{{ route('top') }}">Top</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('work') }}">Works</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
      </ul>
      <div class="menuFooter">
        <div class="snsIcon menuSNS">
          <a href="https://www.instagram.com/minori_no_gallery/"><i class="fa-brands fa-instagram"></i></a>
          <a href="{{ asset('https://www.threads.net/@minori_no_gallery') }}"><i class="fa-brands fa-threads"></i></a>
          <a href="https://www.facebook.com/profile.php?id=100089800526899"><i class="fa-brands fa-facebook"></i></a>
        </div>
        <footer>
          <small>&copy;2023_minori</small>
        </footer>
      </div>
    </nav>
    <div class="hamburgerBackGround"></div>
  </header>

  @yield('contents')

  <div class="snsIcon">
    <a href="{{ asset('https://www.instagram.com/minori_no_gallery/') }}"><i class="fa-brands fa-instagram"></i></a>
    <a href="{{ asset('https://www.threads.net/@minori_no_gallery') }}"><i class="fa-brands fa-threads"></i></a>
    <a href="{{ asset('https://www.facebook.com/profile.php?id=100089800526899') }}"><i class="fa-brands fa-facebook"></i></a>
  </div>
  <footer>
    <small>&copy;2023_minori</small>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
