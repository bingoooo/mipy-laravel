@extends('layout')

@section('content')

<div class="ui container" id="page-promo">
	<!-- segment contenent  h1 -->

	<div class="ui equal width center aligned padded grid" id="">
		<div class="sixteen wide column">
			<div class="row">
				<h1 class="ui dividing header" tabindex="0">Promo 2016</h1>	
			</div>
		</div>
	</div>
	<!-- ligne de 4 images sur une rangée-->
	<div id="sm-cards" class="ui four stackable cards"> 
		<script id="cardTemplate" type="text/plain">
			<!--chargement des photos avec boucle moustache -->

			@{{# users}} 
			<a href="#">
				<div class="card sm-card">
					<div class="sm-card-images" >
						<img class="sm-card-image-top" src="@{{portrait}}">
						<img class="sm-card-image-hover" src="@{{overlay}}">
					</div>
					<div class="sm-card-extra">
						<h5 class="header seb-identite">@{{id}} 
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