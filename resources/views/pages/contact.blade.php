@extends('layout')

@section('content')

<div class="container">
<div class="ui segment equal width center aligned padded ">
    <h1 class="titre-formation contact"title="Nous contacter">Nous contacter</h1>
</div>
<div class="ui stackable equal width center aligned padded grid cards">
    <div class="ui card ">
        <div class="image">
            <img src="img/er2c-contact.png"  title="logo de l'école de la deuxieme chance" 7alt="logo de l'école de la deuxieme chance de toulouse">
        </div>
        <div class="content renseignement">
            <h2 class="header">Ecole Régionale de la Deuxième Chance</h2>
            <div class="adresse">
                <p>
                    57 Allée de Bellefontaine<br>
                    BP 13589 <br>
                    31035 Toulouse<br>
                    N° : 0534637980
                </p>
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
                    <p>
                        Directeur <br>de Simplon MIP
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
<div class="mh-contener ui centered grid">
    <div class="ui form segment mh-FondDesBlocks">
        <div class="two fields">
            <div class="field">
                <label>Prenom Nom</label>
                <input placeholder="Prenom Nom" type="text">
            </div>
            <div class="field">
                <label>Message</label>
                <textarea name="message" id="mh-message" cols="30" rows="10"></textarea>
                <button class="ui red button mh-bouton" type="submit">Envoyer</button>
            </div>
        </div>
    </div>
</div>

@endsection