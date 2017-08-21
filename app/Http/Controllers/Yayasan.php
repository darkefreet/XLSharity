<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

use App\Http\Controllers\Controller;
use App\Model\User;
use DB;

class Yayasan extends Controller
{
    public function index(){

    }

    public function create(){
    	
    }
    public function get($id = null){
    	$users = new User();
    	if($id==null){
    		$data = $users
            ->join('kategori', 'kategori.id', '=', 'users.kategori')
            ->select('users.*','kategori.name as kategori_name')
            ->limit(6)
            ->get();
    	}else{
    		$data = $users->where('id',$id)->first();	
    	}		
		return Response::json(array(
	        'data' => $data,
	        'status_code' => 200
	    ));
    }

    public function getByKategori($id){
    	$users = new User();
    	$data = $users->where('kategori',$id)->get();
    	return Response::json(array(
	        'data' => $data,
	        'status_code' => 200
	    ));	
    }

 

}
