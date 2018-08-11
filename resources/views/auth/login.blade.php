@extends('layouts.app')

@section('content')
<div class="section">
<div class="container">
    <login-page inline-template>
    <div class="columns is-centered">
        <div class="column is-5">
            @errors
            @enderrors

            <div class="card">
                <div class="card-header">
                    <div class="card-header-title">Log Masuk</div>
                </div>
                <div class="card-content">
                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @csrf

                    <b-field>
                        <div class="select">
                            <select name="role" id="">
                                <option value="student" selected="selected">Siswa</option>
                                <option value="administrator">Pentadbir</option>
                            </select>
                        </div>
                    </b-field>

                    <b-field label="ID Pengguna"
                        type="{{ $errors->has('id') ? 'is-danger' : '' }}"
                        message="{{ $errors->first('id') }}">
                        <b-input type="text"
                            value="{{ old('id') }}"
                            name="id"
                            v-model="id">
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

                    <input type="hidden" name="matric" v-model="id">
                    <input type="hidden" name="email" v-model="id">

                    <div class="field mt-6">
                        <div class="control">
                            <button type="submit" class="button is-primary">Log Masuk</button>
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
    </login-page>
</div>
</div>
@endsection
