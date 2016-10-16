<?php

namespace Milose\LaravelFoundation\Auth;

trait AuthenticatesUsers
{
    // Use original trait
    use \Illuminate\Foundation\Auth\AuthenticatesUsers;

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        // Override view
        return view('zf::auth.login');
    }
}
