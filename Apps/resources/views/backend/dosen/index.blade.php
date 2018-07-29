@extends('layouts.layout')

@section('content')
<div class="col-md-12">
    <div class="box">
        <div class="box-header with-border">
            <h4 class="title">{{$title}}</h4>
            <p class="category"></p>
        </div>
        
        <div class="content table-responsive table-full-width">
            <table class="table table-striped table-hover ">
                <thead>
                    <th>Kode Dosen</th>
                    <th>NIDN</th>
                    <th>Nama Dosen</th>
                    <th>Aksi</th>
                    <th><a href="{{route('dosen.create')}}" class="btn btn-success"><span class="fa fa-plus"></span> Tambah Dosen</a></th>
                </thead>
                <tbody>
                    @foreach($dosen as $dos)
                    <form action="{{route('dosen.destroy',$dos->id)}}" method="post"  class="form-inline">
                        <tr>
                            <td>{{$dos->kode_dosen}}</td>
                            <td>{{$dos->nidn}}</td>
                            <td>{{$dos->nama_dosen}}</td>
                            <td colspan="2">
                                <a href="{{route('dosen.matakuliah',$dos->id)}}" class="btn btn-info">MK</a>
                                <a href="{{route('dosen.edit',$dos->id)}}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="delete" >
                                <button type="submit" class="btn btn-danger"><i class="fa fa-close"></i></a>
                            </td>
                        </tr>
                    </form>
                    @endforeach
                </tbody>
            </table>
            {{$dosen->links()}}
        </div>
        
    </div>
</div>
@endsection