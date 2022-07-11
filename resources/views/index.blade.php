<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5 p-5">
      <h1 class="text-center">Perpustakaan</h1>
      <table class="table mt-5 table-striped table-responsive table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Author</th>
            <th scope="col">Publisher</th>
            <th scope="col">Peminjam</th>
            <th scope="col">Updated at</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($books as $book)
          <tr>
            <th scope="row">{{ $book->id }}</th>
            <td>{{ $book->title }}</td>
            <td>{{ $book->content }}</td>
            <td>{{ $book->authors->name }}</td>
            <td>{{ $book->publisher->name }}</td>
            <td>{{ $book->peminjam->nama }}</td>
            <td>{{ $book->updated_at->diffForHumans() }}</td>
          </tr>
          @empty
            <tr>
              <td scope="row" colspan="6">Tidak ada data terbaru</td>
            </tr>
          @endforelse
        </tbody>
      </table>
      {{ $books->links() }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
