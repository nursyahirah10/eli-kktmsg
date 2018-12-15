@extends('layouts.app') 
@section('content')
<div class="title is-5">Mengurus Pelajar</div>

@notification
@endnotification
<form action="{{ route('admin.manage.student') }}">
    <div class="field is-grouped">
        <p class="control is-expanded">
            <input type="text" class="input" placeholder="Carian Pelajar" name="query">
        </p>
        <p class="control">
            <button class="button is-light" type="submit">
            Cari
        </button>
        </p>
    </div>
</form>


<b-dropdown class="mt-6 mb-6" v-cloak>
    <button class="button is-primary" slot="trigger">
        <span>Carian program</span>
    </button>

    @foreach (config('eli.programmes') as $item)
    <b-dropdown-item href="{{ route('admin.manage.student') }}?filter[programme]={{ $item }}">{{ $item }}</b-dropdown-item>
    @endforeach
</b-dropdown>

<b-dropdown class="mt-6 mb-6" v-cloak>
    <button class="button is-primary" slot="trigger">
        <span>Sesi</span>
    </button>

    @foreach ($sessions as $session)
    <b-dropdown-item href="{{ route('admin.manage.student') }}?filter[session]={{ $session->session }}">{{ $session->session }}</b-dropdown-item>
    @endforeach
</b-dropdown>


<student-index inline-template>
    <div>
        <table class="table is-fullwidth">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Emel</th>
                    <th>Programme</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>
                        {{ $user->name }}
                    </td>
                    <td>{{ $user->email }}</td>
                    <td class="w-1/3">{{ $user->programme }}</td>
                    <td>
                        @if ($user->registration)
                        <a href="{{ route('admin.manage.student.edit', $user->id) }}" class="button is-primary">Mengurus</a>                    @else
                        <a class="button is-primary" disabled>Mengurus</a> @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</student-index>
@endsection