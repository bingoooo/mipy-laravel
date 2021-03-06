<!doctype html>
<html class="no-js" lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Simplon MIP</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Text Opening Sequence with CSS Animations" />
  <meta name="keywords" content="text, opening sequence, opening credits, css animations, typography, lettering.js" />
  <meta name="author" content="Codrops" />
  <link rel="shortcut icon" href="../favicon.ico"> 
  <link rel="stylesheet" type="text/css" href="./css/default.css" />
  <link rel="stylesheet" type="text/css" href="./css/component.css" />
  <script src="js/modernizr.custom.js"></script>
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" type="text/css" href="./css/semantic.min.css">
  <link rel="stylesheet" href="./css/main.css">
</head>
<body>

  <div id="main_menu" class="animated ui top fixed inverted pointing menu j-menu-main headroom--not-top">

    <a class="j-menu-logo" href="/">&nbsp</a>

    <div class="ui grid">

      <div class="computer tablet only row">
        <div class="ui inverted fixed menu navbar page grid"  id="main-menu" >
          <div class="right menu">     
            <a class="item menu-item" href="formation.html"><i class="edit icon"></i> Formation</a>
            <a class="item menu-item" href="actualites.html"><i class="newspaper icon"></i> Actu & events</a>
            <a class="item menu-item" href="emploi.html"><i class="users icon"></i>Emploi</a>
            <a class="item menu-item" href="contact.html"><i class="icon mail"></i></a>
          </div>
        </div>
      </div>

     <div class="mobile only row">
        <div class="ui fixed inverted navbar menu">
          <a class="j-menu-logo" href="/">&nbsp</a>
          <div class="right menu open">
            <a href="/" class="menu item">
              <i class="content icon"></i>             
            </a>
          </div>
        </div>
        <div class="ui vertical navbar menu">
          <a class="item" href="/formation.html"><i class="edit icon"></i>Formation</a>
          <a class="item" href="/actualites.html"><i class="newspaper icon"></i>Actu & events</a>
          <a class="item" href="/emploi.html"><i class="users icon"></i>Emploi</a>
          <a class="item" href="/contact.html"><i class="icon mail"></i></a>
        </div>
      </div>

    </div>

  </div>

  @yield('content')

  <div class="ui stackable four column grid">
    <div class="column">
       <div class="vertical-menu-endpage">
         <a class="item menu-endpage" href="/">Accueil</a>
         <a class="item menu-endpage" href="/promotion.html">Promotions</a>
         <a class="item menu-endpage" href="/partenaires.html">Partenaires</a>
         <a class="item menu-endpage" href="/temoignage.html">Témoignages</a>
         <a class="item menu-endpage" href="/team.html">Équipe</a>
         <a class="item menu-endpage" href="/contact.html">Contact</a>
         <a class="item menu-endpage" href="/mentionslegales.html">Mentions légales</a>
      </div>

    </div>

    <div class="column">
      <p class="p-footer">Suivez notre actualité</p>
      <div class="ui form">
        <label class="two fields">
          <input type="text" placeholder="jane@doe.com"><button class="ui button icon"><a class="renvoi-contact" href="/contact.html"><i class="icon send"></i></a></button>
        </label>
      </div>
      <div class="ui stackable two column grid">
      <div class="ui medium images">
      <img class="medium ui image" src="./img/region-lrmp.jpg" alt="Logo Région Languedoc Roussillon Midi-Pyrénées" title="Logo Région Languedoc Roussillon Midi-Pyrénées">
      </div>
      <div class="ui tiny images img-responsive">
      <img class="tiny ui image img-responsive" src="./img/logo-er2c.png" alt="Logo Ecole de la deuxième chance" title="Logo Ecole de la deuxième chance">
      </div>
      </div>
    </div>

    <div class="column">
      <div class="bh-tweet">
        <i class="twitter blue icon"></i>
        SNCF Développement ‏@SNCFDev  18 janv.<br>
        Ça sera aujourd hui dans 10 minutes chez @simplon!
      </div>
    </div>

    <div class="column">
      <p class="p-footer">Simplon Midi-Pyrénées<br>
      <br>
       & <br>
      <br>
       <abbr title="Ecole de la deuxième chance">ER2C</abbr></p>

     <!--  <p class="p-footer adresse"><address class="p-footer">
        57 Allée de Bellefontaine<br>
        BP 13589 <br>
        31035 Toulouse<br>
        N° : 0534637980
      </address>
      </p> -->
      <div class="ui one column doubling stackable grid container">
      <a  class="p-footer link-mail-er2c" href="mailto:mailto:er2c@er2c-mip.com">er2c@er2c-mip.com</a>
      </div>
      <div class="ui inverted menu">
       <div class="ui grid">
        <div class="four column center row">
          <div class="column"> 
            <a href="https://github.com/SimplonTlse" class="item"><i class="github big icon" title="Logo GitHub"></i></a>
          </div>
          <div class="column">
            <a href="https://fr-fr.facebook.com/Simplon.co" class="item"><i class="facebook big icon" title="Logo Facebook"></i></a>
          </div>
          <div class="column">
            <a href="https://twitter.com/simplonMIP" class="item"><i class="twitter big icon" title="Logo Twitter"></i></a>
          </div>
          <div class="column">
            <a href="#" class="item"><i class="google plus big icon" title="Logo Google Plus"></i></a>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="bh-copy footer-copyright">&copy; 2016 Simplon.co</div>

<!-- chargement des scripts -->
<script src="/js/app.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="/js/jquery.lettering.js"></script>
<script>
  $(document).ready(function() {
  $("#os-phrases > h2").lettering('words').children("span").lettering().children("span").lettering(); 
  })
</script>
<script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Open+Sans::latin', 'Fugaz+One::latin'/*, 'Ubuntu::latin'*/ ] }
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