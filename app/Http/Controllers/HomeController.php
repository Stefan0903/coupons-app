<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Coupon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $id = Auth::user()->id;

        $coupons = Coupon::where('number', '>', '0')->whereDoesntHave('users', function($q) use ($id){
            $q->where('user_id', $id);
        })->get();

        return view('home', compact('coupons'));
    }
}
