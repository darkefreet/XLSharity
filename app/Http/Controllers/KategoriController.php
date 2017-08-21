<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

use App\Http\Controllers\Controller;
use App\Model\Kategori;

class KategoriController extends Controller
{
    public function index(){

    }

    public function create(){
    	
    }

    public function get($id = null){
    	$kategori = new Kategori();
    	if($id==null){
    		$data = $data = $kategori->all();;
    	}else{
    		$data = $kategori->where('id',$id)->first();	
    	}		
		return Response::json(array(
	        'data' => $data,
	        'status_code' => 200
	    ));
    }
}
