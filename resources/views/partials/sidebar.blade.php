@can('admin')

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item border-right">
    <a href="/dashboard" class="nav-link {{ Request::is('dashboard*')?'fw-bold':'collapsed' }}">
      <i class="bi bi-back"></i>
        <span>Dashboard</span>
    </a>
  </li>

  <li class="nav-heading">Data</li>

  <li class="nav-item">
    <a href="{{ route('dataspp.index') }}" class="nav-link {{ Request::is('dataspp*')?'fw-bold':'collapsed' }}">
      <i class="bi bi-book-half"></i>
      <span>Data SPP</span>
    </a>
  </li>

    <li class="nav-item">
    <a href="/dataprodi" class="nav-link {{ Request::is('dataprodi*')?'fw-bold':'collapsed' }}">
      <i class="bi bi-asterisk"></i>
      <span>Data Prodi</span>
    </a>
  </li>

  <li class="nav-item">
    <a href="/datakelas" class="nav-link {{ Request::is('datakelas*')?'fw-bold':'collapsed' }}">
      <i class="bi bi-text-wrap"></i>
      <span>Data Kelas</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link {{ Request::is(['datasiswa*','datapetugas*','dataadmin*']) ? 'fw-bold' : 'collapsed' }}" data-bs-target="#datapengguna" data-bs-toggle="collapse" href="#">
      <i class="bi bi-universal-access"></i><span>Data Pengguna</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="datapengguna" class="nav-content {{ Request::is(['datasiswa*','datapetugas*','dataadmin*']) ? 'show' : 'collapse' }}" data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ route('datasiswa.index') }}" class="{{ Request::is('datasiswa*')?'active fw-bold':'' }}">
          <i class="bi bi-circle"></i><span>Data Siswa</span>
        </a>
      </li>
      <li>
        <a href="{{ route('datapetugas.index') }}" class="{{ Request::is('datapetugas*')?'active fw-bold':'' }}">
          <i class="bi bi-circle"></i><span>Data Petugas</span>
        </a>
      </li>
      <li>
        <a href="{{ route('dataadmin.index') }}" class="{{ Request::is('dataadmin*')?'active fw-bold':'' }}">
          <i class="bi bi-circle"></i><span>Data Admin</span>
        </a>
      </li>
    </ul>
  </li>

  <li class="nav-item">
    <a href="{{ route('datapembayaran.index') }}" class="nav-link {{ Request::is(['datapembayaran','datapembayaran/*/edit','datapembayaran/*'])?'fw-bold':'collapsed' }}">
      <i class="bi bi-palette2"></i>
      <span>Data Pembayaran</span>
    </a>
  </li>

  <li class="nav-heading">Transaksi</li>

  <li class="nav-item">
    <a href="/entri-pembayaran" class="nav-link {{ Request::is(['entri-pembayaran','entri-pembayaran/*/detail-siswa'])?'fw-bold':'collapsed' }}">
      <i style="margin-right: 10px;">Rp</i>
      <span>Entri Pembayaran</span>
    </a>
  </li>

  <li class="nav-item">
    <a href="{{ route('history.index') }}" class="nav-link {{ Request::is('history*')?'fw-bold':'collapsed' }}">
      <i class="bi bi-clock-history"></i>
      <span>History Pembayaran</span>
    </a>
  </li>

  
  <li class="nav-item">
    <a href="{{ route('laporan.index') }}" class="nav-link {{ Request::is('laporan*')?'fw-bold':'collapsed' }}">
      <i class="bi bi-clipboard-check"></i>
      <span>Laporan</span>
    </a>
  </li>

  <li class="nav-heading">Opsi Lainnya</li>

  <li class="nav-item">
    <a href="/profile" class="nav-link {{ Request::is('profile*')?'fw-bold':'collapsed' }}">
      <i class="bi bi-universal-access"></i>
      <span>Profile</span>
    </a>
  </li>

  <li class="nav-item">
    <a href="#" data-bs-toggle="modal" data-bs-target="#disablebackdrop" class="nav-link collapsed">
      <i class="bi bi-chevron-left text-danger"></i>
      <span class="text-danger">Logout</span>
    </a>
  </li>

</ul>

@endcan
  
@can('petugas')
  
