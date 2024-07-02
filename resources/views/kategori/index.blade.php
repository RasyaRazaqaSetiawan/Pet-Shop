@extends('layouts.backend')

@section('content')
    <h6 class="mb-0 text-uppercase">Table Kategori</h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="col-lg-2 ms-auto">
                <a href="{{ route('kategori.create') }}" type="button" class="btn btn-primary px-4 raised d-flex gap-2">
                    <i class="material-icons-outlined">add</i>Tambah Data </a>
            </div>
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategori as $data)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $data->nama_kategori }}</td>
                                <td>{{ $data->deskripsi }}</td>
                                <td>
                                    <img src="{{ asset('images/kategori/' . $data->cover) }}" width="100">
                                </td>
                                <td>
                                    <a href="{{ route('kategori.show', $data->id) }}" type="button"
                                        class="btn btn-primary raised gap-2">
                                        <i class="material-icons-outlined">search</i>
                                    </a>
                                    <a href="{{ route('kategori.edit', $data->id) }}" type="button"
                                        class="btn btn-warning raised  gap-2">
                                        <i class="material-icons-outlined">edit</i>
                                    </a>
                                    <a class="btn ripple btn-danger raised  gap-2" href=""
                                        onclick="event.preventDefault(); document.getElementById('destroy-form-{{ $data->id }}').submit();">
                                        <i class="material-icons-outlined">delete</i>
                                    </a>

                                    <form id="destroy-form-{{ $data->id }}"
                                        action="{{ route('kategori.destroy', $data->id) }}" method="POST" class="d-none">
                                        @method('DELETE')
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
