@extends('layout')

@section('content')

<div class="ui segment equal width center aligned padded">
    <h2><b>Contactez Nous</b></h2>
</div>
<div class="ui stackable equal width center aligned padded grid cards">
    <div class="card mh-FondDesBlocks">
        <div class="mh-photo image">
            <img src="img/ecolemodifier.jpg"  alt="image exterieur de l'école de la deuxieme chance de toulouse">
        </div>
        <div class="content">
            <h2 class="header">Ecole Régionale de la Deuxième Chance</h2>
            <div class="meta">
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
    <div class="card mh-FondDesBlocks">
        <div class="mh-photo image">
            <img src="img/Jfkmodifier.jpg"  alt="image de Jean François KAPPES">
        </div>
        <div class="content">  
            <h3 class="header">Jean François KAPPES</h3>
            <div class="meta">
                <p>
                    Directeur Général <br>de Simplon MIP
                    <br>N° : 0676450629
                </p>
            </div>
            <a href="mailto:jfkappes@simplon.co">jfkappes@simplon.co</a>
        </div>
    </div>
</div>

<div class="ui  equal width center aligned padded grid">
    <a href="http://osm.org/go/xVH~ues_8-?layers=Q&m=&node=2011456546">
    <img class="mh-map ui segment big image ui grid" src="img/map.jpg">
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
                <label>email</label>
                <input placeholder="email" type="email">
            </div>
            
        </div>
        <div class="field">
                <label>Message</label>
                <textarea name="message" id="mh-message" cols="30" rows="10"></textarea>
                <button class="ui red button mh-bouton" type="submit">Envoyer</button>
            </div>
    </div>

</div>

@endsection