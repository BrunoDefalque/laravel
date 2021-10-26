<form action="{{ url('users') }}" method="POST">
@csrf
FirstName <input type="text" id="firstName" name="firstName">
Name <input type="text" id="name" name="name">

<button type="submit">Rechercher</button>
</form>