<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://kit.fontawesome.com/d770eb273a.js" crossorigin="anonymous"></script>

  {{-- bootstrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  {{-- custom css --}}
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <title>@yield('title')</title>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto m-lg-0 me-lg-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Promo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Rekomendasi</a>
            </li>
          </ul>
          <ul class="navbar-nav mb-2 mb-lg-0 nav-icon">
            <li class="nav-item mx-md-2">
              <a class="nav-link"><i class="fa-solid fa-basket-shopping"></i></a>
            </li>
            <li class="nav-item mx-md-2">
              <a class="nav-link"><i class="fa-solid fa-user"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <section class="container main">
    @yield('main')
  </section>

  <footer>
    <div class="container text-white">
      <div class="row pt-5 pb-4">
        <div class="col-md-5 text-center text-md-start">
          <div class="row">
            <img src="https://freepikpsd.com/file/2019/10/aa-logo-png-13-Free-PNG-Images-Transparent.png" alt="" class="logo">
          </div>
          <div class="row">
            <p>jual beli platform furnitur di Indonesia</p>
          </div>
          <div class="row d-block mb-5 mb-md-0">
            <a href=""><i class="fa-brands fa-facebook-square"></i></a>
            <a href=""><i class="fa-brands fa-instagram-square"></i></i></a>
            <a href=""><i class="fa-brands fa-twitter-square"></i></a>
          </div>
        </div>
        <div class="col">
          <h4>Akunku</h4>
          <p>Akunku</p>
          <p>Checkout</p>
          <p>Keranjang</p>
          <p>Daftar Keinginan</p>
        </div>
        <div class="col">
          <h4>Jalur Belanda</h4>
          <p>Produk</p>
          <p>Promo</p>
          <p>Rekomendasi</p>
          <p>Tentang Kita</p>
        </div>
        <div class="col-md mt-5 mt-md-0">
          <h4 class="text-center text-md-start">Buletin</h4>
          <form action="" class="">
            <label for="subscribe">Dapatkan pemberitahuan terbaru kami melalui email.</label>
            <input type="text" id="subscribe" placeholder="Masukkan email" class="form-control my-3">
          </form>
        </div>
      </div>
      <div class="row copyright">
        <p class="py-3">©2022 Jalur Belanda Powered By G-Enterprise</p>
      </div>
    </div>
  </footer>

  {{-- boostsrap --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

</body>

</html>
