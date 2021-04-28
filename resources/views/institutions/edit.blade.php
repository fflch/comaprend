
<h2>Edit a new Institution</h2>

<form method="post" action="/institutions/{{ $institution->id }}">
@csrf

Name: <input name="name" value="{{ $institution->name }}"> <br>
Initials: <input name="initials" value="{{ $institution->initials }}"> <br>
Country: <input name="country" value="{{ $institution->country }}" > <br>

<button type="submit">Send</button>

</form>