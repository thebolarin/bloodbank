<?php

namespace App\Http\Controllers\DonorAuth;

use App\Donor;

use App\DonorPro;
use App\VerifyUser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


use DB;
use Mail;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

  

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/donor/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /* public function __construct()
    {
        $this->middleware('guest');
    }*/

    protected function guard(){
        return auth()->guard('donor');
    }


    public function showRegistrationForm()
    {
        return view('donor-auth.register');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
       
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:donors',
            'password' => 'required|string|min:6|confirmed',
            
        ]);

      //  dd($data);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Donor
     */
    protected function create(array $data)
    {
        $donor = Donor::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
           
           
        ]);
        
        DonorPro::create([
            'donor_id' => $donor->id,
            'avatar' => 'donor/1.png',
            'gender' => '',
            'contact_number'=> '',
            'address'=> '',
            'blood_id'=> '',
            'status_id'=> '',
           
        ]
            );

           
            

        return $donor;
    }


   

   
   /* public function register(Request $request){
        $input = $request->all();
        $validator = $this->validator($input);

        if($validator->passes()){
            $donor = $this->create($input)->toArray();
            $donor['link'] = str_random(30);

            DB::table('verify_users')->insert(['donor_id' => $donor['id'],'token' => $donor['link']]);
            Mail::send('emails.verifyUser' , $donor, function($message) use ($donor){
                $message->to($donor['email']);
                $message->subject('bloodcare.com- Activation Code');
            });

            return redirect()->to('donor.login')->with('Success' , "We sent an activation code to your mail ,please check and verify");
            
        }

            return back()->with('Error' , $validator->errors());
    }

    public function userActivation($token){
        $check = DB::table('verify_users')->where('token' , $token)->first();
        if(!is_null($check)){
            $donor = Donor::find($check->donor_id);
            if($donor->verified == 1){
                return redirect()->to('donor.login')->with('Success' , "You are already active");
            }

           
        $donor->update(['verified' => 1]);
        DB::table('verify_users')->where('token' , $token)->delete();
        return redirect()->to('donor.login')->with('Success' , "Donor sucessfully activated");
        }

        return redirect()->to('donor.login')->with('warning', "Your token is invalid");
    }*/
   
}
