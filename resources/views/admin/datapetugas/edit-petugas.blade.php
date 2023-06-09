@extends('layouts.kerangka')
@section('titles')
  <title>SPP - Edit Data Petugas</title>
@endsection
@section('content')
  
<div class="pagetitle">
  <h5 class="fw-semibold"><a href="{{ route('datapetugas.index') }}" class="back-icon"><i class="bi bi-chevron-left back-icon"></i></a> <span class="ps-1">Data Petugas</span></h5>
</div>

<section class="section dashboard mb-5">
  <div class="row">
    <div class="col-lg-9">
      <div class="cardxy shadow-sm">
        <div class="card-body">
          <h5 class="card-title ms-2">Edit Data Petugas</h5>
          <form class="row g-3 mx-0 mx-md-1 mx-lg-1 mb-3" action="/datapetugas/{{ $datapetugas->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-12 col-md-6 col-lg-6 pe-2 pe-md-3 pe-lg-3">
              <div class="form-group mb-3">
                <label for="name" class="form-label mb-1">Nama Petugas</label>
                <input type="text" name="name" class="form-control form-control-smx roundedx @error('name') is-invalid @enderror" value="{{ $datapetugas->name, old('name') }}" placeholder="Masukkan nama petugas" id="name" autocomplete="off">
                @error('name')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group mb-3">
                <label for="username" class="form-label mb-1">Username</label>
                <input type="text" name="username" class="form-control form-control-smx roundedx @error('username') is-invalid @enderror" value="{{ $datapetugas->username, old('username') }}" placeholder="Masukkan username" id="username" autocomplete="off">
                @error('username')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group mb-3">
                <label for="jenis_kelamin" class="form-label mb-1">Jenis Kelamin</label>
                <input type="text" name="jenis_kelamin" class="form-control form-control-smx roundedx @error('jenis_kelamin') is-invalid @enderror" value="{{ $datapetugas->jenis_kelamin, old('jenis_kelamin') }}" placeholder="Masukkan jenis_kelamin" id="jenis_kelamin" autocomplete="off">
                @error('jenis_kelamin')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group mb-3">
                <label for="email" class="form-label mb-1">Email</label>
                <input type="text" name="email" class="form-control form-control-smx roundedx @error('email') is-invalid @enderror" value="{{ $datapetugas->email, old('email') }}"  placeholder="Masukkan email" id="email" autocomplete="off">
                @error('email')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-6 ps-2 ps-md-3 ps-lg-3 mt-0 mt-md-3 mt-lg-3">
              <div class="form-group mb-2">
                <label for="password" class="form-label mb-1">Password Baru</label>
                <input type="password" name="password" class="form-control form-control-smx roundedx @error('password') is-invalid @enderror" value="{{ old('password') }}" placeholder="Masukkan password baru" id="password" autocomplete="off">
                <small class="ms-2 fst-italic text-sky" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Kosongkan untuk tidak mengubah password."><i class="bi bi-info-circle pe-1"></i>Info password</small>
                @error('password')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group mb-3">
                <label for="telepon" class="form-label mb-1">Telepon</label>
                <input type="text" name="telepon" class="form-control form-control-smx roundedx @error('telepon') is-invalid @enderror" value="{{ $datapetugas->telepon, old('telepon') }}" placeholder="XXXX XXXX" id="telepon" autocomplete="off" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                @error('telepon')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>

              <input type="hidden" name="level" value="petugas">

              <div class="form-group mb-3">
                <label for="alamat" class="form-label mb-1">Alamat</label>
                <input type="text" name="alamat" class="form-control form-control-smx roundedx @error('alamat') is-invalid @enderror" value="{{ $datapetugas->alamat, old('alamat') }}" placeholder="Masukkan alamat" id="alamat" autocomplete="off">
                @error('alamat')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
              <div class="text-end ">
                <button type="submit" class="btnn btn-violet py-2 ps-3 mb-2">Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection