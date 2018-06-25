@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			  <div class="panel-heading">Tambah Data Siswa 
			  	<div class="btn btn-danger pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('siswa.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nis') ? ' has-error' : '' }}">
			  			<label class="control-label">NIS</label>	
			  			<input type="text" name="nis" class="form-control"  required>
			  			@if ($errors->has('nis'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nis') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
			  			<label class="control-label">Jenis kelamin</label>	
			  			<br>	
			  			<input type="radio" name="jenis_kelamin" value="laki-laki">Laki-Laki&nbsp;&nbsp;
			  			<input type="radio" name="jenis_kelamin" value="perempuan">Perempuan&nbsp;&nbsp;
			  			@if ($errors->has('jenis_kelamin'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('id_kelas') ? ' has-error' : '' }}">
			  			<label class="control-label">Kelas</label>	
			  			<select name="id_kelas" class="form-control js-example-basic-multiple">
			  				@foreach($a as $data)
			  				<option value="{{ $data->id }}">{{ $data->kelas }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_kelas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_kelas') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('no_telp') ? ' has-error' : '' }}">
			  			<label class="control-label">No telp</label>	
			  			<input type="text" name="no_telp" class="form-control"  required>
			  			@if ($errors->has('no_telp'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_telp') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-outline-primary">
			  			<i class="fa fa-save"></i>Simpan</button>
			  			<button type="reset" class="btn btn-outline-success">
									<i class="fa fa-refresh fa-spin"></i>Reset</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection