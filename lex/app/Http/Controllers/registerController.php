<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 

        $validator = Validator::make($request->all(),
        [
             'name'=> 'required|regex:^[a-zA-z\s]+$^',
             'boardingname'=> 'required|regex:^[a-zA-z\s]+$^',
             'dropingname' => 'required|regex:^[a-zA-z\s]+$^',
             'sourcelist' => 'required|regex:^[a-zA-z\s]+$^',

             'mobile'=> 'required|regex:/^\+?[^a-zA-Z]{5,}$/',
             'nid'=> 'required|regex:/^\+?[^a-zA-Z]{5,}$/',           
             'paymentamount'=> 'required|regex:/^\+?[^a-zA-Z]{5,}$/',
        ]);





        if($validator->fails())

        {

            //$request->session()->flash()

            return redirect()   

                ->back()

                ->with('errors', $validator->errors())

                ->withInput();

        }
        $user = new User();
        $acc->accNo = $request->accountNo;
        $acc->accName = $request->accountName;
        $acc->balance = $request->initialBalance;
        
        date_default_timezone_set('Asia/Dhaka');
        $acc->lastTransaction = date('Y-m-d H:i:s');
        $acc->save();
        //return redirect()->route('account.index');
        return redirect()->route('account.show', $acc->accId);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
