@extends('layout')

@section('content')

<div class="container">
<div class="ui segment equal width center aligned padded ">
    <h1 class="titre-formation contact"title="Nous contacter">Nous contacter</h1>
</div>
<div class="ui stackable equal width center aligned padded grid cards">
    <div class="ui card ">
        <div class="image">
            <img src="img/er2c-contact.png"  title="logo de l'école de la deuxieme chance" alt="logo de l'école de la deuxieme chance de toulouse">
        </div>
        <div class="content renseignement">
            <h2 class="header">Ecole Régionale de la Deuxième Chance</h2>
            <div class="adresse">
                <p>
                    57 Allée de Bellefontaine<br>
                    BP 13589 <br>
                    31035 Toulouse<br>
                    N° : 0534637980</p>
                </div>
                <a href="mailto:er2c@er2c-mip.com">er2c@er2c-mip.com</a>
            </div>
        </div>
        <div class="ui card ">
            <div class="mh-photo image">
                <img src="img/simplon-contact.png" title="logo de simplon midi-pyrénnées" alt="logo de simplon midi-pyrénnées">
            </div>
            <div class="content">  
            <h3 class="header">Jean François KAPPES</h3>
                <div class="adresse">
                    <p>Directeur <br>de Simplon MIP
                        <br>N° : 0676450629
                    </p>
                </div>
                <a href="mailto:jfkappes@simplon.co">jfkappes@simplon.co</a>
            </div>
        </div>
    </div>
</div>
<div class="ui  equal width center aligned padded grid">
    <a href="http://osm.org/go/xVH~ues_8-?layers=Q&m=&node=2011456546">
        <img class="mh-map ui segment big image ui grid" title="openstreetmap emplacement de l'école de la deuxième chance"src="img/map.jpg">
    </a>
</div>
<div class="ui one column doubling stackable grid container">
    <form action="send" method="POST" class="ui inverted segment formulaire-contact">
    <input type="text" style="display:none" name="name" value="">
    <input type="text" style="display:none" name="database" value="message">
    {{csrf_field()}}
    <div class="ui inverted form">
        <div class="two fields">
            <div class="field">
                <label for="prenom">Votre Prénom</label>
                <input id="prenom" placeholder="Votre Prénom" type="text" name="prenom">
            </div>
            <div class="field">
                <label for="nom">Votre Nom</label>
                <input id="nom" placeholder="Votre Nom" type="text" name="nom">
            </div>
        </div>
        <div class="success">
            <div class="field">
                <label for="email">E-mail</label>
                <input id="email" type="email" placeholder="joe@schmoe.com" name="email" required="true">
            </div>
        </div>
        <div class="field">
            <div class="field">
                <label for="sujet">Sujet</label>
                <input id="sujet" type="text" name="sujet">
            </div>
        </div>
        
            <div class="field">
                <div class="field">
                    <label for="text">Votre Message</label>
                    <textarea name="avis" required="true"></textarea>
                </div>
            </div>
            <!-- <div class="ui submit button fluid">Envoyer</div> -->
            <button class="ui submit button fluid">Envoyer</button> 
        </div>
    </form>
</div>
 
@endsection