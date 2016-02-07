<!doctype html>
<html class="no-js" lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Simplon MIP</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/semantic.min.css">
  <link rel="stylesheet" href="/css/main.css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans|Ubuntu' rel='stylesheet' type='text/css'>
</head>
<body>

<div id="main_menu" class="animated ui top fixed inverted pointing menu j-menu-main headroom--not-top">

  <a class="j-menu-logo" href="/">&nbsp</a>

  <div class= "right menu">
    <a class="item" href="/formation.html"><i class="edit icon"></i> Formation</a>
    <a class="item" href="/actualites.html"><i class="newspaper icon"></i> Actu & events</a>
    <a class="item" href="/emploi.html"><i class="users icon"></i>Emploi</a>
    <a class="item" href="/contact.html"><i class="icon mail"></i> Contact</a>
  </div>
</div>

  @yield('content')


<div class="ui bottom fixed attached centred inverted segment">
  <div class="ui grid">
    <div class="ui three wide column">
      <div class= "ui inverted secondary pointing fluid vertical menu menu-footer">
        <a class="item" href="/index.html">Accueil</a>
        <a class="item" href="/promotion.html">Promotions</a>
        <a class="item" href="/partenaires.html">Partenaires</a>
        <a class="item" href="/temoignage.html">Témoignages</a>
        <a class="item" href="/team.html">Équipe</a>
        <a class="item" href="/contact.html">Contact</a>
        <a class="item" href="#">Mentions légales</a>
      </div>
    </div>
    <div class="ui four wide column">
      <!--News Letter-->
      <p>Suivez notre actualité</p>
      <div class="ui form">
        <label class="two fields">
          <input type="text" placeholder="jane@doe.com"><button class="ui button icon"><i class="icon send"></i></button>
        </label>
      </div>
    </div>
    <div class="ui five wide column">
      <!--twitter-->
      <div class="bh-tweet">
        <i class="twitter blue icon"></i>
        SNCF Développement ‏@SNCFDev  18 janv.<br>
        Ça sera aujourd hui dans 10 minutes chez @simplon!
      </div>
    </div>
    <div class="ui four wide column">
      <!--Contact-->
        <p>Simplon & <abbr title="Ecole de la deuxième chance">ER2C</abbr></p>
        <p><address>
          
              57 Allée de Bellefontaine<br>
              BP 13589 <br>
              31035 Toulouse<br>
        </address>
            N° : 0534637980
        </p>
        <a href="mailto:mailto:er2c@er2c-mip.com">er2c@er2c-mip.com</a>
        <div class="ui inverted menu right">
          <a href="#" class="item"><i class="github huge icon"></i></a>
          <a href="#" class="item"><i class="facebook huge icon"></i></a>
          <a href="#" class="item"><i class="twitter huge icon"></i></a>
        </div>
    </div>
    <div 
  </div>
</div>
<div class="bh-copy">&copy; 2016 Simplon.co Midi-Pyrénées </div>

<!-- chargement des scripts -->
<script src="/js/app.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73444909-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>