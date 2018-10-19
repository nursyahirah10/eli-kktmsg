@extends('layouts.app')

@section('content')
<div class="title is-5">Mengurus Pelajar</div>

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
<div>
    <table class="table is-fullwidth">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Emel</th>
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
                <td>
                    <a href="{{ route('admin.manage.student.edit', $user->id) }}" class="button is-primary">Mengurus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
