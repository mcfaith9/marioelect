<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Voter;
use Validator;
class MarioController extends Controller
{
    public function addVoter(Request $request){
    	 $validator = Validator::make($request->all(), [            
    	         'lastname'   => 'required',
    	         'firstname'   => 'required',
    	         'middlename'   => 'required',
    	         'address' => 'required',
    	         'precinct' => 'required',
    	         'legend'  => 'required',
    	     ]);
    	     
    	  if($validator->passes()) {    	  	
    	  	$add          = new Voter;
    	  	$add->lname   = $request->lastname;
    	  	$add->fname   = $request->firstname;
    	  	$add->mname   = $request->middlename;
    	  	$add->address = $request->address;
    	  	$add->precnum = $request->precinct;
    	  	$add->legend  = $request->legend;
    	  	$add->save();
    	  } 
    	  else {
    	  	$message = 'error';
    	  	return response()->json(['error'=>$message]);
    	  }
    }
}
