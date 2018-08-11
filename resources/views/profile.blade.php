@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-header-title">
            Profil Pelajar
        </div>
    </div>

    <div class="card-content">
        @errors
        @enderrors
        
        @notification
        @endnotification

        <form action="{{ route('profile') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <b-field label="Muat Naik Gambar">
            <div class="file">
                <label class="file-label">
                    <input class="file-input" type="file" name="profile_picture">
                    <span class="file-cta">
                    <span class="file-icon">
                        <i class="fas fa-upload"></i>
                    </span>
                    <span class="file-label">
                        Pilih gambar..
                    </span>
                    </span>
                </label>
                </div>
        </b-field>

        <b-field label="Nama">
            <b-input type="text" name="user[name]" value="{{ old('user.name', $user->name) }}"></b-input>
        </b-field>

        <b-field label="IC">
            <b-input type="text" name="user[ic]" value="{{ old('user.ic', $user->ic) }}"></b-input>
        </b-field>

        <b-field label="No. Matrik">
            <b-input type="text" name="user[matric]" value="{{ old('user.matric', $user->matric) }}"></b-input>
        </b-field>

         <b-field label="E-mel">
            <b-input type="email" name="user[email]" value="{{ old('user.email', $user->email) }}"></b-input>
        </b-field>

        <b-field label="Alamat">
            <b-input type="textarea" name="address[address]" value="{{ old('address.address', $user->address->address) }}"></b-input>
        </b-field>

        <b-field label="Poskod">
            <b-input type="text" name="address[postcode]" value="{{ old('address.postcode', $user->address->postcode) }}"></b-input>
        </b-field>

        <b-field label="Bandar">
            <b-input type="text" name="address[city]" value="{{ old('address.city', $user->address->city) }}"></b-input>
        </b-field>

        <input type="hidden" name="address[country]" value="Malaysia">

        <b-field label="Negeri">
            <b-input type="text" name="address[state]" value="{{ old('address.state', $user->address->state) }}"></b-input>
        </b-field>

        <b-field label="No. Telefon">
            <b-input type="text" name="address[phone]" value="{{ old('address.phone', $user->address->phone) }}"></b-input>
        </b-field>

        <b-field label="Program">
            <b-input type="text" name="user[programme]" value="{{ old('user.programme', $user->programme) }}"></b-input>
        </b-field>

        <b-field>
            <button class="button is-primary">Kemaskini</button>
        </b-field>
        </form>
    </div>
</div>
@endsection
