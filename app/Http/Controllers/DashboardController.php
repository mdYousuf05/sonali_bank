<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Foreigncomplaint;
use App\Models\Nativecomplaint;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('native_tourist'))
        {
            return view('touristdashboard');
        }
        elseif(Auth::user()->hasRole('foreign_tourist'))
        {
            return view('ftouristdashboard');
        }
        elseif(Auth::user()->hasRole('tourist_police_si'))
        {
            return view('tpsidashboard');
        }
        elseif(Auth::user()->hasRole('tourist_police'))
        {
            return view('tpdashboard');
        }
        elseif(Auth::user()->hasRole('admin'))
        {
            return view('admindashboard');
        }
    }

    public function myprofile()
    {
        return view('myprofile');
    }

    public function myprofileftourist()
    {
        return view('myprofileftourist');
    }

    public function complaints(){
        return view('complaints');
    }

    public function complaintss(){
        return view('complaintss');
    }

    public function feedback(){
        return view('feedback');
    }

    public function ftfeedback(){
        return view('ftfeedback');
    }

    public function tickets(){
        $data_two = Nativecomplaint::all();
        return view('tickets',['nativecomplaints'=>$data_two]);
    }

    public function ftickets(){
        $data = Foreigncomplaint::all();
        return view('ftickets',['foreigncomplaints'=>$data]);
    }
}
