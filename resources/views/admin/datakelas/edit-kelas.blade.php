@extends('layouts.kerangka')
@section('titles')
  <title>SPP - Edit Data Kelas</title>
@endsection
@section('content')
  
<div class="pagetitle">
  <h5 class="fw-semibold"><a type="button" onclick="history.back()" class="back-icon"><i class="bi bi-chevron-left back-icon"></i></a> <span class="ps-1">Data Kelas</span></h5>
</div>

<section class="section dashboard">
  <div class="row">

    <div class="col-lg-5">
      <div class="cardxy shadow-sm mb-4">
        <div class="card-body mx-1">
          <h6 class="card-title">Edit Data Kelas</h6>
          <form class="row g-3" action="/datakelas/{{ $datakelas->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-12">
              <div class="col-12">
                <label for="namaKelas" class="form-label mb-1">Nama Kelas</label>
                <input type="text" name="kelas" class="form-control form-control-smx roundedx @error('kelas') is-invalid @enderror" placeholder="ex: XII RPL 1" id="namaKelas" autocomplete="off" value="{{ $datakelas->kelas, old('kelas') }}">
                @error('kelas')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="col-12">
              <label for="dataProdi" class="form-label mb-1">Kompetensi Keahlian</label>
              <select name="kompetensikeahlian_id" id="dataProdi" class="form-select form-select-smx roundedx @error('kompetensikeahlian_id') is-invalid @enderror">
                <option disabled value>- Pilih kompetensi keahlian -</option>
                @foreach ($dataprodi as $prodi)
                  <option value="{{ $prodi->id }}" {{ $prodi->id == $datakelas->kompetensikeahlian_id ? 'selected' : '' }}>{{ $prodi->name }}</option>
                @endforeach
              </select>
              @error('kompetensikeahlian_id')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <div class="text-end">
              <button type="submit" class="btnn btn-violet py-2 ps-3 mb-3">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="col-lg-7">
      <div class="cardxy shadow-sm">
        <div class="card-body">
          <div class="row">
            <div class="col-8 col-md-8 col-lg-8">
              <h5 class="card-title">Preview Data Kelas</h5>
            </div>
          </div>

          <div class="table-responsive" style="max-height: 220px;">
            <table class="table table-sm">
              <thead>
                <tr class="table-me">
                  <th scope="col">#</th>
                  <th scope="col"><span class="d-none d-md-inline">Nama</span> Kelas</th>
                  <th scope="col">Kompetensi Keahlian</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($previewkelas as $kelas)
                  <tr class="{{ $kelas->id == $datakelas->id ? 'table-blue' : '' }}">
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $kelas->kelas }}</td>
                    <td>{{ $kelas->kompetensiKeahlian->name }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
@endsection