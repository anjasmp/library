@extends('frontend.templates.default')

@section('content')
<h1>Buku Yang Dipinjam</h1>
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
                    <a a href="{{ route ('book.show', $book) }}">{{ Str::limit($book->title, 30) }}</a>
                    </h5>
                    <p class="card-text">{{ Str::limit($book->description, 100) }}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
