<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\TblResident;
use App\Models\TblResidentuser;

class RegisterController extends Controller
{
    
    public function create()
    {
        return view('admin.register');
    }

   public function registerID(Request $request){

   		$resident = DB::select('select resident_id from tbl_resident where resident_exists = 1 and resident_id = "'.$request->resid.'"');

   		if(!empty($resident[0]->resident_id)){

   			$registered = DB::select('select resident_id from tbl_residentuser where resident_id = "'.$request->resid.'"');

   			if(!empty($registered[0]->resident_id)){
   				return response("Resident Already Registered");
   			}
   			else{
   				$registered1 = DB::select('select resident_id from tbl_residentuser where resident_username = "'.$request->username.'"');

   				if(empty($registered1[0]->resident_id)){

   					$registration = new TblResidentuser;

   					$registration->resident_id = $request->resid;
   					$registration->resident_username = $request->username;
   					$registration->resident_password = SHA1($request->password);
   					$registration->save();

   					return response("success");
   				}
   				else{
   					return response("Username Already Used");
   				}
   			}
   		}
   		else{
   			return response("Resident not found");
   		}

   }

   public function registerDetails(Request $request){

   		$resident = DB::select('select resident_id from tbl_resident where lower(resident_fname) = lower("'.$request->fname.'") and lower(resident_lname) = lower("'.$request->lname.'") and resident_bdate = "'.$request->bdate.'" and resident_contact = "'.$request->contact.'" and resident_exists = 1');

   		if(!empty($resident[0]->resident_id)){

   			$registered = DB::select('select resident_id from tbl_residentuser where resident_id = "'.$resident[0]->resident_id.'"');

   			if(!empty($registered[0]->resident_id)){
   				return response("Resident Already Registered");
   			}
   			else{
   				$registered1 = DB::select('select resident_id from tbl_residentuser where resident_username = "'.$request->username.'"');

   				if(empty($registered1[0]->resident_id)){

   					$registration = new TblResidentuser;

   					$registration->resident_id = $resident[0]->resident_id;
   					$registration->resident_username = $request->username;
   					$registration->resident_password = SHA1($request->password);
   					$registration->save();

   					return response("success");
   				}
   				else{
   					return response("Username Already Used");
   				}
   			}

   		}
   		else{
   			return response("Resident not found");
   		}
    
   }
}
