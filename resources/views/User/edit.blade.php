<div>Edit user</div>


<form action="{{ route('User.update', $user) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <h4>Nom</h4>
        <label for="last_name"></label>
        <input class="form-control" type="text" name="firstname" value="{{ $user->firstname }}">
    </div>
    <div class="form-group">
        <h4>Prénom</h4>
        <label for="first_name"></label>
        <input class="form-control" type="text" name="lastname" value="{{ $user->lastname }}">
    </div>
    <div class="form-group">
        <h4>Password</h4>
        <label for="password"></label>
        <input class="form-control" type="password" name="password">
    </div>

    <button class="btn btn-primary" type="submit">Modifier mes infos</button>
</form>
