<h2>List of all Institutions:</h2>

<a href="/institutions/create">Create a new Institution</a>
<br><br>

@foreach($institutions as $institution)

<a href="/institutions/{{ $institution->id }}/edit">{{ $institution->name }}</a> - {{ $institution->initials }} - {{ $institution->country }}

<form method="post" action="/institutions/{{ $institution->id }}/delete">
@csrf  
<button type="submit">Delete</button>
</form>

<br>

@endforeach