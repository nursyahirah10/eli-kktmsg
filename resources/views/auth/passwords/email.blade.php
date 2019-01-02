@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns">
        <div class="column">
            <div class="card">
                <div class="card-header">
                    <div class="card-header-title">
                        Tukar Katalaluan
                    </div>
                </div>
                <div class="card-content">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                        @csrf

                        <b-field label="Emel">
                            <b-input id="email" type="email" name="email" value="{{ old('email') }}" required></b-input>
                        </b-field>

                        <button type="submit" class="button is-primary">
                            Hantar Emel Tukar Katalaluan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
