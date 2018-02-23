<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Bus;
use Validator;
class BusController extends Controller
{
    public function index()
    {
    	$bus = DB::table('buses')
                        ->get();
        return view('bus.home')
            ->with('bus', $bus);
    }
    public function create()
    {
    	return view('bus.create');
    }
    public function store(Request $request)
    {


       /*  $validator = Validator::make($request->all(),
        [
            'busname'=> 'required|regex:^[a-zA-z\s]+$^',
             'routelist'=> 'required|regex:^[a-zA-z\s]+$^',
             'typelist' => 'required|regex:^[a-zA-z\s]+$^',
             
             'availableSeat'=> 'required|regex:/^\+?[^a-zA-Z]{5,}$/',
             'fare'=> 'required|regex:/^\+?[^a-zA-Z]{5,}$/',
            
             'startingCounter'=> 'required|regex:/^\+?[^a-zA-Z]{5,}$/',
             'endingCounter'=> 'required|regex:/^\+?[^a-zA-Z]{5,}$/',
        ]);





        if($validator->fails())

        {

            //$request->session()->flash()

            return redirect()   

                ->back()

                ->with('errors', $validator->errors())

                ->withInput();

        }*/



        




        $bus = new Bus();
        $bus->bus_name = $request->busName;
        $bus->route = $request->routelist;
        $bus->departuer_date= $request->departureDate;
        $bus->departure_time = $request->departureTime;
        $bus->starting_counter = $request->startingCounter;
        $bus->ending_counter = $request->endingCounter;
        $bus->fare = $request->fare;
        $bus->coach_type = $request->typelist;
        $bus->arival_Time = $request->arrivalTime;
        $bus->seat_Available = $request->availableSeat;
        $bus->save();
        return redirect()->route('seathome.index' , $bus->id);
    }
    public function edit($id){
        $bus = DB::table('buses')
            ->where('id', $id)
            ->first();

        return view('bus.edit')
            ->with('bus', $bus);
    }
    public function update(Request $request,$id)
    {
        $bus = Bus::find($id);
        $bus->bus_name = $request->busName;
        $bus->route = $request->routelist;
        $bus->departuer_date= $request->departureDate;
        $bus->departure_time = $request->departureTime;
        $bus->starting_counter = $request->startingCounter;
        $bus->ending_counter = $request->endingCounter;
        $bus->fare = $request->fare;
        $bus->coach_type = $request->typelist;
        $bus->arival_Time = $request->arrivalTime;
        $bus->seat_Available = $request->availableSeat;
        $bus->save();

        //return view('bus.home')
          //  ->with('bus', $bus);
        //echo $id;

        //return $bus->bus_name;

        $bus = DB::table('buses')
                        ->get();
        return view('bus.home')
            ->with('bus', $bus);


    }

      public function delete($id)
    {
        Bus::destroy($id);
        $bus = DB::table('buses')
                        ->get();
        return view('bus.home')
            ->with('bus', $bus);
        //$account = Account::find($id);
        /*$bus = DB::table('buses')
            ->where('Id', $id)
            ->first();

        return view('bus.delete')
            ->with('bus', $bus);*/
    }

    public function destroy(Request $request)
    {
        $id = $request->accountId;
        Account::destroy($id);
        
        return redirect()->route('account.index');
    }
	
}

