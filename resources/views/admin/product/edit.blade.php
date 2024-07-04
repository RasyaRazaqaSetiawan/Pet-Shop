@extends('layouts.backend')

@section('content')
<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-body p-4">
                <h5 class="mb-4">Edit Product</h5>
                <form class="row g-3" action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="nama_product" class="col-sm-3 col-form-label">Nama Product</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_product" name="nama_product" value="{{ old('nama_product', $product->nama_product) }}" placeholder="Nama Product">
                            @if ($errors->has('nama_product'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('nama_product') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Deskripsi">{{ old('deskripsi', $product->deskripsi) }}</textarea>
                            @if ($errors->has('deskripsi'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('deskripsi') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="harga" name="harga" value="{{ old('harga', $product->harga) }}" placeholder="Harga">
                            @if ($errors->has('harga'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('harga') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="stok" class="col-sm-3 col-form-label">Stok</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="stok" name="stok" value="{{ old('stok', $product->stok) }}" placeholder="Stok">
                            @if ($errors->has('stok'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('stok') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="id_kategori" class="col-sm-3 col-form-label">Kategori</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="id_kategori" name="id_kategori">
                                @foreach($kategoris as $kat)
                                    <option value="{{ $kat->id }}" {{ $kat->id == old('id_kategori', $product->id_kategori) ? 'selected' : '' }}>{{ $kat->nama_kategori }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('id_kategori'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('id_kategori') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="gambar" class="col-sm-3 col-form-label">Gambar</label>
                        <div class="col-sm-9">
                            @if ($product->gambar)
                                <img src="{{ asset('images/product/' . $product->gambar) }}" alt="Gambar Produk" class="img-thumbnail mt-2" style="width: 200px;">
                            @endif
                            <input type="file" class="form-control" id="gambar" name="gambar">
                            @if ($errors->has('gambar'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('gambar') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">Submit</button>
                        </div>  
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
