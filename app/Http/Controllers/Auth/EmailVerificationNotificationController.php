<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Auth\EmailVerificationNotification\StoreEmailVerificationNotification;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, StoreEmailVerificationNotification $storeEmailVerificationNotification)
    {
        $storeEmailVerificationNotification->handle($request);
        return back()->with('status', 'verification-link-sent');
    }
}
