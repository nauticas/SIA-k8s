@extends('layouts.layout')

@section('content')
<div class="col-md-12">
	<div class="box">
		<div class="header">
			<h4 class="title">{{$title}}</h4>
			<p class="category"></p>
		</div>
		<div class="box-header with-border">
			<form action="{{route('dosen.update',$dosen->id)}}" method="POST">
				{{ csrf_field() }}
				<input type="hidden" name="_method" value="put">
				<input type="hidden" name="dosen_id" value="{{$dosen->id}}">
				<div class="row">
					<div class="col-md-5">
						<div class="form-group @if($errors->has('kode_dosen')) has-error @endif"">
							<label>Kode Dosen</label>
							<input type="text" class="form-control border-input" value="{{$dosen->kode_dosen}}" name="kode_dosen">
							<span id="helpBlock2" class="help-block">{{$errors->first('kode_dosen')}}</span>
						</div>
					</div>
					<div class="col-md-5">
						<div class="form-group @if($errors->has('nidn')) has-error @endif"">
							<label>NIDN</label>
							<input type="text" class="form-control border-input" value="{{$dosen->nidn}}" name="nidn">
							<span id="helpBlock2" class="help-block">{{$errors->first('nidn')}}</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10">
						<div class="form-group @if($errors->has('nama_dosen')) has-error @endif"">
							<label>Nama Dosen</label>
							<input type="text" class="form-control border-input" value="{{$dosen->nama_dosen}}" name="nama_dosen">
							<span id="helpBlock2" class="help-block">{{$errors->first('nama_dosen')}}</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<a href="{{ route('dosen.index') }}" class="btn btn-warning">Cancel</a>
						<input type="submit" class="btn btn-success">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection