<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Coupon;

class CouponsController extends Controller
{
    public function index()
    {
        return view('myCoupons', ['user' => Auth::user()]);
    }

    public function show(Coupon $coupon)
    {
        return view('coupons.show', compact('coupon'));
    }

    public function subscribe(Coupon $coupon)
    {
        $coupon->number = $coupon->number - 1;

        $coupon->save();

        $user = Auth::User();
        
        $user->coupons()->attach($coupon->id);

        return view('myCoupons', compact('user'));
    }

    public function delete(Coupon $coupon)
    {
        $coupon->delete();

        return redirect()->route('home');
    }

}
