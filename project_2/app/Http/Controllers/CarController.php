<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
 public function ShowCarTable(){
   // $data = DB::table('samochod')->get();
    $data = DB::table('samochod')->paginate(3);
    return view('samochod', ['data'=> $data] );

 }
 public function addCar(request $req)
{
$brand= $req->input('brand');
$model= $req->input('model');
$capacity= $req->input('capacity');

DB::insert('insert into car (brand,model,capacity) value(?,?,?)',[$brand,$model,$capacity]);
}

}
