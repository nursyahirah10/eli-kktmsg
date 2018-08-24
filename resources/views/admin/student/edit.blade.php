@extends('layouts.app')

@section('content')
@errors
@enderrors

@notification
@endnotification
<div>
    <div class="card">
        <div class="card-header">
            <div class="card-header-title">{{ $user->name }}</div>
        </div>
        <div class="card-content">
            <div class="image is-128x128 mb-4">
                <img src="{{ asset('storage/'. $user->profile_picture) }}" alt="">
            </div>
            <form action="{{ route('admin.registration.quota', $user->registration->id) }}" method="POST">
                @csrf
                <b-field label="Kuota">
                    <b-input type="number" name="quota" value="{{ $user->registration->quota }}" required></b-input>
                </b-field>

                <button type="submit" class="button is-primary">Kemaskini</button>
            </form>
        </div>
    </div>

    <div class="card">
        <table class="table is-narrow is-bordered is-striped is-fullwidth">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Syarikat</th>
                    <th>Status Maklumbalas</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($user->registration->companies as $company)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <a href="{{ route('admin.manage.company.edit', $company->id) }}"><strong>{{ $company->name }}</strong></a>
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
                        <form action="{{ route('admin.company.status.flip', $company->pivot->id) }}" method="POST">
                            <button type="submit" class="tag fa fa-asterisk button">&nbsp;Ubah</button>
                            @csrf
                        </form> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection