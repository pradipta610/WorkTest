<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Auth\ConfirmablePassword\StoreConfirmablePassword;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class ConfirmablePasswordController extends Controller
{
    /**
     * Show the confirm password view.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('auth.confirm-password');
    }

    /**
     * Confirm the user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function store(Request $request, StoreConfirmablePassword $confirmablepassword)
    {
        $confirmablepassword->handle($request);
        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
