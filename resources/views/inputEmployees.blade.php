<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<h3>Tambah Companies</h3>
<form action="{{ url('prosesTambahEmployees')}}" method="post" enctype="multipart/form-data">
      {{ @csrf_field() }}
         
    <div class="col-sm-3">
        Nama : <input type="text" class="form-control" name="nama_employees"><br/>
    </div>

    <div class="col-sm-3">
					Nama Company : <select class="form-control" name="name_company">
            @foreach ($companies as $c)
                <option value="{{ $c->nama_company }}">{{ $c->nama_company }}</value><br/>
            @endforeach
        </select>
     </div>


     <div class="col-sm-3">
       Email   : <input type="email" class="form-control" name="email_employees"></br><br/>
     </div>

     <div class="col-sm-3">
            <button type="submit" class="btn btn-danger" value="Tambah">Simpan</button>
     </div>
</form>  