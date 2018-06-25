@extends('layouts.admin')
@section('content')
<div class="container-fluid">
	<div class="row">
	<div class="col-md-12">
		<style type="text/css">
			 #myInput {
    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 10%; /* Full-width */
    font-size: 10px; /* Increase font-size */
    padding: 5px 5px 5px 5px; /* Add some padding */
    border: 5px solid #ddd; /* Add a grey border */
    margin-bottom: 10px; /* Add some space below the input */
}

#myTable {
    border-collapse: collapse; /* Collapse borders */
    width: 100%; /* Full-width */
    border: 1px solid #ddd; /* Add a grey border */
    font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
    text-align: left; /* Left-align text */
    padding: 12px; /* Add padding */
}

#myTable tr {
    /* Add a bottom border to all table rows */
    border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
    /* Add a grey background color to the table header and on hover */
    background-color: #f1f1f1;
}
		</style>


		<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");


  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
			  <div class="panel-heading">Data Kelas
			  	<div class="btn btn-warning pull-right"><a href="{{ route('kelas.create') }}">Tambah</a>
			  	</div>
			  </div>
			  Search Kelas: <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for kelas.."><br>
			  <div class="panel-body">
             <div class="table-responsive">
				  <table id="myTable">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Kelas</th>
					  <th>Wali Kelas</th>
					  <th>Nama Siswa</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($a as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->kelas }}</td>
				    	<td>{{ $data->wali_kelas }}</td>
				    	<td>@foreach($data->Siswa as $s)<li>{{ $s->nama }}@endforeach</li></td>
<td>
	<a class="zmdi zmdi-edit" data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('kelas.edit',$data->id) }}"></a>
</td>

<td>
	<form method="post" action="{{ route('kelas.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button type="submit" class="zmdi zmdi-delete" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"></button>
	</form>
</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
<div class="row">
 <div class="col-md-12">
  <div class="copyright">
   <p>Copyright © 2018 Colorlib. All rights reserved. Website by RizalPradana</a>.</p>
    </div>
    </div>
    </div>
    </div>
@endsection
