<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Bus;
use App\Seat;
use Validator;
use App\Passenger;

class HomeController extends Controller
{
	public function index()
    {
    	return view('home.home');
    }
    public function view(Request $req)
    {
    	$bus = DB::table('buses')
            ->where('starting_counter',$req->sourcelist)
            ->where('ending_counter',$req->destinationlist)
            ->where('departuer_date',$req->departureDate)
            ->where('coach_type',$req->typelist)
            ->get();
    	//return $bus;

        return view('home.show')
    		->with('bus', $bus);
    }
    public function seat($id)
    {
        $seat = DB::table('seats')
            ->where('bus_id',$id)
            ->where('status',0)
            ->get();
        //return $bus;

        return view('home.buy')
            ->with('seat', $seat);
    }

    public function ticket(Request $req,$id){

       /* $validator = Validator::make($request->all(),
        [
             'name'=> 'required|regex:^[a-zA-z\s]+$^',
             'boardingpoint'=> 'required|regex:^[a-zA-z\s]+$^',
             'dropingpoint' => 'required|regex:^[a-zA-z\s]+$^',
             'nationality' => 'required|regex:^[a-zA-z\s]+$^',

             'mobile'=> 'required|regex:/^\+?[^a-zA-Z]{5,}$/',
             'nid'=> 'required|regex:/^\+?[^a-zA-Z]{5,}$/',           
             'paymentammount'=> 'required|regex:/^\+?[^a-zA-Z]{5,}$/',
        ]);





        if($validator->fails())

        {

            //$request->session()->flash()

            return redirect()   

                ->back()

                ->with('errors', $validator->errors())

                ->withInput();

        }*/

        $pas=new Passenger();
        $pas->Passenger_name =$req->name;
        $pas->Mobile=$req->mobile;
        $pas->Email=$req->email;
        $pas->Age=$req->age;
        $pas->Gender=$req->gender;
        $pas->Address=$req->address;
        $pas->nid=$req->nid;
        $pas->Nationality=$req->nationality;
        $pas->Payment_method=$req->paymentmethod;
        $pas->Boarding_point=$req->boardingpoint;
        $pas->Droping_point=$req->dropingpoint;
        $pas->paymentammount=$req->paymentammount;
        $pas->Bus_id=$id;
        $pas->save();

       $pid=$pas->id;

        $seat = DB::table('seats')
            ->where('bus_id',$id)
            ->where('status',0)
            ->get();

    
        foreach($seat as $se){
            if (isset($_POST[$se->seat_name])) {
            
            $see=Seat::find($se->id);
            $see->seat_name=$se->seat_name;
            $see->bus_id=$id;
            $see->status=1;
            $see->passenger_id=$pid;
            $see->save();

            }
            
            
        }
        return redirect()->route('homepage.details' , $pid);            
    }
    public function details($id)
    {
        $pass = DB::table('passengers')
            ->where('id',$id)
            ->first();

        
            $set = DB::table('seats')
            ->where('passenger_id',$id)
            ->get();

    
             return view('home.ticket')
            ->with('pass', $pass)
            ->with('set',$set);

    }
}
