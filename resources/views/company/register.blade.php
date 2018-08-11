@extends('layouts.app')

@section('content')

<form class="card" action="{{ route('company.register') }}" method="POST">
    @csrf
    <div class="card-header">
        <div class="card-header-title">Tambah Syarikat</div>
    </div>
    <div class="card-content">
        <b-field label="Nama Syarikat">
            <b-input name="company[name]"></b-input>
        </b-field>

        <b-field label="Alamat Syarikat">
            <b-input name="address[address]" type="textarea"></b-input>
        </b-field>

        <b-field label="Poskod">
            <b-input name="address[postcode]"></b-input>
        </b-field>

        <b-field label="Bandar">
            <b-input name="address[city]"></b-input>
        </b-field>

        <b-field label="Daerah">
            <b-input name="address[state]"></b-input>
        </b-field>

        <input type="hidden" name="address[country]" value="Malaysia">
        <input type="hidden" name="company[status]" value="disapproved">

        <b-field label="Emel">
            <b-input name="company[email]"></b-input>
        </b-field>
        
        <b-field label="Pegawai Sumber Manusia">
            <b-input name="company[hr_officer]"></b-input>
        </b-field>

        <b-field label="No. Telefon. 1">
            <b-input name="company[no_1]"></b-input>
        </b-field>

        <b-field label="No. Telefon. 2">
            <b-input name="company[no_2]"></b-input>
        </b-field>

        <b-field label="Fax 1">
            <b-input name="company[fax_1]"></b-input>
        </b-field>

        <b-field label="Fax 2">
            <b-input name="company[fax_2]"></b-input>
        </b-field>

        <b-field>
            <button type="submit" class="button is-primary">Tambah</button>
        </b-field>
    </div>
</form>

@endsection
