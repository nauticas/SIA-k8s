@extends('layouts.layout')

@section('content')
<div class="col-md-12">
    <div class="box">
        <div class="box-header with-border">
            <h4 class="">{{$title}}</h4>
            <p class="category"></p>
        </div>
        <div class="content table-responsive table-full-width">

            @if(count($mahasiswa)>0)
            <table class="table table-striped">
                <thead>
                    <th>NIM</th>
                    <th>Nama mahasiswa</th>
                    <th>Jurusan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    @foreach($mahasiswa as $mhs)
                    
                    <tr>
                        <td>{{$mhs->nim}}</td>
                        <td>{{$mhs->nama_mahasiswa}}</td>
                        <td>{{$mhs->jurusan}}</td>
                        <td>{{$mhs->krs->first() ? $mhs->krs->first()->status : 'Belum KRS'}}</td>
                        <td>
                            @if($mhs->krs->first())
                            <a href="{{route('nilai.edit',$mhs->krs->first()->id)}}" class="btn btn-success">Masukkan Nilai</a>
                            @endif
                        </td>
                    </tr>
                </form>
                @endforeach
            </tbody>
        </table>
        @else
        <em class="text-info">Belum ada data!</em>
        @endif
    </div>
</div>
</div>
@endsection