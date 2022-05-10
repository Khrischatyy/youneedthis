<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\API\V1\BaseController;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends BaseController
{
    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store()
    {
        $user = User::create([
            'password' => Hash::make(Carbon::now()),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return $this->sendResponse($user, 'User created successfully');
    }
}
