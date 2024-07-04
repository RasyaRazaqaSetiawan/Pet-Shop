@extends('layouts.backend')

@section('content')
    <div class="row">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="mb-4">Edit Data Kategori</h5>
                    <form class="row g-3" action="{{ route('kategori.update', $kategori->id) }}" method="POST" role="form"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="input35" class="col-sm-3 col-form-label">Nama Kategori</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="input35" name="nama_kategori"
                                    value="{{ old('nama_kategori', $kategori->nama_kategori) }}" placeholder="Nama Kategori"
                                    required>
                                @if ($errors->has('nama_kategori'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('nama_kategori') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="gambar" class="col-sm-3 col-form-label">Gambar</label>
                            <div class="col-sm-9">
                                @if ($kategori->gambar)
                                    <img src="{{ asset('images/kategori/' . $kategori->gambar) }}" alt="Gambar Kategori"
                                        class="img-thumbnail mb-3" width="150">
                                @endif
                                <input type="file" class="form-control" id="gambar" name="gambar"
                                    value="{{ $kategori->gambar }}" required>
                                @if ($errors->has('gambar'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('gambar') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-grd-primary px-4">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!--end row-->
@endsection
