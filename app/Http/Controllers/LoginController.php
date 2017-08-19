<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

class LoginController extends Controller
{
   
    public function create()
    {
        return view('admin.login');
    }

    public function logout(){
        session()->flush();
        return redirect("/");
    }

    public function loggingin(Request $request){

        $check = DB::select('select u.resident_id, concat(r.resident_fname," ",r.resident_lname) as name, r.resident_image from tbl_residentuser u join tbl_resident r on r.resident_id = u.resident_id where u.resident_username = "'.$request->username.'" and u.resident_password = SHA1("'.$request->password.'") and r.resident_exists = 1');

        if(!empty($check[0]->resident_id)){
            
            session(['name'=> $check[0]->name]);
            session(['image'=> $check[0]->resident_image]);
            session(['resident'=> $check[0]->resident_id]);
            return response("success");
            
        }
        else{
            return response("Incorrect username or password");
        }
    }

    public function checkuser(){
        if(!session()->has('resident')){
            return redirect()->action('IncidentController@create');
        }
        else{
            return redirect()->action('LoginController@signin');
        }

    }

    public function signin(){
        return redirect()->action('IncidentController@create');
    }
}
