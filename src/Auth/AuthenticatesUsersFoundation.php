<?php

namespace Milose\LaravelFoundation\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

trait AuthenticatesUserFoundation
{
    use AuthenticatesUser;

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('vendor.auth.login');
    }
}
