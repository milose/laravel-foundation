@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="medium-8 medium-offset-2 small-10 small-offset-1 columns end">

            @if (session('status'))
                <div class="callout success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="callout">
                <strong>Reset Password</strong>
                <hr>
                <form method="POST" action="{{ url('/password/email') }}">

                    {{ csrf_field() }}

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
                        <div class="medium-6 columns medium-offset-4 end">
                            <button type="submit" class="primary button">
                                Send Password Reset Link
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
