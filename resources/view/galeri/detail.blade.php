<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.7.1/viewer.min.css" integrity="sha512-JtP5cHnAc8qtRr8ra9vwRa1ba2GbA3gZxMxuseqpjQPwP8+zjXSTnKbiYdUvD+a4lXOoo4bAc1Kmaxufh8n0YQ==" crossorigin="anonymous" />
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
      <h1>{{ $album->nama }}</h1>

      <div class="card mb-3">
        <div class="card-body">{{ $album->isi }}</div>
      </div>

      <div class="row" id="viewer">
        @foreach ($data as $item)
          <div class="col-6 col-sm-4 col-sm-3">
            <div class="card">
              <img data-original="{{ get_image($item->gambar) }}" src="{{ get_thumbnail($item->gambar, 200, 200) }}" alt="{{ $item->judul }}">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.7.1/viewer.min.js" integrity="sha512-nwFyOmSB8H1ol9cl2ioAgzoMgr+2TNimMx6kNajHcpXyNHsnpdkxJQu9RDyVp0CIiuESsMajBKBrnBVv3HA9yQ==" crossorigin="anonymous"></script>

    <script>
      $(document).ready(function () {
        var element = document.getElementById('viewer')

        window.viewer = new Viewer(element, {
          url: 'data-original',
          zIndex: 1000000,

        })

      })
    </script>
  </body>
</html>
