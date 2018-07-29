@extends('layouts.layout')

@section('content')
<div class="col-md-12">
    <div class="box">
        <div class="box-header with-border">
            <h4 class="">{{$title}}</h4>
            <p class="category"></p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-striped">
                <thead>
                    <th>Kode</th>
                    <th>Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Semester</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                    <th><a href="{{route('matakuliah.create')}}" class="btn btn-success"><span class="fa fa-plus"></span> Tambah mata kuliah</a></th>
                </thead>
                <tbody>
                    @foreach($matakuliah as $mk)
                    <form action="{{route('matakuliah.destroy',$mk->id)}}" method="post"  class="form-inline">
                        <tr>
                            <td>{{$mk->kd_mk}}</td>
                            <td>{{$mk->nama_mk}}</td>
                            <td>{{$mk->sks}}</td>
                            <td>{{$mk->semester}}</td>
                            <td>{{$mk->jurusan}}</td>
                            <td colspan="2">
                                <a href="{{route('matakuliah.dosen',$mk->id)}}" class="btn btn-info">Dosen</i></a>
                                <a href="{{route('matakuliah.edit',$mk->id)}}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="delete" >
                                <button type="submit" class="btn btn-danger"><i class="fa fa-close"></i></a>
                            </td>
                        </tr>
                    </form>
                    @endforeach
                </tbody>
            </table>
            {{$matakuliah->links()}}
        </div>
    </div>
</div>
@endsection