@extends('layouts.app')

@section('content')
@if (Auth::user()->registered)

@notification
@endnotification

<div class="title is-6">Maklumat Pendaftaran LI</div>

<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
    <tbody>
        <tr>
            <td width="50">Semester / Sesi</td>
            <td width="50">{{ $user->reg->semester }} / {{ $user->reg->session }}</td>
        </tr>
        <tr>
            <td width="50">Tarikh Mula & Tamat</td>
            <td width="50">{{ $user->reg->start_at->format('d-m-Y')  }} <span class="fa fa-arrow-right"></span> {{ $user->reg->end_at->format('d-m-Y') }}</td>
        </tr>
        <tr>
            <td width="50">Tempoh</td>
            <td width="50">{{ $user->reg->period }} Minggu</td>
        </tr>
        <tr>
            <td width="50">Status</td>
            <td width="50"><span class="tag is-success">{{ strtoupper($user->reg->status) }}</span></td>
        </tr>
    </tbody>
</table>

@else
<registration-page inline-template start-at="{{ old('start_at', now()) }}" end-at="{{ old('end_at', now()) }}">
<div class="card">
    <div class="card-header">
        <div class="card-header-title">
            Pendaftaran LI
        </div>
    </div>

    <div class="card-content">
        @errors
        @enderrors

        @notification
        @endnotification

        <form action="{{ route('registration') }}" method="POST">
            @csrf

            <b-field label="Semester">
                <b-input name="semester" placeholder="Semester" value="{{ old('semester') }}"></b-input>
            </b-field>

            <b-field label="Sesi" message="Contoh: 20172018">
                <b-input name="session" value="{{ old('session') }}"></b-input>
            </b-field>
            
            <b-field label="Tarikh Mula">
                <b-datepicker v-model="startAtModel" name="start_at">
                </b-datepicker>
            </b-field>

            <b-field label="Tarikh Tamat">
                <b-datepicker v-model="endAtModel" name="end_at">
                </b-datepicker>
            </b-field>

            <b-field label="Tempoh">
                <b-input name="period" placeholder="Minggu" value="{{ old('period') }}"></b-input>
            </b-field>

            <b-field>
                <button class="button is-primary">Daftar</button>
            </b-field>
        </form>            
    </div>
</div>
</registration-page>
@endif
@endsection
