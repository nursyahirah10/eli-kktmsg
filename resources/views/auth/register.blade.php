@extends('layouts.app')

@section('content')
<div class="section">
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-8">
                <div class="card">
                    <div class="card-header">
                        <div class="card-header-title">Daftar Pengguna</div>
                    </div>
                    <div class="card-content">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <b-field label="ID Pengguna"
                            type="{{ $errors->has('matric') ? 'is-danger' : '' }}"
                            message="{{ $errors->first('matric') }}">
                            <b-input type="text"
                                value="{{ old('matric') }}"
                                name="matric">
                            </b-input>
                        </b-field>

                        <b-field label="E-mel"
                            type="{{ $errors->has('email') ? 'is-danger' : '' }}"
                            message="{{ $errors->first('email') }}">
                            <b-input type="text"
                                value="{{ old('email') }}"
                                name="email">
                            </b-input>
                        </b-field>

                        <b-field label="Kata Laluan"
                            type="{{ $errors->has('password') ? 'is-danger' : '' }}">
                            <b-input type="password" name="password">
                            </b-input>
                        </b-field>

                        <b-field label="Sahkan Kata Laluan"
                            type="{{ $errors->has('password_confirmation') ? 'is-danger' : '' }}">
                            <b-input type="password" name="password_confirmation">
                            </b-input>
                        </b-field>

                        <div class="field mt-6">
                            <div class="control">
                                <button type="submit" class="button is-primary">Daftar</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</div>
@endsection
