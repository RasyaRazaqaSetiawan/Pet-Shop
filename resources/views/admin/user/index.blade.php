@extends('layouts.backend')

@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6 class="mb-0 text-uppercase">Table User</h6>
            </div>
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $data)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $data->name  }}</td>
                                <td>{{ $data->email }}</td>
                                <td>
                                    <a href="{{ route('user.show', $data->id) }}" type="button" class="btn btn-warning raised gap-2">
                                        <i class="material-icons-outlined">visibility</i>
                                    </a>
                                    <a class="btn ripple btn-danger raised gap-2" href="{{ route('user.destroy', $data->id) }}" data-confirm-delete="true">
                                        <i class="material-icons-outlined">delete</i>
                                    </a>
                                    <form id="destroy-form-{{ $data->id }}"
                                        action="{{ route('user.destroy', $data->id) }}" method="POST" class="d-none">
                                        @method('DELETE')
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
    <script>
        new DataTable('#example');
    </script>
@endpush

