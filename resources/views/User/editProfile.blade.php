@extends('layouts.app')

@section('content')
    <div class="container">
    <div>Edit user</div>

    <form action="{{ route('User.update', $user) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <h4>Nom</h4>
            <label for="firstname"></label>
            <input class="form-control" type="text" name="firstname" value="{{ Auth::user()->firstname }}">
        </div>
        <div class="form-group">
            <h4>Prénom</h4>
            <label for="lastname"></label>
            <input class="form-control" type="text" name="lastname" value="{{ Auth::user()->lastname }}">
        </div>
        <div class="form-group">
            <h4>Password</h4>
            <label for="password"></label>
            <input class="form-control" type="password" name="password">
        </div>

        <button class="btn btn-primary" type="submit">Modifier mes infos</button>
    </form>
    </div>
@endsection
