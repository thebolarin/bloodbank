<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Donor;
class DonorHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('donor-home')->with('donor', Auth::guard('donor')->user());;
    }
}
