@extends('layout')

@section('content')

<div class="fg-hero">
  <!-- <p class="fg-hero-text">In Code We Trust !</p> -->
  <div class="container"> 
      <div class="os-phrases" id="os-phrases">
        <h2>In</h2>
        <h2>Code</h2>
        <h2>We</h2>
        <h2>Trust</h2>
        <h2>&lsaquo; ! /&rsaquo;</h2>
        <h2>Simplon</h2>
        <h2>Midi-Pyrénées</h2>
      </div>
    </div>
</div>

<div class="ui two column doubling stackable grid container smp-margin">
  <h2 class="accueil-titre-h2" title="Simplon, réseau de fabriques sociales du numérique">Simplon, réseau de fabriques sociales du numérique</h2>
  <div class="column">
    <div class="ui inverted segment">
      <p>Simplon.co est un réseau de fabriques sociales du numérique qui propose des formations intensives pour apprendre à créer des sites web et des applications mobile, et en faire son métier. La formation s’adresse prioritairement aux jeunes de moins de 25 ans, non diplômés ou peu diplômés, issus des quartiers populaires et des milieux ruraux, mais également aux demandeurs d’emploi en reconversion ainsi qu’aux femmes et aux séniors, populations insuffisamment représentées dans les métiers techniques. Les formations Simplon.co sont soit gratuites et qualifiantes, soit rémunérées et certifiantes , et bien sûr ouvertes à tous, pourvu que la motivation soit au rendez-vous !</p>
      <div class="ui inverted divider"></div>
        <p> Aujourd’hui, l’école s’installe à Toulouse, pour son dynamisme et ses nombreuses opportunités d’emploi dans le numérique.
        Apprendre à coder en 6 mois, c’est possible avec la nouvelle fabrique sociale du numérique Simplon Midi-Pyrénées!</p>
    </div>
  </div>
  <div class="column">
    <img class="photo-contenu" src="/img/code-b.jpg" title="photo d'un code" alt="photo d'un code">
  </div>
</div>
<div class="ui one column doubling stackable grid container">
  <h2 class="accueil-titre-h2" title="notre actualité">Actualités</h2>
  <p>
    Pour son 1er meetup, Simplon Midi-Pyrénées a l'honneur d'accueillir Jean-Pierre Lesueur, Président de Phrozen Software, une entreprise spécialisée dans la sécurité informatique.
    </br>
    Webmaster, startup, développeur voire simple curieux, ce meetup peut vous intéresser #web #security #code #NSA 
  </p>
</div>
<div class="titre-partenaire">
    <h2 class="accueil-titre-h2" title="nos partenaires">Partenaires</h2>
  </div>  
  <div class="ui contener ">
    <div class="ui three column grid ">
      <div class="column ph-centre"> 
        <div class="ui small image">
          <img src="/img/crv-partenaires.png" class="backgroundPartenaire" title="logo cours Rousselot Voltaire"alt="logo cours Rousselot Voltaire">
          <div class="content">
            <a class="header ph-partenaire"href="http://www.rousselot-voltaire.com">Cours Rousselot Voltaire</a>
          </div>
        </div>
      </div>
      <div class="column ph-centre" >
        <div class="ui small image" >
          <img src="/img/etincelle-partenaires.png" class="backgroundPartenaire " title="logo Etincelle Coworking"alt="logo Etincelle Coworking">
          <div class="content">
            <a class="header" href="http://www.coworking-toulouse.com">Etincelle Coworking</a>
          </div>
        </div>
      </div>
      <div class="column ph-centre">
        <div class="ui small image">
          <img src="/img/lamelee-partenaires.png" class="backgroundPartenaire" title="logo La Melée"alt="logo La Melée">
          <div class="content">
            <a class="header" href="http://www.lamelee.com">la Mêlée </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection