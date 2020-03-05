@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <table class="table table-hover">
	<tr>
		<th>Input Company</th>
		<th>Input Employees</th>
		<th>List Company</th>
		<th>List Employees</th>
	</tr>
		<tr>
		    
			<td><a href="inputCompany">Input Company</a></td>
			<td><a href="inputEmployees">Input Employees</a></td>
			<td><a href="listCompany">List Company</th>
			<td><a href="listEmployees">List Employees</th>
		</tr>
<hr/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
