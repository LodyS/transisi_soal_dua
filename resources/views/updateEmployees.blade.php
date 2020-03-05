<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <h3>Edit employees</h3>
        <form action="{{ url('updateEmployeesProses')}}" method="POST">
            {{ @csrf_field() }}
        @foreach ($employees as $e)
                <input type="hidden" class="form-control" name="id_employees" value="{{$e->id_employees}}">
           
		  
			<div class="col-sm-3">
               <input type="text" class="form-control" name="nama_employees" value="{{ $e->nama_employees}}"><br/>
            </div>
			 
			
			  <div class="col-sm-3">
               <input type="text" class="form-control" name="email_employees" value="{{ $e->email_employees}}"><br/>
            </div>
			   @endforeach 
			
			<div class="col-sm-3">
					Nama Company : <select class="form-control" name="name_company">
            @foreach ($companies as $c)
                <option value="{{ $c->nama_company }}">{{ $c->nama_company }}</value><br/>
            @endforeach
        </select>
     </div>
			
        

            <div class="col-sm-3">   
                <button type="submit" class="btn btn-danger" value="Edit">Edit</button>
            </div>
        </form>
   