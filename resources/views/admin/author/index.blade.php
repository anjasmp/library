@extends('admin.templates.default')

@section('content')


        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h3 class="m-0 font-weight-bold text-primary">Authors</h3>
            </div>
            <div class="card-body">
            <a href="{{ route('admin.author.create') }}" class="btn btn-primary" style="float: right; display: block;">Add Author</a>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
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
                ajax: '{{ route('admin.author.data')}}',
                columns: [
                    { data: 'DT_RowIndex', orderable: false, searchable : false },
                    { data: 'name'},
                    { data: 'action'}
                ]
            });
        });




    </script>
    <script type="text/javascript"  src=" https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript"  src=" https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>


@endpush
