<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\TblIncident;

class IncidentController extends Controller
{
   
    public function create()
    {
      $street = DB::select('select s.street_name, s.street_id, a.area_id from tbl_street s join tbl_area a on a.area_id = s.street_area where a.area_exists = 1 and s.street_exists = 1;');

        $areas = DB::select('select area_id, area_name from tbl_area where area_exists = 1');

        $incidentcats = DB::select('select incidentcat_id, incidentcat_name from tbl_incidentcat where incidentcat_exists = 1');

        return view('admin.incident')->with(array('streets'=>$street,'areas'=>$areas, 'incidentcats'=>$incidentcats));
    }

    public function storeIncident(Request $request)
    {
        $address = $request->street_name.",Payatas,Quezon City,Philippines"; // Google HQ
        $prepAddr = str_replace(' ','+',$address);
        $geocode=file_get_contents('https://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&key=AIzaSyAf9S1qa_pd7y1WTlfK86ROGs05RXM3Qaw');
        $output= json_decode($geocode);
        if($output->status=="OK"){
            $latitude = $output->results[0]->geometry->location->lat;
            $longitude = $output->results[0]->geometry->location->lng;
        }
        else{
            $latitude = null;
            $longitude = null;
        }


        $inc = new TblIncident;

        $inc->incident_datetime = $request->datetime;
        $inc->incident_street = $request->street_id;
        $inc->incident_statement = $request->desc;
        $inc->incident_lat = $latitude;
        $inc->incident_long = $longitude;
        $inc->incident_status = "Pending";
        $inc->incident_cat = $request->cat;
        $inc->incident_exists = 1;

        $inc->save();

        return response("success");
    }

}