<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-heading">Menu Petugas</li>

  <li class="nav-item border-right">
    <a href="/dashboard" class="nav-link {{ Request::is('dashboard*')?'fw-bold':'collapsed' }}">
      <i class="bi bi-back"></i>
        <span>Dashboard</span>
    </a>
  </li>

  <li class="nav-item border-right">
    <a href="/datasiswa" class="nav-link {{ Request::is('datasiswa*')?'fw-bold':'collapsed' }}">
      <i class="bi bi-universal-access"></i>
        <span>Data Siswa</span>
    </a>
  </li>

  <li class="nav-item">
    <a href="{{ route('datapembayaran.index') }}" class="nav-link {{ Request::is('datapembayaran*')?'fw-bold':'collapsed' }}">
      <i class="bi bi-palette2"></i>
      <span>Data Pembayaran</span>
    </a>
  </li>

  {{-- <li class="nav-heading">Transaksi</li> --}}
  <li class="nav-heading border-dash-zinc me-3"></li>

  <li class="nav-item">
    <a href="/entri-pembayaran" class="nav-link {{ Request::is(['entri-pembayaran','entri-pembayaran/*/detail-siswa'])?'fw-bold':'collapsed' }}">
      <i style="margin-right: 10px;">Rp</i>
      <span>Entri Pembayaran</span>
    </a>
  </li>

  <li class="nav-item">
    <a href="{{ route('history.index') }}" class="nav-link {{ Request::is('history*')?'fw-bold':'collapsed' }}">
      <i class="bi bi-clock-history"></i>
      <span>History Pembayaran</span>
    </a>
  </li>

  <li class="nav-item">
    <a href="{{ route('laporan.index') }}" class="nav-link {{ Request::is('laporan*')?'fw-bold':'collapsed' }}">
      <i class="bi bi-clipboard-check"></i>
      <span>Laporan</span>
    </a>
  </li>
  
  <li class="nav-heading">Lainnya</li>
  
  <li class="nav-item">
    <a href="/profile" class="nav-link {{ Request::is('profile*')?'fw-bold':'collapsed' }}">
      <i class="bi bi-universal-access"></i>
      <span>Profile</span>
    </a>
  </li>

  <li class="nav-item">
    <a href="#" data-bs-toggle="modal" data-bs-target="#disablebackdrop" class="nav-link collapsed">
      <i class="bi bi-chevron-left text-danger"></i>
      <span class="text-danger">Logout</span>
    </a>
  </li>

</ul>

@endcan

@can('siswa')
  
<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-heading">Menu</li>

  <li class="nav-item border-right">
    <a href="/siswa/{{ auth()->user()->id }}/beranda" class="nav-link {{ Request::is('siswa/*/beranda')?'fw-bold':'collapsed' }}">
      <i class="bi bi-back"></i>
        <span>Beranda</span>
    </a>
  </li>

  {{-- <li class="nav-item border-right">
    <a href="/siswa/{{ auth()->user()->id }}/fyi" class="nav-link {{ Request::is('siswa/*/fyi')?'fw-bold':'collapsed' }}">
      <i class="bi bi-app-indicator"></i>
        <span>Informasi</span>
    </a>
  </li> --}}

  <li class="nav-item">
    <a href="/siswa/{{ auth()->user()->id }}/entri-pembayaran" class="nav-link {{ Request::is('siswa/*/entri-pembayaran')?'fw-bold':'collapsed' }}">
      <i style="margin-right: 10px;">Rp</i>
      <span>Entri Pembayaran</span>
    </a>
  </li>

  <li class="nav-item">
    <a href="/siswa/{{ auth()->user()->id }}/riwayat-pembayaran" class="nav-link {{ Request::is('siswa/*/riwayat-pembayaran')?'fw-bold':'collapsed' }}">
      <i class="bi bi-clock-history"></i>
      <span>Riwayat Pembayaran</span>
    </a>
  </li>

  <li class="nav-item">
    <a href="{{ route('profile-siswa.index') }}" class="nav-link {{ Request::is('profile-siswa*')?'fw-bold':'collapsed' }}">
      <i class="bi bi-universal-access"></i>
      <span>Profile Siswa</span>
    </a>
  </li>

  <li class="nav-heading mb-0">Keluar</li>

  <li class="nav-item">
    <a href="#" data-bs-toggle="modal" data-bs-target="#disablebackdrop" class="nav-link collapsed">
      <i class="bi bi-chevron-left text-danger"></i>
      <span class="text-danger">Logout</span>
    </a>
  </li>

</ul>

@endcan
