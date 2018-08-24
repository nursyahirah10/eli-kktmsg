@extends('layouts.app')

@section('content')

<div class="title is-5">Mengurus Syarikat</div>
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
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection