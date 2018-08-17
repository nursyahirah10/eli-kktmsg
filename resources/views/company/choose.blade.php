@extends('layouts.app')

@section('content')
<div class="title is-5">
    Carian atau Tambah Syarikat
</div>

@notification
@endnotification
<add-company inline-template :addresses='@json($addresses)' :route-get-cities='@json(route('get.cities'))'>
    <section v-cloak>
        <div class="text-center">
            <b-field grouped>
                <div class="control is-expanded">
                    <div class="select is-fullwidth">
                        <select v-model="state" @change="getCities">
                            <option :value="address.state" v-for="address in addresses">@{{ address.state }}</option>
                        </select>
                    </div>
                </div>
                <div class="control is-expanded">
                    <div class="select is-fullwidth">
                        <select v-model="city">
                            <option :value="address.city" v-for="address in cities">@{{ address.city }}</option>
                        </select>
                    </div>
                </div>
                <div class="control">
                    <a class="button is-primary" @click="submit('form')">Cari</a>
                    <form ref="form" action="{{ route('company.choose') }}">
                        <input type="hidden" name="state" v-model="state">
                        <input type="hidden" name="city" v-model="city">
                    </form>
                </div>
            </b-field>

            <div class="is-divider" data-content="Atau"></div>

            <a href="{{ route('company.register') }}" class="button is-info">Tambah Syarikat</a>
        </div>

        @if ($companies->isNotEmpty())
        <section class="section">
            Negeri: {{ request()->state }}, Bandar: {{ request()->city }} 
            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Syarikat</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                    <tr>
                        <td width="10">{{ $loop->iteration }}</td>
                        <td>
                            <strong>{{ $company->name }}</strong>
                            <br>
                            @include('components.address', ['address' => $company->address])
                        
                        </td>
                        <td>
                            <button class="button" @click="submit('form1')">Pilih</button>

                            <form ref="form1" action="{{ route('company.assign') }}" method="POST">
                                @csrf
                                <input type="hidden" name="company_id" value="{{ $company->id }}">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
        @endif
    </section>

    

</add-company>

@endsection
