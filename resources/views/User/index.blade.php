@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <ul>
                <li>Nom: {{ Auth::user()->firstname }}</li>
                <li>Prénom: {{ Auth::user()->lastname }}</li>
                <li>Duckname: {{ Auth::user()->duckname }}</li>
                <li>Email: {{ Auth::user()->email }}</li>
            </ul>
        </div>

        <a href="{{ route('User.editProfile') }}">modifier mes infos</a>
    </div>
@endsection
