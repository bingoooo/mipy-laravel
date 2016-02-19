@extends('admin.adminlayout')

@section('content')

<form action="admin" method="get" class="ui container">
	<label for="nom">User Name</label><br>
	<input type="text" name="nom" required="true"><br>
	<label for="motdepasse">Password</label><br>
	<input type="text" name="motdepasse"><br>
</form>

@endsection