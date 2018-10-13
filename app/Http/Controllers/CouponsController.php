<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Coupon;

class CouponsController extends Controller
{
    public function start()
    {
        $coupons = Coupon::all();
        return view('home', compact('coupons'));
    }

    public function index()
    {
        return view('myCoupons', ['user' => Auth::user()]);
    }

    public function subscribe(Coupon $coupon)
    {
        $coupon->number = $coupon->number - 1;

        $coupon->save();

        $user = Auth::User();
        
        $user->coupons()->attach($coupon->id);

        return redirect()->route('coupons.index', compact('user'));
    }

    public function delete(Coupon $coupon)
    {
        $coupon->delete();

        return redirect()->route('home');
    }
}
