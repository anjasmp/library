@extends('admin.templates.default')

@section('content')
<div class="m-3">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add a New Book</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route ('admin.book.update', $book) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method("PUT")
                  
                <div class="card-body">
                <a href="/admin/book/" class="btn btn-primary mb-2">List a Auhtor</a>
                  <div class="form-group">
                    <label for="title"> Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Masukan Judul Buku" value=" {{ $book->title ?? old('title', '') }} "  >
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="description"> Description</label>
                    <textarea name="description" id="description" rows="3" class="form-control" placeholder="Masukan Deskripsi Buku">{{ $book->description ?? old('description', '') }}</textarea>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="author_id"> Author</label>
                    <select name="author_id" id="author_id" class="form-control select2">
                      @foreach ($authors as $author)
                        <option 
                          value="{{ $author->id }}"
                          @if ($author->id === $book->author_id)
                            selected
                          @endif
                          
                          >
                          {{ $author->name }}

                        </option>

                      @endforeach
                    </select>
                    @error('author_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="cover"> Cover</label>
                    <input type="file" class="form-control" id="cover" name="cover" >
                    @error('cover')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="qty"> Quantity</label>
                    <input type="text" class="form-control" id="qty" name="qty" placeholder="Masukan Jumlah" value=" {{ $book->qty ?? old('qty', '') }} "  >
                    @error('qty')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>


                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
            </div>

@endsection

@push('select2css')
<link href="{{ asset('/select2/CSS/select2.min.css')}}" rel="stylesheet">
@endpush

@push('scripts')

  <script src="{{ asset('/select2/js/select2.full.min.js')}}"> </script>
  <script>
    $('.select2').select2();
  </script>

@endpush