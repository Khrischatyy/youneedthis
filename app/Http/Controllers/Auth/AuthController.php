<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Messager\BaseController;
use App\Models\Noname;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends BaseController
{
    public static function getCredentials(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();


        if ($user &&
            Hash::check($request->password, $user->password)) {
            return $user;
        }

//        \App\Coupon::create([
//            'code' => $request->get('code'),
//            'amount' => $request->get('amount'),
//            'max_redemptions' => $request->get('max_redemptions')
//        ]);
//        return redirect('coupons')->withSucces($message);
    }

    public function createNoname()
    {
        $noname = Noname::create([]);

        $session = session(['noname_session_id' => Hash::make(Carbon::now())]);

        return $this->sendResponse($session, 'Noname created successfully');
    }
}
