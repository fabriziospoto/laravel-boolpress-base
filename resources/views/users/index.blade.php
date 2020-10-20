@extends('layouts.app')
@section('content')
    @if (session('status'))
    <div class="alert alert-success">
        Profilo numero {{ session('status') }} cancellato.
    </div>
    @endif
    <h2>Elenco Utenti</h2>
    @foreach($users as $user)
    <ul>
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
        <li>{{ $user->avatar->avatar}}</li>
        <li><a href="{{ route('users.show',$user->id)}}">Dettagli</a></li>
    </ul>
    @endforeach
@endsection
