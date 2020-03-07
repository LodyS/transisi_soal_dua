@auth
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <h3>Edit makanan</h3>
        <form action="{{ url('prosesHapusEmployees')}}" method="POST">
            {{ @csrf_field() }}
        @foreach ($employees as $e)
                <input type="hidden" class="form-control" name="id_employees" value="{{$e->id_employees}}">
           

            Apakah Anda yaking ingin menghapus data karyawan bernama {{ $e->nama_employees}}


            <div class="col-sm-3">   
                <button type="submit" class="btn btn-danger" value="Edit">Hapus</button>
            </div>
        </form>
    @endforeach 
    
    @endauth
	

@guest 
Anda harus login
@endguest 
