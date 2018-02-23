<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;




class LogoutController extends Controller
{

    public function index(Request $request)

    {

    	$request->session()->flush();

    	// other task

    	return redirect()->route('login.index');

    }

}
