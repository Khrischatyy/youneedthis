<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\API\V1\BaseController;
use App\Models\Noname;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends BaseController
{
    public function getCredentials(Request $request)
    {
        $validator = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

//        \App\Coupon::create([
//            'code' => $request->get('code'),
//            'amount' => $request->get('amount'),
//            'max_redemptions' => $request->get('max_redemptions')
//        ]);
//        return redirect('coupons')->withSucces($message);
    }

    public function createNoname()
    {
        $noname = Noname::create([
            'password' => Hash::make(Carbon::now()),
        ]);

        return $this->sendResponse($noname, 'Noname created successfully');
    }
}
