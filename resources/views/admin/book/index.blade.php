@extends('admin.templates.default')

@section('content')


        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h3 class="m-0 font-weight-bold text-primary">Books</h3>
              
            </div>
            <div class="card-body">
             <a href="{{ route('admin.book.create') }}" class="btn btn-primary" style="float: right; display: block;">Add Book</a>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 <thead>
                    <tr>
                      <th>Id</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Author</th>
                      <th>Cover</th>
                      <th>Action</th>


                    </tr>
                 </thead>
                    <!-- <tbody>
                     <tr>
                     <td>1</td>
                     <td>Penulis</td>
                     </tr>
                     </tbody> -->
                </table>
              </div>
            </div>
        </div>

<form action="" method="post" id="deleteForm"> 
@csrf @method('DELETE')
<input type="submit" value="Delete" style="display: none;">
</form>

@endsection

@push('scripts')
    <script src="{{ asset('/js/bs-notify.min.js') }}"></script>
    @include('admin.templates.partials.alerts')
    <script>
        $(function () {
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.book.data')}}',
                columns: [
                    { data: 'DT_RowIndex', orderable: false, searchable : false },
                    { data: 'title'},
                    { data: 'description'},
                    { data: 'author'},
                    { data: 'cover'},
                    { data: 'action'},
                ]
            });
        });




    </script>
    <script type="text/javascript"  src=" https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript"  src=" https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>


@endpush
