<div>index utilisateur</div>

<div>
    <ul>
        <li>Nom: {{ Auth::user()->firstname }}</li>
        <li>Prénom: {{ Auth::user()->lastname }}</li>
        <li>Duckname: {{ Auth::user()->duckname }}</li>
        <li>Email: {{ Auth::user()->email }}</li>
    </ul>
</div>

<a href="{{ route('User.edit', $user) }}">modifier mes infos</a>
