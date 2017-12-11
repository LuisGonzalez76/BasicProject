<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Facility;

class FacilityController extends Controller
{
    //

    public function all(){

        //$facilities = DB::table('Facility')->get();

        $facilities = Facility::all();

        return $facilities;


    }

    public function create(Request $request){

        //dd($request->toArray());
       // $facility = new Facility();
       // $facility = $request->all();
        //dd($facility);
        //$facility->save();
        //dd($facility);

        //DB::table('facilities')->insert($facility);

        //return $facility;*/

        return Facility::create([
            'building' =>$request['building'],
            'space' => $request['space'],
            'facility_department_code' => $request['facility_department_code'],
        ]);

        return response() -> json(['message' => 'The facility has been created!'], 200);


    }
}
