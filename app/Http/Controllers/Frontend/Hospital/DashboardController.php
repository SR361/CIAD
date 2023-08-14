<?php

namespace App\Http\Controllers\Frontend\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('frontend.hospital.dashboard');
    }
}
