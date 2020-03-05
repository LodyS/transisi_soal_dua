<?php

namespace App\Http\Controllers;
use DB;
use App\employees;
use App\companies;
use Illuminate\Http\Request;

class employeesController extends Controller
{
    public function inputEmployees(){
		
		$companies   = companies::all();
		return view('inputEmployees', ['companies'=>$companies]);
	}
	
	public function prosesTambahEmployees(Request $request){
		
		$tambahEmployees = new employees;
		
		$tambahEmployees->nama_employees  = $request->nama_employees;
		$tambahEmployees->name_company    = $request->name_company;
		$tambahEmployees->email_employees = $request->email_employees;
		$tambahEmployees->save();
		
		return "Data berhasil disimpan";
	}
	
	public function listEmployees (){
		
		$employees = DB::table('employees')->paginate(5);
		
		return view ('listEmployees', ['employees'=>$employees]);
	}
	
	public function updateEmployees (Request $request){
		
		$employees   = employees::where('id_employees', $request->id_employees)->get();
		$companies   = companies::all();	

			return view ('updateEmployees', ['employees'=>$employees], ['companies'=>$companies]);
		}
	public function updateEmployeesProses (Request $request){
		
		DB::table('employees')->where('id_employees', $request->id_employees)->update([
        'nama_employees'     => $request->nama_employees,
        'name_company'       => $request->name_company,
        'email_employees'    => $request->email_employees]);
		
		return "Data berhasil di update";
	}
	
	public function hapusEmployees (Request $request){
		
		$employees = employees::where('id_employees', $request->id_employees)->get();
		
		return view ('hapusEmployees', ['employees'=>$employees]);
	}
	
	public function prosesHapusEmployees (Request $request){
		
		$employeed = DB::table('employees')->where('id_employees', '=', $request->id_employees)->delete();
		
		$employees = DB::table('employees')->paginate(5);
		
		return view ('listEmployees', ['employees'=>$employees]);
		
		
	}
}
