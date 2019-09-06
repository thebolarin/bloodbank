<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Settings;
use App\Eligible;
use App\HospitalPost;
use App\DonationProcess;
use App\About;
use App\BloodGroup;

class FrontEndController extends Controller
{

    public function home()
    {    

        return view('welcome')->with('title' , Settings::first()->site_name)
       -> with('post1' , Post::find(1))
        ->with('post2' , Post::find(2))
        ->with('post3' , Post::find(3))
        ->with('post4' , Post::find(4))
        ->with('post5' , Post::find(5))
        ->with('post6' , Post::find(6))
        ->with('post7' , Post::find(7))
        ->with('post8' , Post::find(8))
        ->with('post9' , Post::find(9))
        ->with('post10' , Post::find(10))
        ->with('post11' , Post::find(11))
        ->with('post12' , Post::find(12))
        ->with('contact' , Settings::first()->contact_number)
        ->with('address' , Settings::first()->address)
        ->with('email' , Settings::first()->contact_email);
       
     
    }
    public function eligible()
    {    

        return view('eligibility') ->with('post13' , Post::find(13))
        ->with('post14' , Post::find(14))
        ->with('post11' , Post::find(11))
        ->with('post12' , Post::find(12))
        ->with('eligible' , Eligible::all())
         ->with('contact' , Settings::first()->contact_number)
        ->with('address' , Settings::first()->address)
        ->with('email' , Settings::first()->contact_email)
        ->with('title' , Settings::first()->site_name);
                 
     

    }

    public function hospital()
    {     $blood = BloodGroup::all();

        return view('hospital')->with('blood' ,  $blood )
         -> with('hospital1' , HospitalPost::find(1))
        ->with('hospital2' , HospitalPost::find(2))
        ->with('hospital3' , HospitalPost::find(3))
        ->with('hospital4' , HospitalPost::find(4))
        ->with('post11' , Post::find(11))
        ->with('post12' , Post::find(12))
        ->with('contact' , Settings::first()->contact_number)
        ->with('address' , Settings::first()->address)
        ->with('email' , Settings::first()->contact_email)
        ->with('title' , Settings::first()->site_name);
                 
           
    

    }

    public function donation()
    {    

        return view('howto')->with('donation1' , DonationProcess::find(1))
        ->with('donation2' ,DonationProcess::find(2))
        ->with('donation3' , DonationProcess::find(3))
        ->with('post11' , Post::find(11))
        ->with('post12' , Post::find(12))
        ->with('contact' , Settings::first()->contact_number)
        ->with('address' , Settings::first()->address)
        ->with('email' , Settings::first()->contact_email)
        ->with('title' , Settings::first()->site_name);
                 
           
    

    }

    public function about()
    {    

        return view('about')->with('about1' , About::find(1))
        ->with('about2' ,About::find(2))
        ->with('about3' , About::find(3))
        ->with('about4' , About::find(4))
        ->with('post11' , Post::find(11))
        ->with('post12' , Post::find(12))
        ->with('contact' , Settings::first()->contact_number)
        ->with('address' , Settings::first()->address)
        ->with('email' , Settings::first()->contact_email)
        ->with('title' , Settings::first()->site_name);
                 
           
    

    }
}
