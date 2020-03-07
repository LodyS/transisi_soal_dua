@auth
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<h3>Tambah Companies</h3>
<form action="{{ url('prosesTambahCompany')}}" method="post" enctype="multipart/form-data">
      {{ @csrf_field() }}
         
    <div class="col-sm-3">
        Nama : <input type="text" class="form-control" name="nama_company"><br/>
    </div>

    <div class="col-sm-3">
        Email : <input type="email" class="form-control" name="email_company"><br/>
    </div>


     <div class="col-sm-3">
       Logo    : <input type="file" name="logo"></br><br/>
     </div>

     <div class="col-sm-3">
            <button type="submit" class="btn btn-danger" value="Tambah">Simpan</button>
     </div>
</form>       

@endauth
	

@guest 
Anda harus login
@endguest 
