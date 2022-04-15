<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Data Center - Nginden Timur</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <style>
      /* .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      } */

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
  </head>
  <body>

<main class="form-signin">
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  <form>
     <div class="text-center">
     <img class="mb-4" src="{{ asset('logo/surabaya.png') }}" alt="" width="120" height="150">
     <h1 class="h3 mb-3 fw-normal">Kel. Nginden Timur</h1>
     </div>
      <div class="text-left mb-2">
        <label class="form-label">Email atau WA</label>
        <input type="text" placeholder="Masukan Email atau WA" class="form-control">
      </div>
      <div class="text-left">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" placeholder="Masukan Password">
      </div>
      <small class="text-muted"><a>Lupa Password?</a></small>
      <p><a href="/register" class="text-decoration-none">Belum punya akun? Daftar</a></p>
    <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Login</button>
  </form>
</main>



  </body>
</html>
