<?php

namespace Milose\LaravelFoundation\Auth;

use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

trait SendsPasswordResetEmailsFoumdation
{
    use SendsPasswordResetEmails;

    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLinkRequestForm()
    {
        return view('vendor.auth.passwords.email');
    }
}
