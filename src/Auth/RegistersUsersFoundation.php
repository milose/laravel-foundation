<?php

namespace Milose\LaravelFoundation\Auth;

use Illuminate\Foundation\Auth\RegistersUsers;

trait RegistersUsersFoundation
{
    use RegistersUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('vendor.auth.register');
    }
}
