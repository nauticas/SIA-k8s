@extends('layouts.layout')

@section('content')
<div class="col-md-12">
	<div class="box">
		<div class="box-header with-border">
			<h4 class="">{{$title}}</h4>
			<p class="category"></p>
		</div>
		<div class="content">
			<form action="{{route('ruang.store')}}" method="POST">
				{{ csrf_field() }}
				<div class="row">
					<div class="col-md-10">
						<div class="form-group @if($errors->has('nama_ruang')) has-error @endif">
							<label>Nama ruang</label>
							<input type="text" class="form-control border-input" value="{{old('nama_ruang')}}" name="nama_ruang">
							<span id="helpBlock2" class="help-block">{{$errors->first('nama_ruang')}}</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<a href="{{ route('ruang.index') }}" class="btn btn-warning">Cancel</a>
						<input type="submit" class="btn btn-success">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection