<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Seat;

class AdminController extends Controller
{
    public function index()
    {
    	$bus = DB::table('buses')
    					->get();
    	return view('admin.home')
    		->with('bus', $bus);
    	//return $bus;
    }
	
}
