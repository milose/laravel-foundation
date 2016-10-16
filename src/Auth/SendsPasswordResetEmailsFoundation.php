<?php

namespace Milose\LaravelFoundation\Auth;

trait SendsPasswordResetEmails
{
    // Use original trait
    use \Illuminate\Foundation\Auth\SendsPasswordResetEmails;

    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLinkRequestForm()
    {
        // Override view
        return view('zf::auth.passwords.email');
    }
}
