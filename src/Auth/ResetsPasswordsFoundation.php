<?php

namespace Milose\LaravelFoundation\Auth;

trait ResetsPasswords
{
    // Use original trait
    use \Illuminate\Foundation\Auth\ResetsPasswords;

    /**
     * Display the password reset view for the given token.
     *
     * If no token is present, display the link request form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string|null  $token
     * @return \Illuminate\Http\Response
     */
    public function showResetForm(Request $request, $token = null)
    {
        // Override view
        return view('zf::auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
}
