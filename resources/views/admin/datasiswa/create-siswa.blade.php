@extends('layouts.kerangka')
@section('titles')
  <title>SPP - Tambah Data Siswa</title>
@endsection
@section('content')
  
<div class="pagetitle">
  <h5 class="fw-semibold"><a type="button" onclick="history.back()" class="back-icon"><i class="bi bi-chevron-left back-icon"></i></a> <span class="ps-1">Data Siswa</span></h5>
</div>

<section class="section dashboard mb-5">
  <div class="row">
    <div class="col-lg-9">
      <div class="cardxy shadow-sm">
        <div class="card-body">
          <h5 class="card-title ms-2">Tambah Data Siswa</h5>
          <form class="row g-3 mx-0 mx-md-1 mx-lg-1 mb-3" action="{{ route('datasiswa.store') }}" method="POST">
            @csrf
            <div class="col-12 col-md-6 col-lg-6 pe-2 pe-md-3 pe-lg-3">
              <div class="form-group mb-3">
                <label for="nisn" class="form-label mb-1">NISN</label>
                <input type="text" name="nisn" class="form-control form-control-smx roundedx @error('nisn') is-invalid @enderror" value="{{ old('nisn') }}" placeholder="Masukkan nisn" id="nisn" autocomplete="off">
                @error('nisn')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group mb-3">
                <label for="nis" class="form-label mb-1">NIS</label>
                <input type="text" name="nis" class="form-control form-control-smx roundedx @error('nis') is-invalid @enderror" value="{{ old('nis') }}" placeholder="Masukkan nis" id="nis" autocomplete="off">
                @error('nis')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group mb-3">
                <label for="name" class="form-label mb-1">Nama Siswa</label>
                <input type="text" name="name" class="form-control form-control-smx roundedx @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Masukkan nama siswa" id="name" autocomplete="off">
                @error('name')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group mb-3">
                <label for="jenis_kelamin" class="form-label mb-1">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-select form-select-smx roundedx @error('jenis_kelamin') is-invalid @enderror">
                  <option disabled value>- Pilih Jenis Kelamin -</option>
                    <option disabled selected hidden>- Pilih Jenis Kelamin -</option>
                    <option value="Laki-laki">Laki - laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                @error('jenis_kelamin')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group mb-3">
                <label for="kelas_id" class="form-label mb-1">Kelas</label>
                <select name="kelas_id" class="form-select form-select-smx roundedx @error('kelas_id') is-invalid @enderror" id="kelas_id">
                  <option disabled value>- Pilih kelas -</option>
                  @foreach ($datakelas as $kelas)
                    <option disabled selected hidden>- Pilih kelas -</option>
                    <option value="{{ $kelas->id }}">{{ $kelas->kelas }}</option>
                  @endforeach
                </select>
                @error('kelas_id')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group mb-3">
                <label for="spp_id" class="form-label mb-1">Tahun SPP</label>
                <select name="spp_id" class="form-select form-select-smx roundedx @error('spp_id') is-invalid @enderror" id="spp_id">
                  <option disabled value>- Pilih tahun spp -</option>
                  @foreach ($dataspp as $spp)
                    <option disabled selected hidden>- Pilih spp -</option>
                    <option value="{{ $spp->id }}">{{ $spp->tahun }}</option>
                  @endforeach
                </select>
                @error('spp_id')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>

            </div>

            <input type="hidden" name="level" value="siswa">

            <div class="col-12 col-md-6 col-lg-6 ps-2 ps-md-3 ps-lg-3 mt-0 mt-md-3 mt-lg-3">
              <div class="form-group mb-3">
                <label for="email" class="form-label mb-1">Email</label>
                <input type="text" name="email" class="form-control form-control-smx roundedx @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="contoh@mail.com" id="email" autocomplete="off">
                @error('email')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group mb-3">
                <label for="username" class="form-label mb-1">Username</label>
                <input type="text" name="username" class="form-control form-control-smx roundedx @error('username') is-invalid @enderror" value="{{ old('username') }}" placeholder="Masukkan username" id="username" autocomplete="off">
                @error('username')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group mb-3">
                <label for="password" class="form-label mb-1">Password</label>
                <input type="password" name="password" class="form-control form-control-smx roundedx @error('password') is-invalid @enderror" value="{{ old('password') }}" placeholder="Masukkan password" id="password" autocomplete="off">
                @error('password')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group mb-3">
                <label for="telepon" class="form-label mb-1">Telepon</label>
                <input type="text" name="telepon" class="form-control form-control-smx roundedx @error('telepon') is-invalid @enderror" value="{{ old('telepon') }}" placeholder="XXXX XXXX XXXX" id="telepon" autocomplete="off">
                @error('telepon')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group mb-3">
                <label for="alamat" class="form-label mb-1">Alamat</label>
                <input type="text" name="alamat" class="form-control form-control-smx roundedx @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}" placeholder="Masukkan alamat" id="alamat" autocomplete="off">
                @error('alamat')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
              <div class="text-end ">
                <button type="submit" class="btnn btn-violet py-2 ps-3 mb-3">Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection