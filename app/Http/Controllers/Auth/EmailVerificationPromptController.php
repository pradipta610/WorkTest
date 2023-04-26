<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Auth\EmailVerificationPrompt\EmailVerificationPrompt;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function __invoke(Request $request, EmailVerificationPrompt $emailVerificationPrompt)
    {
        $emailVerificationPrompt->handle($request);
    }
}
