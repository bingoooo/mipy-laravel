@extends('layout')

@section('content')

<img class="ui fluid image" src="http://lorempixel.com/g/940/200/">
<div class="ui justified text ab_container_actu actualites">
	<h1 class="ui center aligned header ab_titre_actu">Start'up Week !</h1>
		<p class="ab_date_actu">10 fevrier 1994</p>
		<p>ACTU MEET UP Le 26 janvier 2015 aura lieu le 1er MEET-UP organisé par Simplon Midi-Pyrénées, cette rencontre sera suivi d'échanges 	entre les participants, de rencontres et de discussions.
		A cette occasion, Simplon a l'honneur d'accueillir Jean-Pierre Lesueur, Président de Phrozen Software, une entreprise spécialisée dans la sécurité informatique.
		Webmaster, startup, développeur voire simple curieux, ce meetup peut vous intéresser #web #security #code #NSA
		Il reviendra sur son parcours et ses passions dans l'informatique.
		</p>
		<p>Ses projets dans la sécurité :</p>
	<h3>- Vertex NET :</h3><p> un programme permettant de comprendre comment les botnets fonctionnent et contaminent le web,DarkComet RAT : démo live</p>
	<h3>- Phrozen SAS : </h3><p>notre expertise, nos process et notre produit phare (... encore secret ...). Les enjeux de la sécurité dans le web, ses failles et les bonnes pratiques et exemples concret.</p>
	<p>Ce MEET-UP aura lieu à ETINCELLE COWORKING à partir de 18H30 au 1 rue Bouquières, quartier des Carmes.</p>
	<a href="http://www.meetup.com/Simplon-Midi-Pyrenees/events/228088513/">Inscrivez-vous ici</a>
	</p>
	<a class="page_article" x-script="page_article" href="actualites.html">
		<button class="ui button ab_bouton_actu">
			Retour aux articles
		</button>
	</a>
</div>

@endsection