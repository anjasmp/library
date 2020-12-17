@extends('admin.templates.default')

@section('content')
<div class="card shadow mb-4">
<div class="card card-primary">
          <div class="card-header py-3">
              <h3 class="m-0 font-weight-bold text-primary">Add a New Book</h3>
              <a href="/admin/author/" class="btn btn-primary" style="float: right; display: block; margin-bottom: 10px;">List a Author</a>
            </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route ('admin.author.store') }}" method="POST">
                  @csrf
                  
                <div class="card-body">
                  <div class="form-group">
                    <label for="name"> Name</label>
                    <input type="text" class="form-control" id="name" name="name" value=" {{ old('name', '') }} " placeholder="Masukan Nama penulis" >
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add</button>
                </div>
                </div>
              </form>
            </div>
            </div>

@endsection