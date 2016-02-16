@extends('layout')

@section('content')

<div class="container">
    <div class="ui segment equal width center aligned padded ">
        <h2 class="accueil-titre-h2">Nous contacter</h2>
    </div>
    <div class="ui stackable equal width center aligned padded grid cards">
        <div class="ui card ">
            <div class="image">
                <img src="img/er2c-contact.png"  alt="Logo de l'Ecole Régionale de la Deuxième Chance">
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
                <img src="img/simplon-contact.png"  alt="Logo de Simplon Midi-Pyrénées">
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
    <div class="ui  equal width center aligned padded grid">
        <a href="http://osm.org/go/xVH~ues_8-?layers=Q&m=&node=2011456546">
            <img class="mh-map ui segment big image ui grid" src="img/map.jpg" alt="Carte indiquant l'Ecole Régionale de la Deuxième Chance">
        </a>
    </div>
    <div class="mh-contener ui centered grid">
        <div class="ui form segment mh-FondDesBlocks">
            <div class="two fields">
                <div class="field">
                    <label>Prénom Nom</label>
                    <input placeholder="Prénom Nom" type="text">
                </div>
                <div class="field">
                    <label>E-mail</label>
                    <input placeholder="E-mail" type="email">
                </div>            
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