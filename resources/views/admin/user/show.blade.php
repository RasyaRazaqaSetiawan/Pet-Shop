@extends('layouts.backend')

@section('content')
    <div class="row">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="mb-4">Show User</h5>
                    <form class="row g-3">
                        <div class="row mb-3">
                            <label for="name" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $user->name }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ $user->email }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="address" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="address" name="address"
                                    value="{{ $user->alamat }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="phone" class="col-sm-3 col-form-label">Nomor Telepon</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="phone" name="phone"
                                    value="{{ $user->telepon }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="gambar" class="col-sm-3 col-form-label">Gambar</label>
                            <div class="col-sm-9">
                                <div class="profile-image-container">
                                    @if ($user->photo)
                                        <img src="{{ asset('images/user/' . $user->photo) }}" alt="Gambar User" class="profile-image img-thumbnail">
                                    @else
                                        <img src="{{ asset('frontend/assets/images/homepage-one/sallers-cover.png') }}" alt="Default Image" class="profile-image img-thumbnail">
                                    @endif
                                </div>
                            </div>
                        </div>                        
                        <div class="col-md-12">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <a href="{{ route('user.index') }}" class="btn btn-secondary px-4">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
