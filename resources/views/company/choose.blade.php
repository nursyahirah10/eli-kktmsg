@extends('layouts.app')

@section('content')
<div class="title is-5">
    Carian atau Tambah Syarikat
</div>

@notification
@endnotification
<add-company inline-template :data-companies='@json($companies)'>
    <section v-cloak>
        <div class="text-center">
            <b-field grouped>
                <div class="control">
                    <div class="select">
                        <select name="" id="">
                            <option value="">Kuala lumpur</option>
                        </select>
                    </div>
                </div>
                <div class="control">
                    <div class="select">
                        <select name="" id="">
                            <option value="">Bandar tun razak</option>
                        </select>
                    </div>
                </div>
                <div class="control">
                    <a href="" class="button is-primary" :disabled="selected == null">Pilih</a>
                </div>

                <form action="{{ route('company') }}"></form>
            </b-field>

            <div class="is-divider" data-content="Atau"></div>

            <a href="{{ route('company.register') }}" class="button is-info">Tambah Syarikat</a>
        </div>
    </section>

</add-company>

@endsection
