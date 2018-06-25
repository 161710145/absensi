@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			  <div class="panel-heading">Edit Data Absensi 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('absensi.update',$b->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('tgl_absen') ? ' has-error' : '' }}">
			  			<label class="control-label">tanggal absensi</label>	
			  			<input type="date" name="tgl_absen" class="form-control" value="{{ $b->tgl_absen }}" required>
			  			@if ($errors->has('tgl_absen'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_absen') }}</strong>
                            </span>
                        @endif
			  		</div>

			  	
			  		<div class="form-group {{ $errors->has('id_siswa') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama siswa</label>	
			  			<select name="id_siswa" class="form-control js-example-basic-multiple">
			  				@foreach($s as $data)
			  				<option value="{{ $data->id }}" {{ $selecteds== $data->id ? 'selected="selected"' : '' }} >{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_siswa'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_siswa') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	<div class="form-group {{ $errors->has('id_keterangan') ? ' has-error' : '' }}">
			  			<label class="control-label">Keterangan</label>	
			  			<br>	
			  			<input type="radio" name="keterangan" value="Sakit">Sakit&nbsp;&nbsp;
			  			<input type="radio" name="keterangan" value="Izin">Izin&nbsp;&nbsp;
			  			<input type="radio" name="keterangan" value="Alpa">Alpa&nbsp;&nbsp;
			  			@if ($errors->has('id_keterangan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_keterangan') }}</strong>
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
