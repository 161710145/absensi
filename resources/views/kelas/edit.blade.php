@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			  <div class="panel-heading">Edit Data Kelas 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('kelas.update',$a->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('kelas') ? ' has-error' : '' }}">
			  			<label class="control-label">Kelas</label>	
			  			<input type="text" name="kelas" class="form-control" value="{{ $a->kelas }}"  required>
			  			@if ($errors->has('kelas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kelas') }}</strong>
                            </span>
                        @endif
			  		</div>


			  		<div class="form-group {{ $errors->has('wali_kelas') ? ' has-error' : '' }}">
			  			<label class="control-label">Wali Kelas</label>	
			  			<input type="text" name="wali_kelas" class="form-control" value="{{ $a->wali_kelas }}"  required>
			  			@if ($errors->has('wali_kelas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('wali_kelas') }}</strong>
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
