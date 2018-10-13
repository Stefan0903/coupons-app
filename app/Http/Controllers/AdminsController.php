<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCouponRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Coupon;

class AdminsController extends Controller
{
    public function index()
    {
        $coupons = Coupon::all();

        return view('admin.index', compact('coupons'));
    }

    public function store(StoreCouponRequest $request)
    {

        $image = $request->file('image')->store("public");
        
        $image = explode('/', $image);

        $path = $image[1];

        Coupon::create([
            'name' => request('name'),
            'sale' => request('sale'),
            'number' => request('number'),
            'image' => $path,
        ]);

        return redirect()->route('admin.index');
    }

    public function update(StoreCouponRequest $request)
    {
        $couponId = request('id');
        
        $coupon = Coupon::find($couponId);

        $image = $request->file('image')->store("public");
        
        $image = explode('/', $image);

        $path = $image[1];

        $coupon->update([
            'name' => request('name'),
            'sale' => request('sale'),
            'number' => request('number'),
            'image' => $path,
        ]);

        return redirect()->route('admin.index');
    }

    public function destroy(Coupon $coupon)
    {
        $coupon->delete();

        return redirect()->route('admin.index');
    }
}
