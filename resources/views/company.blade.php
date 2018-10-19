@extends('layouts.app')

@section('content')
@if (Auth::user()->registration)
<div class="title is-5">
Pemilihan Syarikat


<a href="{{ route('company.choose') }}" class="float-right button is-primary is-small text-sm">Tambah Syarikat</a>
</div>

@notification @endnotification

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
        @foreach(Auth::user()->registration->companies as $company)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>
                <strong>{{ $company->name }}</strong>
                <br>
                @include('components.address', ['address' => $company->address])
            
            </td>
            <td>
                @if ($company->pivot->status)
                <div class="tag is-success">Diterima</div>
                @else
                <div class="tag is-danger">Tiada Maklumbalas</div>
                @endif
            </td>
            <td>
                <a href="{{ route('download.letter', 'BORANG JAWAPAN PENEMPATAN LI KKTM SRI GADING.pdf') }}">Surat maklumbalas</a>, <br>
                <a href="{{ route('download.letter', 'BORANG PERMOHONAN PENEMPATAN LI KKTM SRI GADING.pdf') }}">Surat permohonan LI</a>
                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@else
<strong>Anda perlu membuat pendaftaran Latihan Industri dahulu sebelum membuat pemilihan syarikat.</strong>
@endif
@endsection
