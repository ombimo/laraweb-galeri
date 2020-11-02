<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Contoh Halaman Galeri</title>
    <style>
      .cover {
        height: 12rem;
        background-position: center;
        background-size: cover;
      }
    </style>
  </head>
  <body>

    <div class="container">
      <h1>Galeri</h1>

      <div class="row">
        @foreach ($dataAlbum as $album)
          <div class="col-6">
            <div class="card">
              <div class="card-image-top cover" style="background-image: url('{{ get_thumbnail(optional($album->cover)->gambar, 500, 500) }}')"></div>
              <div class="card-body">
                <a href="{{ $album->link_detail }}" class="stretched-link text-decoration-none text-reset"><strong>{{ $album->nama }}</strong></a>
                <p>{{ $album->sinopsis }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
