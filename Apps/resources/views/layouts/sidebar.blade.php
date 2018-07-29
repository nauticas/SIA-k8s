@if(Auth::check())
<aside class="main-sidebar">

  <section class="sidebar">

    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('dist/img/avatar5.png') }}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
        <p>
            @if(Auth::user()->role == "admin")
            {{ Auth::user()->username }}
            @elseif(Auth::user()->role == "dosen")
            {{ Auth::user()->dosen->nama_dosen }}
            @elseif(Auth::user()->role == "mahasiswa")
            {{ Auth::user()->mahasiswa->nama_mahasiswa }}
            @endif
        </p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
</div>

<ul class="sidebar-menu" data-widget="tree">
  <li class="header">MENU</li>
  @if(Auth::user()->role == 'admin')
  <li class="{{Request::segment(2) == '' ? 'active' : ''}}">
    <a href="{{route('admin')}}">
        <i class="fa fa-dashboard"></i>
        <span>Dashboard</span>
    </a>
</li>
<li class="{{Request::segment(2) == 'dosen' ? 'active' : ''}}">
    <a href="{{route('dosen.index')}}">
        <i class="fa fa-list"></i>
        <span>Dosen</span>
    </a>
</li>
<li class="{{Request::segment(2) == 'mahasiswa' ? 'active' : ''}}">
    <a href="{{route('mahasiswa.index')}}">
        <i class="fa fa-graduation-cap"></i>
        <span>Mahasiswa</span>
    </a>
</li>
<li class="{{Request::segment(2) == 'matakuliah' ? 'active' : ''}}">
    <a href="{{route('matakuliah.index')}}">
        <i class="fa fa-file-text"></i>
        <span>Mata Kuliah</span>
    </a>
</li>
<li class="{{Request::segment(2) == 'ruang' ? 'active' : ''}}">
    <a href="{{route('ruang.index')}}">
        <i class="fa fa-map"></i>
        <span>Ruang</span>
    </a>
</li>
<li class="{{Request::segment(2) == 'jadwal' ? 'active' : ''}}">
    <a href="{{route('jadwal.index')}}">
        <i class="fa fa-table"></i>
        <span>Jadwal Kuliah</span>
    </a>
</li>
<li class="{{Request::segment(2) == 'thnajaran' ? 'active' : ''}}">
    <a href="{{route('thnajaran.index')}}">
        <i class="fa fa-calendar"></i>
        <span>Tahun Ajaran</span>
    </a>
</li>
@elseif(Auth::user()->role == 'mahasiswa')

<li class="{{Request::segment(2) == '' ? 'active' : ''}}">
    <a href="{{route('mahasiswa')}}">
        <i class="fa fa-dashboard"></i>
        <spanp>Dashboard</spanp>
    </a>
</li>
<li class="{{Request::segment(2) == 'krs' ? 'active' : ''}}">
    <a href="{{route('krs.index')}}">
        <i class="fa fa-id-card"></i>
        <span>Kartu Rencana Studi</span>
    </a>
</li>
<li class="{{Request::segment(2) == 'khs' ? 'active' : ''}}">
    <a href="{{route('khs.index')}}">
        <i class="fa fa-vcard"></i>
        <span>Kartu Hasil Studi</span>
    </a>
</li>
@else

<li class="{{Request::segment(2) == '' ? 'active' : ''}}">
    <a href="{{route('dosen')}}">
        <i class="fa fa-dashboard"></i>
        <span>Dashboard</span>
    </a>
</li>
<li class="{{Request::segment(2) == 'persetujuan' ? 'active' : ''}}">
    <a href="{{route('persetujuan.index')}}">
        <i class="fa fa-check-square"></i>
        <span>Persetujuan KRS</span>
    </a>
</li>
<li class="{{Request::segment(2) == 'nilai' ? 'active' : ''}}">
    <a href="{{route('nilai.index')}}">
        <i class="fa fa-pencil-square"></i>
        <span>Input Nilai</span>
    </a>
</li>
@endif

</ul>
</section>
</aside>

@endif