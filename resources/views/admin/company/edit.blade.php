@extends('layouts.app')

@section('content')
@notification
@endnotification

@errors
@enderrors
<div>
    <form class="card" action="{{ route('admin.manage.company.update', $company->id) }}" method="POST">
        @method('put')
        @csrf
        <div class="card-header">
            <div class="card-header-title">{{ $company->name }}</div>
        </div>
        <div class="card-content">
            <b-field
                label="Status">
                <div class="select">
                    <select name="company[status]">
                        <option value="true" {{ $company->status == 1? 'selected' : '' }}>Diterima</option>
                        <option value="false" {{ $company->status == 0? 'selected' : '' }}>Tidak diterima</option>
                    </select>
                </div>
            </b-field>

            <b-field label="Nama Syarikat *">
                <b-input name="company[name]" value="{{ old('company.name', $company->name) }}"></b-input>
            </b-field>
    
            <b-field label="Alamat Syarikat *">
                <b-input name="address[address]" type="textarea" value="{{ old('address.address', $company->address->address) }}"></b-input>
            </b-field>
    
            <b-field label="Poskod *">
                <b-input name="address[postcode]" value="{{ old('address.postcode', $company->address->postcode) }}"></b-input>
            </b-field>
    
            <b-field label="Bandar *">
                <b-input name="address[city]" value="{{ old('address.city', $company->address->city) }}"></b-input>
            </b-field>
    
            <b-field label="Negeri *">
                <b-input name="address[state]" value="{{ old('address.state', $company->address->state) }}"></b-input>
            </b-field>
    
            <input type="hidden" name="address[country]" value="Malaysia">
    
            <b-field label="Emel *">
                <b-input type="email" name="company[email]" value="{{ old('company.email', $company->email) }}"></b-input>
            </b-field>
            
            <b-field label="Pegawai Sumber Manusia">
                <b-input name="company[hr_officer]" value="{{ old('company.hr_officer', $company->hr_officer) }}"></b-input>
            </b-field>
    
            <b-field label="No. Telefon. 1 *">
                <b-input name="address[phone]" value="{{ old('address.phone', $company->address->phone) }}"></b-input>
            </b-field>
    
            <b-field label="No. Telefon. 2">
                <b-input name="company[no_2]" value="{{ old('company.no_2', $company->no_2) }}"></b-input>
            </b-field>
    
            <b-field label="Fax 1">
                <b-input name="company[fax_1]" value="{{ old('company.fax_1', $company->fax_1) }}"></b-input>
            </b-field>
    
            <b-field label="Fax 2">
                <b-input name="company[fax_2]" value="{{ old('company.fax_2', $company->fax_2) }}"></b-input>
            </b-field>
    
            <b-field>
                <button type="submit" class="button is-primary">Kemaskini</button>
            </b-field>
        </div>
    </form>
</div>
@endsection