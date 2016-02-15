@extends('layout')

@section('content')
<?php var_dump(sizeof($news)); ?>
<img class="ui fluid image" src="http://lorempixel.com/g/940/200/">
<div class="ui justified text ab_container_actu actualites">
	<h1 class="ui center aligned header ab_titre_actu">{{$news->titre}}</h1>
	<p class="ab_date_actu">10 fevrier 1994 {{$news->created_at}}</p>
	<?php 
	echo html_entity_decode($news->contenu);
	?>
	<a class="page_article" x-script="page_article" href="actualites.html">
		<button class="ui button ab_bouton_actu">
			Retour aux articles
		</button>
	</a>
	</div>

@endsection