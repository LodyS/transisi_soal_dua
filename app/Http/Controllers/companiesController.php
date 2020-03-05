<?php

namespace App\Http\Controllers;
use DB;
use App\companies;
use Illuminate\Http\Request;

class companiesController extends Controller
{
    public function inputCompanies (){
		
		return view ('inputCompany');
	}
	
	public function prosesTambahCompany (Request $request){
		
		$tambahLogo = $request->file('logo');
		$logoBaru  = rand() . '.' . $tambahLogo->getClientOriginalExtension();
		$tambahLogo->move(public_path('storage/app/Company'), $logoBaru);
		
		
	    $tambahCompany = new companies;
		
		$tambahCompany->nama_company    = $request->nama_company;
		$tambahCompany->email_company   = $request->email_company;
		$tambahCompany->logo			= $logoBaru;
		$tambahCompany->save();
		
			return "Data berhasil disimpan";
	}
	
	public function listCompany (){
		
		$companies = DB::table('companies')->paginate(5);
		
		return view ('listCompany', ['companies'=>$companies]);
	}
	
	public function updateCompany (Request $request){
		
		$companies = companies::where('id', $request->id)->get();
		
		return view('updateCompany', ['companies'=>$companies]);
	}
	
	public function updateCompanyProses (Request $request){
		
	$tambahLogo = $request->file('logo');
    $logoBaru  = rand() . '.' . $tambahLogo->getClientOriginalExtension();
    $tambahLogo->move(public_path('storage/app/Company'), $logoBaru);
    
    DB::table('companies')->where('id', $request->id)->update([
        'nama_company'   => $request->nama_company,
        'email_company'  => $request->email_company,
        'logo'           => $logoBaru]);
    
       return "Data berhasil di update";
	}
	
	public function hapusCompany (Request $request){
		
		$companies = companies::where('id', $request->id)->get();
		
		return view ('hapusCompany', ['companies'=>$companies]);
	}
	
	public function prosesHapusCompany (Request $request){
		
		$company = DB::table('companies')->where('id', '=', $request->id)->delete();
		
		
		
		return "Data berhasil dihapus";
		
		
	}
	
}
