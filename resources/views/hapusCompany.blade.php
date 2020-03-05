<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <h3>Hapus Company</h3>
        <form action="{{ url('prosesHapusCompany')}}" method="POST">
            {{ @csrf_field() }}
        @foreach ($companies as $c)
                <input type="hidden" class="form-control" name="id" value="{{$c->id}}">
           

            Apakah Anda yaking ingin menghapus data karyawan bernama {{ $c->nama_company}}


            <div class="col-sm-3">   
                <button type="submit" class="btn btn-danger" value="Edit">Hapus</button>
            </div>
        </form>
    @endforeach 