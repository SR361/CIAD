<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Hospital;
use App\Models\Trainee;
use App\Models\University;
use App\Mail\SingupMail;

class AllauthController extends Controller
{
    public function signinForm()
    {
        return view('frontend.signinall');
    }

    public function signupForm()
    {
        return view('frontend.signup');
    }

    public function signupSubmit(Request $request){
        $request->validate([
            'role_type'     => 'required|in:trainee,university,hospital',
            'name'          => 'required|min:3|max:255',
            'email'         => 'required|email|unique:users',
        ]);

        if($request->role_type == 'trainee'){
            $request->validate([
                'university'    => 'required|min:3|max:255',
                'rollnumber'    => 'required|min:3|max:255',
                'dob'           => 'required|date'
            ]);
            $role = 1;
        }elseif($request->role_type == 'university'){
            $request->validate([
                'university_name'=> 'required|min:3|max:255',
                'university_id'  => 'required|min:3|max:255',
                'job_title'     => 'required|min:3|max:255'
            ]);
            $role = 2;
        }elseif($request->role_type == 'hospital'){
            $request->validate([
                'hospital_name'     => 'required|min:3|max:255',
                'hospital_id'       => 'required|min:3|max:255',
                'hospital_job_title'=> 'required|min:3|max:255'
            ]);
            $role = 3;
        }

        // Generate random password for user registration.
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()';
        $password = Str::random(8, $characters);

        $user = User::create([
            'name'  => $request->name,
            'email' => $request->email,
            'role'  => $role,
            'password' => Hash::make($password),
        ]);

        if($request->role_type == 'trainee'){
            $trainee = Trainee::create([
                'user_id'       => $user->id,
                'dob'           => $request->dob,
                'university'    => $request->university,
                'roll_number'   => $request->rollnumber
            ]);
            User::where('id',$user->id)->update(['trainee_id' => $trainee->id]);
        }else if($request->role_type == 'university'){
            $university = University::create([
                'user_id'               => $user->id,
                'university_name'       => $request->university_name,
                'job_title'             => $request->job_title,
                'university_id_number'  => $request->university_id,
            ]);
            User::where('id',$user->id)->update(['university_id' => $university->id]);
        }else if($request->role_type == 'hospital'){
            $hospital = Hospital::create([
                'user_id'           => $user->id,
                'hospital_name'     => $request->hospital_name,
                'job_title'         => $request->hospital_job_title,
                'hospital_id_number'=> $request->hospital_id
            ]);

            User::where('id',$user->id)->update(['hospital_id' => $hospital->id]);
        }
        $data = array('name' => $request->name, 'email' => $request->email, 'password' => $password);
        Mail::to($request->email)->send(new SingupMail($data));

        return redirect(route('signpage'))->with('success','Account created,please check email, password send to email');
    }

    public function singinSubmit(Request $request){
        $validator = Validator::make($request->all(), [
            'email'         => 'required|email',
            'password'      => 'required',
        ]);

        $model = User::where('email', $request->email)->first();
        $validator->after(function ($validator) use ($request, $model) {
            if (isset($model)) {
                if (!Hash::check($request->password, $model->password)) {
                    $validator->errors()->add('password', 'Password not match');
                }
            } else {
                $validator->errors()->add('email', 'Invalid Email');
            }
        });
        $validator->validate();

        Auth::login($model);
        // dd(Auth::user());
        switch ($model->role) {
            case 0:
                return redirect()->route('super.admin.dashboard');
                break;
            case 1:
                return redirect()->route('trainee.dashboard');
                break;
            case 2:
                return redirect()->route('university.dashboard');
                break;
            case 3:
                return redirect()->route('hospital.dashboard');
                break;
            default:
                return redirect()->route('signpage');
                break;
        }
    }

    public function logout()
    {
        Session::flush();

        Artisan::call('route:cache');
        Artisan::call('view:cache');
        return redirect('/signin')->with('success', 'You are logged out.')->header('Cache-Control', 'no-store, no-cache, must-revalidate');
    }

    public function sendmail(){
        $name = 'Sanjay Ramdati';
        $email = 'maheshearn024@gmail.com';
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()';
        $password = Str::random(8, $characters);
        $data = array('name' => $name, 'email' => $email, 'password' => $password);
        Mail::to($email)->send(new SingupMail($data));

        dd('Email sent successfully!');
        dd(1);
    }

}
