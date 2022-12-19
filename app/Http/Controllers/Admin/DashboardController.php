<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Admin\Vehicle;
use App\Models\Owner;
use App\Models\Admin\Certificate;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     */
    public function index()
    {


        $userid = Auth::id();
        $user = Auth::user()->voms_id;
        //  dd($user);

        $userstate = DB::table('users')->where('id', $user)-> first();
        // $userstate = DB::table('users')->where('id', $user)-> first();


        //   dd($userstate);
        // $sumvehicles = Vehicle::where('registration_state_id',$userstate->state_id)->count();
        // $sumcertificates = Certificate::where('issue_state_id',$userstate->state_id)->count();
        // $awaitinglicence = Certificate::where('issue_state_id',$userstate->state_id)->wherelicense_plate("Not Yet Assigned")->count();
        //   dd($sumvehicles);


        $sumvehicles = Vehicle::where('owner_voms_id', $user)->count();
        $sumcertificates = Certificate::where('certificate_owner_id', $user)->count();
        // $awaitinglicence = Certificate::where([
        //     ['certificate_owner_id', '=', $user]
        //                                 ['licence_plate' ===! "Not Yet Assigned"]
        //                                 ])
        // ->count();









          return view('admin.dashboard.all', compact('sumvehicles', 'sumcertificates'));
    }




}
