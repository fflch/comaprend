
<h2>Add a new Institution</h2>

<form method="post" action="/institutions">
@csrf

Name: <input name="name"> <br>
Initials: <input name="initials"> <br>
Country: <input name="country"> <br>

<button type="submit">Send</button>

</form>