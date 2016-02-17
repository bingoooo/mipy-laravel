@extends('layout')

@section('content')

<div class="ui container" id="page-promo">
				<h1 class="titre-formation" title="Promo 2016">Promo 2016</h1>	
	<div id="sm-cards" class="ui four stackable cards"> 
		<script id="cardTemplate" type="text/plain">
			<!--chargement des photos avec boucle moustache -->

			@{{# users}} 
			<a href="profile@{{id}}">
				<div class="card sm-card">
					<div class="sm-card-images" >
						<img class="sm-card-image-top" src="@{{portrait}}">
						<img class="sm-card-image-hover" src="@{{overlay}}">
					</div>
					<div class="sm-card-extra">
						<h5 class="header seb-identite">@{{name}} 
							<span class="seb-presentation">
								<br>D&eacuteveloppeur junior 
								<br>Dernier projet
							</span>
						</h5>
					</div>
				</div>
			</a>
			@{{/ users}}

		</script>
	</div>
</div>

@endsection