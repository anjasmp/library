@extends('frontend.templates.default')

@section('content')
<h2>Koleksi Buku</h2>
<blockquote>
    <p class="flow-text">Koleksi buku yang bisa kamu baca & pinjam</p>
</blockquote>

<div class="row">
    @foreach ($books as $book)

    <div class="card card-hover m-2 hover" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{ $book->getCover() }}" height="250px" class="card-img" alt="Books">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5>
                      <a href="{{ route ('book.show', $book) }}">{{ Str::limit($book->title, 30) }}</a>
                    </h5>
                    <p class="card-text">{{ Str::limit($book->description, 100) }}</p>
                    <div class="card-action">
                    <form action="{{ route ('book.borrow', $book)}}" method="POST">
                      @csrf
                      <input type="submit" value="Pinjam Buku" class="btn btn-primary">
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>


<!-- pagination -->
<div class="pagination justify-content-center mt-5 mb-5">{{ $books->links() }}</div> 
<!-- <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav> -->

@endsection
