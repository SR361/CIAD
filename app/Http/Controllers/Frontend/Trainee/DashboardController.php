<?php

namespace App\Http\Controllers\Frontend\Trainee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('frontend.trainees.dashboard');
    }
}
