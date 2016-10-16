<?php

namespace Milose\LaravelFoundation\Auth;

trait RegistersUsers
{
    // Use original trait
    use \Illuminate\Foundation\Auth\RegistersUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        // Override view
        return view('zf::auth.register');
    }
}
