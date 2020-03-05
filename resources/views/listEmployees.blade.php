<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<h2>List Employees</h2>
<table class="table table-hover">
	<tr>
		<th>Nama Employees</th>
		<th>Nama Perusahaan</th>
		<th>Nama Email</th>
		<th>Ubah profil employees</th>
		<th>Hapus profil employees</th>
	</tr>
	@foreach ($employees as $e)
	<tr>
		<td>{{ $e->nama_employees }}</td>
		<td>{{ $e->name_company }}</td>
		<td>{{ $e->email_employees }}</td>
		<td><a href="updateEmployees/{{$e->id_employees}}">Update profil</a></td>
		<td><a href="hapusEmployees/{{$e->id_employees}}">Hapus profil</a></td>
	</tr>
	@endforeach
	
	
	{{ $employees->links() }}