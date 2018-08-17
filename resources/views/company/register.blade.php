@extends('layouts.app')

@section('content')

@errors
@enderrors

<form class="card" action="{{ route('company.register') }}" method="POST">
    @csrf
    <div class="card-header">
        <div class="card-header-title">Tambah Syarikat</div>
    </div>
    <div class="card-content">
        <b-field label="Nama Syarikat *">
            <b-input name="company[name]" value="{{ old('company.name') }}"></b-input>
        </b-field>

        <b-field label="Alamat Syarikat *">
            <b-input name="address[address]" type="textarea" value="{{ old('address.address') }}"></b-input>
        </b-field>

        <b-field label="Poskod *">
            <b-input name="address[postcode]" value="{{ old('address.postcode') }}"></b-input>
        </b-field>

        <b-field label="Bandar *">
            <b-input name="address[city]" value="{{ old('address.city') }}"></b-input>
        </b-field>

        <b-field label="Negeri *">
            <b-input name="address[state]" value="{{ old('address.state') }}"></b-input>
        </b-field>

        <input type="hidden" name="address[country]" value="Malaysia">
        <input type="hidden" name="company[status]" value="true">

        <b-field label="Emel *">
            <b-input type="email" name="company[email]" value="{{ old('company.email') }}"></b-input>
        </b-field>
        
        <b-field label="Pegawai Sumber Manusia">
            <b-input name="company[hr_officer]" value="{{ old('company.hr_officer') }}"></b-input>
        </b-field>

        <b-field label="No. Telefon. 1 *">
            <b-input name="address[phone]" value="{{ old('address.phone') }}"></b-input>
        </b-field>

        <b-field label="No. Telefon. 2">
            <b-input name="company[no_2]" value="{{ old('company.no_2') }}"></b-input>
        </b-field>

        <b-field label="Fax 1">
            <b-input name="company[fax_1]" value="{{ old('company.fax_1') }}"></b-input>
        </b-field>

        <b-field label="Fax 2">
            <b-input name="company[fax_2]" value="{{ old('company.fax_2') }}"></b-input>
        </b-field>

        <b-field>
            <button type="submit" class="button is-primary">Tambah</button>
        </b-field>
    </div>
</form>

@endsection
