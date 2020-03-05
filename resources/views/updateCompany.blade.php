<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <h3>Edit Company</h3>
        <form action="{{ url('updateCompanyProses')}}" method="POST" enctype="multipart/form-data">
            {{ @csrf_field() }}
        @foreach ($companies as $c)
                <input type="hidden" class="form-control" name="id" value="{{$c->id}}">
            <div class="col-sm-3">
                <input type="file" name="logo"><br/></br>
            </div>

            <div class="col-sm-3">
                <input type="text" class="form-control" name="nama_company" value="{{ $c->nama_company}}"><br/>
            </div>

            <div class="col-sm-3">
               <input type="text" class="form-control" name="email_company" value="{{ $c->email_company}}"><br/>
            </div>

            <div class="col-sm-3">   
                <button type="submit" class="btn btn-danger" value="Edit">Edit</button>
            </div>
        </form>
    @endforeach 