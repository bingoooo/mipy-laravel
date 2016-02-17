@extends('layout')

@section('content')

<div class="container">
    <h1 class="titre-formation" title="Équipe">Équipe</h1>
	<div class="ui three column stackable centered grid container smp-padding">
		<div class="column nopadding as-card">
			<img src="./img/JFk.jpg" class="as-card-image" title="photo de Jean-François Kappes Directeur régional" alt="photo de Jean-François Kappes Directeur régional">
				&nbsp;
		</div>
			<div class="column nopadding as-card">
				<div class="ui attached segment as-card-description">
					<h3 class="ui dividing header">Jean-François Kappes</h3>
					<h4>Directeur régional</h4>
					<p>Simplon Midi-Pyrénées est une des fabriques sociales de Simplon.co, portée par l’École Régionale de la 2e Chance Midi-Pyrénées. 
					École Régionale du Numérique, Candidate à labelisation Grande École du Numérique .
					Faire du numérique un levier d’inclusion, d’insertion, de mixité et d’innovation sociale.
					#einclusion #empowerment #diversité #ess #socent #InCodeWeTrust</p>
				</div>
			</div>
		<div class="four column centered row">
			<div class="five wide column">
				<div class="ui attached segment">
					<img class="ui medium image" src="./img/amine.jpg" title="Amine El Ghayate Formateur Facilitateur "alt="photo d'Amine El Ghayate Formateur Facilitateur">
				</div>
				<div class="ui attached segment">
					<h3 class="ui dividing header">Amine El Ghayate</h3>
					<h4>Formateur Facilitateur</h4>
				</div>
			</div>

			<div class="five wide column">
				<div class="ui attached segment">
					<img class="ui medium image" src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/p/2/005/0a1/265/221a113.jpg"title="photo de Maxime Pawlak Formateur Facilitateur"alt="photo de Maxime Pawlak Formateur Facilitateur">
				</div>
				<div class="ui attached segment">
					<h3 class="ui dividing header">Maxime Pawlak</h3>
					<h4>Formateur Facilitateur</h4>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection