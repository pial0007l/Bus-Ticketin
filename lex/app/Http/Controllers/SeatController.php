<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Seat;

class SeatController extends Controller
{
    public function index()
    {
    	return view('seat.index');
    }

    public function create($id)
    {

////////////////////A//////////////////////
    	if (isset($_POST['a1'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="A1";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="A1";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}
		if (isset($_POST['a2'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="A2";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="A2";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}
		if (isset($_POST['a3'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="A3";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="A3";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}
		if (isset($_POST['a4'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="A4";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="A4";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}

//////////////////////B////////////////////////
		if (isset($_POST['b1'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="B1";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="B1";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}

		if (isset($_POST['b2'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="B2";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="B2";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}

		if (isset($_POST['b3'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="B3";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="B3";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}

		if (isset($_POST['b4'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="B4";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="B4";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}
/////////////////////C///////////////////////
		if (isset($_POST['c1'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="C1";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="C1";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}

		if (isset($_POST['c2'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="C2";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="C2";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}

		if (isset($_POST['c3'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="C3";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="C3";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}

		if (isset($_POST['c4'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="C4";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="C4";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}
///////////////////D///////////////////////////////
			if (isset($_POST['d1'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="D1";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="D1";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}

		if (isset($_POST['d2'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="D2";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="D2";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}

		if (isset($_POST['d3'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="D3";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="D3";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}

		if (isset($_POST['d4'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="D4";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="D4";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}
//////////////////////E/////////////////////////
			if (isset($_POST['e1'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="E1";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="E1";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}

		if (isset($_POST['e2'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="E2";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="E2";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}

		if (isset($_POST['e3'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="E3";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="E3";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}

		if (isset($_POST['e4'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="E4";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="E4";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}
//////////////////////F/////////////////////////
			if (isset($_POST['f1'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="F1";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="F1";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}

		if (isset($_POST['f2'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="F2";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="F2";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}

		if (isset($_POST['f3'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="F3";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="F3";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}

		if (isset($_POST['f4'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="F4";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="F4";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}
//////////////////////G/////////////////////////
			if (isset($_POST['g1'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="G1";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="G1";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}

		if (isset($_POST['g2'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="G2";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="G2";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}

		if (isset($_POST['g3'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="G3";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="G3";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}

		if (isset($_POST['g4'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="G4";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="G4";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}
//////////////////////H/////////////////////////
			if (isset($_POST['h1'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="H1";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="H1";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}

		if (isset($_POST['h2'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="H2";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="H2";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}

		if (isset($_POST['h3'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="H3";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="H3";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}

		if (isset($_POST['h4'])) {
    		//echo $id;
    		$seat = new Seat();
    		$seat->seat_name="H4";
    		$seat->bus_id=$id;
    		$seat->status=0;
    		$seat->save();

		}
		else{
			$seat = new Seat();
			$seat->seat_name="H4";
    		$seat->bus_id=$id;
    		$seat->status=1;
			$seat->save();
		}
    	return view('seat.index');
    }

}
