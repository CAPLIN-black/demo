<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!--Import CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            {{-- Navbar --}}
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
                      <li class="nav-item">
                        <a class="nav-link" href="/create">Create</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/edit">Edit</a>
                      </li>
                    </ul>
                    
                  </div>
                </div>
              </nav>
            </div>
            {{-- akhir navbar --}}

            {{-- awal header --}}
            <div class="container my-2">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                    <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="/page"><img src="{{ asset('images/banner/1.jpg') }}" class="d-block w-100 img-fluid rounded-3" alt="Doctor Strange"></a>
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Doctor Strange: Multiverse Of Madness</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <a href="/sonic2"><img src="{{ asset('images/banner/2.jpg') }}" class="d-block w-100 img-fluid rounded-3" alt="Sonic 2"></a>
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Sonic the Hedgehog 2</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <a href="/spiderman"><img src="{{ asset('images/banner/3.jpg') }}" class="d-block w-100 img-fluid rounded-3" alt="Spiderman"></a>
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Spider-Man: No Way Home</h3>
                        </div>
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            {{-- akhir header  --}}

            {{-- awal content  --}}
            <div class="content">
                <div class="container">
                    <p>Laravel</p>

                    {{-- awal card data --}}
                   <div class="container mt-2">
                      <div class="container bg-dark my-2 rounded-1 d-flex">
                        <h5 class="text-white text-capitalize p-2 me-auto">Movies</h5>
                        <a href="/movie" class="btn btn-outline-danger align-self-center">Semua</a>
                      </div>
                    
                      <div class="d-flex flex-wrap justify-content-center">
                        @foreach ($movies as $movie)
                        <div class="card mx-2 my-2" style="width: 8rem; ;">
                            <img src="{{ url('uploads') }}/{{ $movie->gambar }}" style="width: 8rem" class="card-img-top" alt="Spiderman">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <h6 class="card-title text-center" >{{ $movie->judul }}</h6>
                                <div class="text-center">
                                <a href="#" style="font-size: smaller">Action</a>, <a href="#" style="font-size: smaller">Horror</a>, <a href="#" style="font-size: smaller">Fantasy</a>, <a href="#" style="font-size: smaller">Thriller</a>
                                </div>
                                <a href="{{ url('page') }}/{{ $movie->id }}" class="btn btn-primary mt-2">Nonton</a>
                            </div>
                        </div>
                        @endforeach
                      </div>

                   </div>
                  </div>
                    {{-- akhir card data  --}}
                    {{-- <div>
                      <h1>{{ $movies->judul }}</h1>
                    </div> --}}
                    

                </div>
                {{-- akhir content  --}}  
            </div>
        </div>

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

        {{-- ini js --}}
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    </body>
</html>
