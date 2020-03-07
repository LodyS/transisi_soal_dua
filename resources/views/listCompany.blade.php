@auth
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<table class="table table-hover">
	<tr>
		<th>Logo</th>
		<th>Nama Perusahaan</th>
		<th>Nama Email</th>
		<th>Ubah profil perusahaan</th>
		<th>Hapus profil perusahaan</th>
	</tr>
	@foreach ($companies as $c)
	<tr>
		<td><img src="{{ url('storage/app/Company/'.$c->logo) }}" width="100"></td>
		<td>{{ $c->nama_company }}</td>
		<td>{{ $c->email_company }}</td>
		<td><a href="updateCompany/{{$c->id}}">Update profil</a></td>
		<td><a href="hapusCompany/{{$c->id}}">Hapus profil</a></td>
	</tr>
	@endforeach
		
		
		{{ $companies->links() }}
        
  @endauth
	

@guest 
Anda harus login
@endguest 
