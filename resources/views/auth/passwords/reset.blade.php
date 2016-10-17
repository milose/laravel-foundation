@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="medium-8 medium-offset-2 small-10 small-offset-1 columns end">
            <div class="callout">
                <strong>Reset Password</strong>
                <hr>
                <form method="POST" action="{{ url('/password/reset') }}">

                    {{ csrf_field() }}

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="row">
                        <div class="medium-4 columns hide-for-small-only">
                            <label class="text-right middle{{ $errors->has('email') ? ' is-invalid-label' : '' }}" for="email">E-Mail Address</label>
                        </div>
                        <div class="medium-6 columns end">
                            <input placeholder="E-Mail Address" id="email" type="email" class="{{ $errors->has('email') ? 'is-invalid-input' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="form-error is-visible">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="medium-4 columns hide-for-small-only">
                            <label class="text-right middle{{ $errors->has('password') ? ' is-invalid-label' : '' }}" for="password">Password</label>
                        </div>
                        <div class="medium-6 columns end">
                            <input placeholder="Password" id="password" type="password" class="{{ $errors->has('password') ? 'is-invalid-input' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="form-error is-visible">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="medium-4 columns hide-for-small-only">
                            <label class="text-right middle{{ $errors->has('password_confirmation') ? ' is-invalid-label' : '' }}" for="password-confirm">Confirm Password</label>
                        </div>
                        <div class="medium-6 columns end">
                            <input placeholder="Confirm Password" id="password-confirm" type="password" class="{{ $errors->has('password_confirmation') ? 'is-invalid-input' : '' }}" name="password_confirmation" required>

                            @if ($errors->has('password_confirmation'))
                                <span class="form-error is-visible">{{ $errors->first('password_confirmation') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="medium-6 columns medium-offset-4 end">
                            <button type="submit" class="primary button">
                                Reset Password
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
