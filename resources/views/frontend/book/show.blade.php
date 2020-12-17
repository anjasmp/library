@extends('frontend.templates.default')

@section('content')

<div class="card card-hover m-2 hover">
        <div class="row no-gutters">
            <div class="col-md" style="border-radius: 5px solid ">
                <img src="{{ $book->getCover() }}" class="card-img" alt="Books">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5> {{ ($book->title) }}</h5>
                    <br>
                    <br>
                    
                    <blockquote>
                    <p class="card-text">{{ ($book->description) }}</p>

                    </blockquote>
                    <br>
                    <br>
                    <p>
                        <i class="fas fa-user-alt"> {{ $book->author->name }}</i>
                    </p>
                    <p>
                        <i class="fas fa-book"> {{ $book->qty }}</i>
                    </p>

                    <div class="card-action">
                    <form action="{{ route ('book.borrow', $book)}}" method="POST">
                        @csrf
                        <input type="submit" value="Pinjam Buku" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection