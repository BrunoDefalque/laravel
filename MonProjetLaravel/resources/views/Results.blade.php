<h1>Résultat</h1>

@forelse ($users as $user)
- Nom: {{ $user['name'] }} <br/>
- Prénom: {{ $user['firstname'] }}
<hr/>
@empty
Aucun utilisateur n'a été trouvé.
@endforelse
