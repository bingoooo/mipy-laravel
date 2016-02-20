@extends('admin.adminlayout')

@section('content')

<form action="admin/index" method="post" class="ui container">
	<label for="nom">e-mail</label><br>
	<input type="text" name="nom" required="true"><br>
	<label for="motdepasse">Password</label><br>
	<input type="text" name="motdepasse"><br>
	<button type="submit">Log In</button>
</form>

@endsection