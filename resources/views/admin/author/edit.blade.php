@extends('admin.templates.default')

@section('content')
<div class="m-3">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit a New Author</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route ('admin.author.update', $author) }}" method="POST">
                  @csrf
                  @method('PUT')
                  
                <div class="card-body">
                <a href="/admin/author" class="btn btn-primary mb-2">List a Auhtor</a>
                  <div class="form-group">
                    <label for="name"> Name</label>
                    <input type="text" class="form-control" id="name" name="name" value=" {{ old('name', $author->name) }} " placeholder="Masukan Nama penulis" >
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" value="Update" class="btn btn-primary">
                </div>
              </form>
            </div>
            </div>

@endsection