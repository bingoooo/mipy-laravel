@extends('layout')

@section('content')

<div class="rl-container">
	<div class="ui fullscreen modal rl-modal">
		<i class="rl-croix huge close icon "></i>
		<div class="header">
			<i class="rl-crayon write icon"></i>
			Rédigez votre annonce !
		</div>
		<div class="content">
			<div class="ui form">
				<div class="field">
					<textarea></textarea>
				</div>
				<div class="field of dave">
					<div class="ui checkbox">
						<input type="checkbox" checked="checked" name="contact-me">
						<label>Je suis employeur.</label>
					</div>
				</div>
			</div>
		</div>
		<div class="actions">
			<div class="ui labeled icon green button rl-envoyer">Envoyer<i class=" send icon"> </i></div>
		</div>
	</div>
	<div class="ui center aligned container stackable grid rl-grid"> 
		<div class="column row">
			<section id="main" class="rl-titres"</section>
				<h1>Recherches et offres d'emploi</h1>
				<h3>Vous êtes recruteur ? <br>
				Vous recherchez un emploi ?<br>
				Vous êtes au bon endroit !<br><br></h3>
		</div>
		<div class="column row">
			<button class="ui massive red button rl-grobouton">
				Déposer une annonce 
			</button>
		</div>
		<div class="two column row">
			<div class="column">
				<div class="ui segments">
					<div class="rl-propose ui  segment">
						<h2>Je propose</h2>
					</div>
					<div class="rl-annonces ui segment bloc annonces">
						<div class="ui feed">
							<div class="event">
								<div class="label">
									<img src="http://lorempixel.com/60/60/">
								</div>
								<div class="content">
									<div class="summary">
										<a>Dave Johnson</a> Titre de l'annonce
										<div class="date">
											Le 15/06/2016
										</div>
									</div>
									<div class="extra text">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Bonjour je suis Louis et j'aimerais travailler. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum .
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="rl-annonces ui segment bloc annonces">
						<div class="ui feed">
							<div class="event">
								<div class="label">
									<img src="http://lorempixel.com/60/60/">
								</div>
								<div class="content">
									<div class="summary">
										<a>Dave Johnson</a> Titre de l'annonce
										<div class="date">
											Le 15/07/2016
										</div>
									</div>
									<div class="extra text">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Bonjour je suis Louis et j'aimerais travailler. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum .
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="rl-annonces ui segment bloc annonces">
						<div class="ui feed">
							<div class="event">
								<div class="label">
									<img src="http://lorempixel.com/60/60/">
								</div>
								<div class="content">
									<div class="summary">
										<a>Dave Johnson</a> Titre de l'annonce
										<div class="date">
											Le 15/06/2016
										</div>
									</div>
									<div class="extra text">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Bonjour je suis Louis et j'aimerais travailler. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum .
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="ui segments">
					<div class="rl-cherche ui segment">
						<h2>Je cherche</h2>
					</div>
					<div class="rl-annonces ui segment bloc annonces">
						<div class="ui feed">
							<div class="event">
								<div class="label">
									<img src="http://lorempixel.com/60/60/">
								</div>
								<div class="content">
									<div class="summary">
										<a>Dave Johnson</a> Titre de l'annonce
										<div class="date">
											Le 15/06/2016
										</div>
									</div>
									<div class="extra text">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Bonjour je suis Louis et j'aimerais travailler. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum .
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="rl-annonces ui segment bloc annonces">
						<div class="ui feed">
							<div class="event">
								<div class="label">
									<img src="http://lorempixel.com/60/60/">
								</div>
								<div class="content">
									<div class="summary">
									<a>Dave Johnson</a> Titre de l'annonce
										<div class="date">
											Le 15/06/2016
										</div>
									</div>
									<div class="extra text">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Bonjour je suis Louis et j'aimerais travailler. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum .
									</div>
								</div>
							</div>
						</div>
					</div>						
				</div>
			</div>
		</div>
	</div>
</div>

@endsection