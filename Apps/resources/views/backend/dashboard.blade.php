@extends('layouts.layout')

@section('content')
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">{{ $title }}</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i>
          </button>
      </div>
  </div>
  <div class="box-body">
      <p style="-webkit-font-smoothing: antialiased; font-family: Muli, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 1.4em; color: rgb(37, 36, 34); font-variant-ligatures: normal; orphans: 2; widows: 2;">Selamat Datang di Sistem Informasi KRS Online STIMIK AKAKOM Yogyakarta. Setelah melakukan login pertama kali ke Sistem&nbsp;Informasi KRS&nbsp;Online ini, harap segera melakukan pergantian password pada menu&nbsp;Pengaturan Akun, guna menanggulangi hal-hal yang tidak diinginkan.</p>
      <ul>
        <li>Persetujuan Kartu Rencana Studi KRS
          <br>Untuk Melakukan Persetujuan KRS Pada Mahasiswa Yang Dibimbing
      </li>
      <li>Daftar Mahasiswa Bimbingan
          <br>Melihat daftar mahasiswa yang masuk dalam bimbingan Dosen PA
      </li>
      <li>Nilai Mahasiswa
          <br>Mengisi nilai mahasiswa yang dibimbing
      </li>
      <li>Log Out
          <br>Keluar dari sistem perwalian online
      </li>
  </ul>
</div>
<!-- /.box-body -->
</div>
@endsection