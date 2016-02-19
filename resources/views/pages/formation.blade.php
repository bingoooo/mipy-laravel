@extends('layout')

@section('content')

<h1 class="titre-formation" title="Formation">Formation</h1>

<div class="ui one column doubling stackable grid justified container">
	<h2>La formation Developpeur Web à Simplon.co c’est quoi ?</h2>
	<p>L'objectif de la formation est de savoir créer des sites et applications web dans six mois ! L'apprentissage est basé sur la pratique, notamment en réalisant divers projets de groupes. La formation est ouverte à tous, et donne la priorité à des profils encore peu représentés dans le domaine : non-diplômés, demandeurs d’emploi, bénéficiaires de minima sociaux, personnes originaires de quartiers prioritaires, zones rurales, objectif de parité hommes-femmes. Et ce car il n’y a plus besoin d’être ingénieur ou très diplômé pour programmer</p>
	<p>La sélection se fait sur la motivation et l’envie de travailler en équipe ! Un écosystème riche comprenant une communauté de mentors, de professionnels et bénéficie du soutient de nombreux partenaires.</p>
	<br>
</div>	
<div class="ui one column doubling stackable grid justified container">
    <img class="img-formation" src="/img/Code-c.jpg" alt="Photo Code Web" title="Image Code Web">
</div>
<div class="ui one column doubling stackable grid justified container">
	<div class="ui inverted segment">
  		<h2>Quel programme en 6 mois de formation ?</h2>
  		<p>Simplon propose un programme complet. En passant par le développement « front-end » (ce que l’on voit à l’écran), le développement « back-end » (les coulisses, les fonctionnalités), l’administration systèmes sous Linux, la programmation d’objets connectés, la gestion de projet et la conception d’interfaces. Depuis Novembre 2015, il est possible de faire certifier sa formation au travers d’un titre professionnel inscrit au RNCP (Développeur logiciel, niveau III)</p>
  		<div class="ui inverted divider"></div>
  		<p>L'objectif étant de permettre aux simploniens de devenir rapidemment de nouveaux développeurs et d'être autonome, de nombreuses compétences et méthodes de travail leur sont transmises. Des compétences techniques telles que HTML, CSS et Javascript pour le front-end, PHP et NodeJS pour le back-end. Mais également des outils de gestion de projet (Git, Github, Slack...) et des méthodes de travail (méthodologies agiles, le pair programming...).</p>
	</div>
</div>
<div class="ui one column stackable grid justified container button-formation">
	<div class="ui large buttons formdev">
  		<a class="formdev" href="/formdev.html"><button class="ui button formdev">Formation Développement Web</button></a>
	</div>
</div>
<div class="ui one column doubling stackable grid justified container  button-formation">
	<div class="ui large buttons java">
  		<a class="formjava" href="/formjava.html"><button class="ui button formjava">Formation Java</button></a>
	</div>
</div>

@endsection