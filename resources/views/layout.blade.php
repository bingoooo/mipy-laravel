<!doctype html>
<html class="no-js" lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Simplon MIP</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" type="text/css" href="/css/semantic.min.css">
  <link rel="stylesheet" href="/css/main.css">
</head>
<body>

  <div id="main_menu" class="animated ui top fixed inverted pointing menu j-menu-main headroom --not-top">

    <a class="j-menu-logo" href="/">&nbsp</a>

    <div class="ui grid">

      <div class="computer tablet only row">
        <div class="ui inverted fixed menu navbar page grid"  id="main-menu" >
          <div class="right menu">     
            <a class="item menu-item" href="/formation.html"><i class="edit icon"></i> Formation</a>
            <a class="item menu-item" href="/actualites.html"><i class="newspaper icon"></i> Actu & events</a>
            <a class="item menu-item" href="/emploi.html"><i class="users icon"></i>Emploi</a>
            <a class="item menu-item" href="/contact.html"><i class="icon mail"></i></a>
          </div>
        </div>
      </div>

      <div class="mobile only row">
        <div class="ui fixed inverted navbar menu">
          <a class="j-menu-logo" href="/">&nbsp</a>
          <div class="right menu open">
            <a href="" class="menu item">
              <i class="content icon"></i>             
            </a>
          </div>
        </div>

        <div class="ui vertical navbar menu">
          <a class="item" href="/formation.html"><i class="edit icon"></i> Formation</a>
          <a class="item" href="/actualites.html"><i class="newspaper icon"></i> Actu & events</a>
          <a class="item" href="/emploi.html"><i class="users icon"></i>Emploi</a>
          <a class="item" href="/contact.html"><i class="icon mail"></i></a>
        </div>

      </div>

    </div>

  </div>

  @yield('content')

  <div class="ui stackable four column grid">

    <div class="column">

       <div class="menu-endpage">
         <a class="item" href="/index.html">Accueil</a>
         <a class="item" href="/promotion.html">Promotions</a>
         <a class="item" href="/partenaires.html">Partenaires</a>
         <a class="item" href="/temoignage.html">Témoignages</a>
         <a class="item" href="/team.html">Équipe</a>
         <a class="item" href="/contact.html">Contact</a>
         <a class="item" href="#">Mentions légales</a>
      </div>

    </div>

    <div class="column">
      <p class="p-footer">Suivez notre actualité</p>
      <div class="ui form">
        <label class="two fields">
          <input type="text" placeholder="jane@doe.com"><button class="ui button icon"><i class="icon send"></i></button>
        </label>
      </div>
      <img class="medium ui image" src="/img/region-lrmp.jpg" alt="Logo Région Languedoc Roussillon Midi-Pyrénées">
      <img class="tiny ui image" src="/img/logo-er2c.png"alt="Ecole de la deuxième chance">
    </div>

    <div class="column">
      <div class="bh-tweet">
        <i class="twitter blue icon"></i>
        SNCF Développement ‏@SNCFDev  18 janv.<br>
        Ça sera aujourd hui dans 10 minutes chez @simplon!
      </div>
    </div>

    <div class="column">
      <p class="p-footer">Simplon & <abbr title="Ecole de la deuxième chance">ER2C</abbr></p>

      <p class="p-footer adresse"><address class="p-footer">
        57 Allée de Bellefontaine<br>
        BP 13589 <br>
        31035 Toulouse<br>
        N° : 0534637980
      </address>
      </p>

      <a  class="p-footer" href="mailto:mailto:er2c@er2c-mip.com">er2c@er2c-mip.com</a>

      <div class="ui inverted menu">
       <div class="ui grid">
        <div class="four column center row">
          <div class="column"> 
            <a href="https://github.com/SimplonTlse" class="item"><i class="github large icon"></i></a>
          </div>
          <div class="column">
            <a href="https://fr-fr.facebook.com/Simplon.co" class="item"><i class="facebook large icon"></i></a>
          </div>
          <div class="column">
            <a href="https://twitter.com/simplonMIP" class="item"><i class="twitter large icon"></i></a>
          </div>
          <div class="column">
            <a href="#" class="item"><i class="google plus large icon"></i></a>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="bh-copy">&copy; 2016 Simplon.co Midi-Pyrénées </div>

<!-- chargement des scripts -->

<script src="/js/app.js"></script>
<script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Open+Sans::latin'/*, 'Ubuntu::latin'*/ ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); </script>

</body>
</html>