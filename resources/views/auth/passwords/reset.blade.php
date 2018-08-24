@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns">
        <div class="column">
            <div class="card">
                <div class="card-content">
                    <form method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Reset Password') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <b-field label="Emel">
                            <b-input type="email" name="email" value="{{ $email ?? old('email') }}"></b-input>
                        </b-field>

                        <b-field label="Password">
                            <b-input type="password" name="password" value="{{ $password ?? old('password') }}"></b-input>
                        </b-field>

                        <b-field label="Password Confirmation">
                            <b-input type="password" name="password_confirmation" required></b-input>
                        </b-field>

                        <button type="submit" class="button is-primary">
                            {{ __('Reset Password') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
