@extends('layouts.backend')

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6 class="mb-0 text-uppercase">Table Pesanan</h6>
            </div>
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pengguna</th>
                            <th>Nama Product</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pesanan as $data)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $data->user->name }}</td>
                                <td>{{ $data->product->name }}</td>
                                <td>{{ $data->jumlah }}</td>
                                <td>{{ $data->total }}</td>
                                <td>{{ $data->status }}</td>
                                <td>
                                    <a href="{{ route('pesanan.show', $data->id) }}" class="btn btn-info btn-sm">
                                        <i class="material-icons-outlined">visibility</i>
                                    </a>
                                    <a href="{{ route('pesanan.edit', $data->id) }}" class="btn btn-warning btn-sm">
                                        <i class="material-icons-outlined">edit</i>
                                    </a>
                                    <a class="btn ripple btn-danger raised gap-2" href="{{ route('pesanan.destroy', $data->id) }}" data-confirm-delete="true">
                                        <i class="material-icons-outlined">delete</i>
                                    </a>
                                    <form id="destroy-form-{{ $data->id }}" 
                                        action="{{ route('pesanan.destroy', $data->id) }}" method="POST" class="d-none">
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