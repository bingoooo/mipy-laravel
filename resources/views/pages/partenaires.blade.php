@extends('layout')

@section('content')

<div class="ui container ph-global">
    <h1 class="ui one column center aligned header">Partenaires</h1>
  <div class="ui vertically divided container stackable grid">
    <div class="ui two column row">
      <div class="sixteen wide tablet twelve wide computer column ">
       <p> Devenir partenaire de Simplon-MIP c’est faire le parti de l’#openinnovation et de l’apprentissage permanent. <br>
        Nous nous développons avec des entreprises qui nous font confiance et  souhaitent faire le pari de l’innovation partagée. <br>
        <br>
        Associez-vous à une marque puissante et référente dans les univers tech – innovation sociale – diversité/inclusion, et à sa “touch” spécifique pour mener des actions qui ont du sens, et profitez :
        <br> <br>
        #d’une approche technique autant vulgarisée qu’utile <br>
        #des coûts maîtrisés pour des actions qui ont un sens pédagogique et social <br>
        #d’une utilisation de la diversité (âges, origines, approches) au service de l’innovation (tech, sociale et RH)
        ​</p>
      </div>

      <div class="eight wide centered tablet four wide computer column ">
        <p>Vous voulez devenir partenaire de Simplon.co et développer avec nous l'innovation pour tous ?</p>
        <a class="huge ui red bottom attached button" tabindex="0" href="mailto:xxxxxxxxx@gmail.com
        ?subject=objet&body=Bonjour" id="partenaire">Ecrivez-nous!</a>
      </div>
    </div>  ​
  </div>

  <div class="titre-partenaire">
    <h2 class="ui header">Tous les jours ils font SimplonMIP avec nous</h2>
  </div>  
  <div class="ui contener ">
    <div class="ui three column grid ">
      <div class="column ph-centre"> 
        <div class="ui small image">
          <img src="/img/logo-crv.png" class="backgroundPartenaire" alt="logo cours Rousselot Voltaire">
          <div class="content">
            <a class="header ph-partenaire"href="http://www.rousselot-voltaire.com">Cours Rousselot Voltaire</a>
          </div>
        </div>
      </div>
      <div class="column ph-centre" >
        <div class="ui small image" >
          <img src="/img/logo-etincelle-coworking.png" class="backgroundPartenaire " alt="logo Etincelle Coworking">
          <div class="content">
            <a class="header" href="http://www.coworking-toulouse.com">Etincelle Coworking</a>
          </div>
        </div>
      </div>
      <div class="column ph-centre">
        <div class="ui small image">
          <img src="/img/logo-lamelee.png" class="backgroundPartenaire" alt="logo La Melee">
          <div class="content">
            <a class="header" href="http://www.lamelee.com">la Mêlée </a>
          </div>
        </div>
      </div>
    </div>
  </div> 

<div class="titre-partenaire">
    <h2 class="ui header">Les intervenants</h2>
  </div> 
  <div class="ui contener ">
    <div class="ui two column grid ">
      <div class="column ph-centre"> 
        <div class="ui small image">
          <img src="/img/logo-occitech.jpg" class="backgroundPartenaire" alt="logo Occitech">
          <div class="content">
            <a class="header ph-partenaire"href="http://www.occitech.fr/">Occitech</a>
          </div>
        </div>
      </div>
      <div class="column ph-centre" >
        <div class="ui small image" >
          <img src="/img/logo-myopencity.png" class="backgroundPartenaire " alt="logo Myopencity">
          <div class="content">
            <a class="header" href="http://www.myopencity.fr">Myopencity</a>
          </div>
        </div>
      </div>
    </div>
  </div> 



</div>

@endsection