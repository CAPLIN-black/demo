<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dulur Lanang</title>
    <link rel="shortcut icon" href="Gambar/Logo.png"/>
    <!--Import Font Monoton-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <!--Import CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  </head>
  <body class="bg-black">
      <!--Navbar-->
      <div>
        <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
          <div class="container-fluid">
              <a class="navbar-brand text-light" href="/" style="font-family: Monoton;">
                  <img src="{{ asset('front/Gambar/Logo.png') }}" alt="" width="30" height="30" class="d-inline-block align-text-top">
                  Dulur Lanang
              </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <form class="d-flex" role="search">
                  <input class="form-control rounded-pill me-1" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-primary rounded-pill" type="submit"><i class="bi bi-search"></i></button>
              </form>
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Genre
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/action">Action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/horror">Horror</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/fantasy">Fantasy</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/thriller">Thriller</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/movie">Movies</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/anime">Anime</a>
                </li>
              </ul>
              
            </div>
          </div>
        </nav>
    </div>

      <!--awal Content-->
            <div class="container bg-dark my-2 rounded-1 border-start border-primary border-5">
                <h4 class="text-white text-capitalize p-2">{{ $movie->judul }}</h4>
            </div>
            {{-- template video  --}}
            <div class="container my-2 justify-content-center">
                  <center><iframe width="100%" height="360" src="https://short.ink/-FoWUMZ5d" frameborder="0" scrolling="0" allowfullscreen></iframe></center>
            </div>
            {{-- akhir template video  --}}

            <div class="container bg-dark">
                <div>
                    <h4 class="text-white text-capitalize p-2">{{ $movie->judul }}</h4>
                </div>
                <div class="row bg-light">
                    <div class="col-3 bg-dark"><figure><img src="{{ url('uploads') }}/{{ $movie->gambar }}" class="img-thumbnail" style="width: 300px" alt="Doctor Strange"></figure></div>
                    <div class="col-9 bg-dark">
                        <table class="table text-white">
                          <tbody>
                            <tr>
                              <td>Judul</td>
                              <td>:</td>
                              <td>{{ $movie->judul }}</td>
                            </tr>
                            <tr>
                              <td>Kategori</td>
                              <td>:</td>
                              <td>{{ $movie->kategori }}</td>
                            </tr>
                            <tr>
                              <td>Sutradara</td>
                              <td>:</td>
                              <td>{{ $movie->sutradara }}</td>
                            </tr>
                            <tr>
                              <td>Rating</td>
                              <td>:</td>
                              <td>{{ $movie->rating }}</td>
                            </tr>
                            <tr>
                              <td>Durasi</td>
                              <td>:</td>
                              <td>{{ $movie->durasi }}</td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="row text-white">
                            <h5 class="col-sm-3">Sinopsis</h5>
                            <div class="bg-light text-black h-25 shadow rounded-2 overflow-auto">   
                              <div>
                                <p>{{ $movie->sinopsis }}</p>
                              </div>
                          </div>
                        </div>
                        <div class="link-film">
                          <p>
                            <center>
                              <a href="#">Download Tekan Ini</a>
                            </center>
                          </p>
                        </div>
                        <div class="content">
                          <section class="">

                          </section>
                        </div>
                    </div>
                </div>
        {{-- akhir content  --}}


      <!--Footer-->
      <div class="mt-2">
        <div class="bg-dark p-2 mt-2 d-flex flex-row">
            <div class="me-auto ms-3">
                <a class="navbar-brand text-light" href="#" style="font-family: Monoton;">
                    <img src="{{ url('front/Gambar/Logo.png') }}" alt="" width="30" height="30" class="d-inline-block align-text-top">
                    Dulur Lanang
                </a>
            </div>
            <div class="text-white me-3">
                <i>
                &copy; Copyright 2022
                </i>
            </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>