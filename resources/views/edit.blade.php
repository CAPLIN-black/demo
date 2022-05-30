<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our editss</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
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

    <div class="container mt-5">
        <h1>Dashboard Edit</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Sutradara</th>
                    <th>Rating</th>
                    <th>Durasi</th>
                    <th>Kategori</th>
                </tr>
            </thead>
            <tbody>
                @foreach($edit as $edits)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $edits->judul }}</td>
                  <td>{{ $edits->sutradara }}</td>
                  <td>{{ $edits->rating }}</td>
                  <td>{{ $edits->durasi }}</td>
                  <td>{{ $edits->kategori }}</td>
                  <td>
                    <a href="/edit/{{ $edits->id }}" class="btn btn-success">Edit</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
    
    {{-- impor js  --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>