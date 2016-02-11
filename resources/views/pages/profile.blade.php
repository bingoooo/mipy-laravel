@extends('layout')

@section('content')

<div id="page-profile">
  <div id="to-profile">
  </div>
</div>


<script id="profilepage" type="text/html">
<div class="ui equal width center aligned padded grid" id="to_bandeau">
 <div class="row">
   <div class="column ">
     <div class="to ui centered medium image " style="background-image: url({{portrait}})" alt="photo_de_profile"> </div> &nbsp;
     <h1>{{id}}</h1>
     <h2>{{occupation}}</h2>
   </div>
 </div>
 </div>
 <div class="ui grid container stackable">
<div  class="three wide column"></div>
<div class="ten wide column ui menu to projets_en_cours to bio">
 <h2 class="ui horizontal divider">Projets en cours</h2>
 <ul class="to liste">
   <a class="to link_projets" href="https://github.com/nemo75/mipy-front"><li class="to list_projet">Participation a la creation du site SimplonMIP</li></a>
   <a class="to link_projets" href="https://github.com/nemo75/mipy-front"><li class="to list_projet">Creation d'une ProfilPage</li></a>
   <a class="to link_projets" href="https://github.com/nemo75/mipy-front"><li class="to list_projet">Site pour une association</li></a>
   <a class="to link_projets" href="https://github.com/nemo75/mipy-front"><li class="to list_projet">Creation d'une Startup dans le cadre du challenge inter Simplon </li></a>
 </ul>
 </div>
 <div class="three wide column centered">
<div class="ui vertical fluid menu">
 <nav>
   <a href"{{github}}" class="item"><i class="github alternate icon"></i>Github</a>
   <a href"{{linkedin}}" class="item"><i class="linkedin icon"></i>Linkedin</a>
   <a href"{{website}}" class="item"><i class="desktop icon"></i>Site perso</a>
 </nav>
 </div>
</div>
<div class="ten wide column centered  ui menu bio">
 <h2 class="ui horizontal divider ">Biographie</h2>
 <p class="bio_paragraphe">{{biographie}}</p>
</div>
</div>
</script>

@endsection