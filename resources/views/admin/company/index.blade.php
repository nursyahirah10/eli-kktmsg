@extends('layouts.app')

@section('content')

<div class="title is-5">Mengurus Syarikat</div>

<b-dropdown class="mb-6" v-cloak>
    <button class="button is-primary" slot="trigger">
        <span>Negeri</span>
    </button>

    @foreach ($addresses as $add)
    <b-dropdown-item href="{{ route('admin.manage.company') }}?state={{ $add->state }}">{{ $add->state }}</b-dropdown-item>
    @endforeach
</b-dropdown>

<company-index inline-template>
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
                <a href="{{ route('admin.manage.company.edit', $company->id) }}" class="button">Kemaskini</a>
                <button class="button is-danger" @click="deleteCompany('{{ $company->id }}')"><i class="fa fa-times"></i></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</company-index>
@endsection