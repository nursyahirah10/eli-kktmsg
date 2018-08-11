@extends('layouts.app')

@section('content')
<div class="title is-5">
Pemilihan Syarikat

<a href="{{ route('company.choose') }}" class="float-right button is-primary is-small text-sm">Tambah Syarikat</a>
</div>

<table class="table is-narrow is-bordered is-striped is-fullwidth">
    <thead>
        <tr>
            <th>No.</th>
            <th>Syarikat</th>
            <th>Status Maklumbalas</th>
            <th>Surat</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>company 1</td>
            <td>Accepted</td>
            <td>indemnity, validation</td>
        </tr>
        <tr>
            <td>2</td>
            <td>company 1</td>
            <td>Accepted</td>
            <td>indemnity, validation</td>
        </tr>
        <tr>
            <td>3</td>
            <td>company 1</td>
            <td>Accepted</td>
            <td>indemnity, validation</td>
        </tr>
    </tbody>
</table>
@endsection
