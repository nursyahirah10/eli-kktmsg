@extends('layouts.app')

@section('content')
<div class="section">
<div class="container">
    <div class="columns is-centered">
        <div class="column is-5">
            <div class="card">
                <div class="card-header">
                    <div class="card-header-title">Login</div>
                </div>
                <div class="card-content">
                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @csrf

                    <b-field label="ID Pengguna"
                        type="{{ $errors->has('matric') ? 'is-danger' : '' }}"
                        message="{{ $errors->first('matric') }}">
                        <b-input type="text"
                            value="{{ old('matric') }}"
                            name="matric">
                        </b-input>
                    </b-field>

                    <b-field label="Kata Laluan"
                        type="{{ $errors->has('password') ? 'is-danger' : '' }}">
                        <b-input type="password" name="password">
                        </b-input>
                    </b-field>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                   Ingat kata laluan
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="field mt-6">
                        <div class="control">
                            <button type="submit" class="button is-primary">Login</button>
                        </div>
                    </div>

                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Lupa kata laluan?') }}
                    </a>
                </form>
                </div>
            </div>
        
        </div>
    </div>
</div>
</div>
@endsection
