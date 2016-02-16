@extends('layout')

@section('content')
    <img class="ui fluid image" src="http://lorempixel.com/g/940/200/">
    <?php echo count($lastEvents); ?>
    @foreach($lastEvents as $event)
        <p>{{$event->titre}}</br>
        {{$event->updated_at}}
        </p>
    @endforeach
    <h1 class="ui center aligned header ab_titre_actu">{{$lastNews->titre}}</h1>
    <p class="ab_date_actu">{{$lastNewsForDays}} <?php echo date('d D M Y', strtotime($lastNews->event_date)); ?></p>
<div class="ui justified container actualites">
    <div class="ab_container_actu">
        <?php echo html_entity_decode($lastNews->contenu); ?>
        <a class="page_article" x-script="page_article" href="article{{$lastNews->id}}.html">
        <button class="ui centered labeled icon button ab_bouton_actu">
        <i class="right arrow icon"></i>
        En savoir plus
        </button>
        </a>
    </div>
        <br>
    <h2 class="ui horizontal divider header">Evènements à venir</h2>
    <div class="ui vertically divided container stackable grid">
        <div class="ui three column row">
            <div class="column">
                <div class="ui basic segment">
                    <img class="ui fluid image" src="http://lorempixel.com/g/500/200/">
                    <h3>Le site Simplon Midi-Pyrénées est en ligne !</h3>
                    <p>Le nouveau site de Simplon Midi-Pyrénées est disponible.nRéalisé avec soin par la première promotion de Midi-Pyrénées, celui-ci vous fera découvrir la formation dans son ensemble et vous amènera à vous rapprocher des différents acteurs du monde numérique sur la région. 
                    Toutes les compétences et connaissances acquises depuis le début de la formation ont été mises en oeuvre! La gestion de projet, HTML, CSS, travail d'équipe, utilisation de git, création du logo et des contenus… 
                    Le site contient notamment des informations précises sur la formation, la promotion, les emplois et les contacts. Il permettra également à cette première promotion de montrer de quoi elle est capable ! </p>
                    <br>
                    <button class="ui right labeled icon button">
                      <i class="right arrow icon"></i>
                      En savoir plus
                  </button>
                </div>
            </div>
            <div class="column">
                <div class="ui basic segment">
                    <img class="ui fluid image" src="http://lorempixel.com/g/500/200/">
                    <h3 class="ab_titre_carte">C'est la rentrée !</h3>
                    <span class="ab_date_carte">Il y a 2 jours</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat, nulla in interdum gravida, tortor velit eleifend nulla, a consectetur ipsum mi et ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat, nulla in interdum gravida, tortor velit eleifend nulla, a consectetur ipsum mi et ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <br>
                    <button href="article.html" class="ui right labeled icon button ab_bouton_actu">
                        <i class="right arrow icon"></i>
                        En savoir plus
                    </button>
                </div>
            </div>
            <div class="column">
                <div class="ui basic segment">
                    <img class="ui fluid image" src="http://lorempixel.com/g/500/200/">
                    <h3 class="ab_titre_carte">Bonne année 2016 !</h3>
                    <span class="ab_date_carte">Il y a 3 jours</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat, nulla in interdum gravida, tortor velit eleifend nulla, a consectetur ipsum mi et ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat, nulla in interdum gravida, tortor velit eleifend nulla, a consectetur ipsum mi et ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <br>
                    <button class="ui right labeled icon button ab_bouton_actu">
                      <i class="right arrow icon"></i>
                      En savoir plus
                    </button>
                </div>
            </div>
        </div>
        <div class="ui three column row">
            <div class="column">
                <div class="ui basic segment">
                    <img class="ui fluid image" src="http://lorempixel.com/g/500/200/">
                    <h3 class="ab_titre_carte">Visite de l'UI/UX Designer Yun Zo</h3>
                    <span class="ab_date_carte">Il y a 4 jours</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat, nulla in interdum gravida, tortor velit eleifend nulla, a consectetur ipsum mi et ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat, nulla in interdum gravida, tortor velit eleifend nulla, a consectetur ipsum mi et ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <br>
                    <button class="ui right labeled icon button ab_bouton_actu">
                      <i class="right arrow icon"></i>
                      En savoir plus
                    </button>
                </div>
            </div>
            <div class="column">
                <div class="ui basic segment">
                    <img class="ui fluid image" src="http://lorempixel.com/g/500/200/">
                    <h3 class="ab_titre_carte">Intervention de notre parrain Gregory Estrade à Simplon Midi Pyrénées</h3>
                    <span class="ab_date_carte">Il y a deux semaines</span>
                    <p>Entrepreneur et developpeur de haut niveau Gregory Estrade est le parrain de notre promotion. Egalement directeur de l'innovation chez Lyra Network, Grégory est doté d'un parcours impressionant et est prêt à partager son savoir avec les simploniens de Midi-Pyrénées.  Il intervient régulièrement au sein de la formation et se préoccupe des projets de chacun</p>
                    <br>
                    <button class="ui right labeled icon button ab_bouton_actu">
                      <i class="right arrow icon"></i>
                      En savoir plus
                    </button>
                </div>
            </div>
            <div class="column">
                <div class="ui basic segment">
                    <img class="ui fluid image" src="http://lorempixel.com/g/500/200/">
                    <h3 class="ab_titre_carte">On change de local pour les vacances !</h3>
                    <span class="ab_date_carte">Il y a 1 mois</span>
                    <p>Le lycée Gallieni, l'établissement qui nous accueille, étant fermé lors des vacances de Noël, le Cours Rousseau Voltaire nous a cordialement prêté ses locaux.Visitez le centre: <a href="http://rousselot-voltaire.com/">http://rousselot-voltaire.com/</a></p>
                    <br>
                    <button class="ui right labeled icon button ab_bouton_actu">
                      <i class="right arrow icon"></i>
                      En savoir plus
                    </button>
                </div>
            </div>
        </div>
        <div class="three column row">
            <div class="column">
                <div class="ui basic segment">
                    <img class="ui fluid image" src="http://lorempixel.com/g/500/200/">
                    <h3 class="ab_titre_carte">Conférence sur l'accessibilité sur le web</h3>
                    <span class="ab_date_carte">Il y a 3 mois</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat, nulla in interdum gravida, tortor velit eleifend nulla, a consectetur ipsum mi et ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat, nulla in interdum gravida, tortor velit eleifend nulla, a consectetur ipsum mi et ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <br>
                    <button class="ui right labeled icon button ab_bouton_actu">
                      <i class="right arrow icon"></i>
                      En savoir plus
                    </button>
                </div>
            </div>
            <div class="column">
                <div class="ui basic segment">
                    <img class="ui fluid image" src="http://lorempixel.com/g/500/200/">
                    <h3 class="ab_titre_carte">Prise de connaissance du métier</h3>
                    <span class="ab_date_carte">Il y a 6 mois</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat, nulla in interdum gravida, tortor velit eleifend nulla, a consectetur ipsum mi et ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat, nulla in interdum gravida, tortor velit eleifend nulla, a consectetur ipsum mi et ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <br>
                    <button class="ui right labeled icon button ab_bouton_actu">
                      <i class="right arrow icon"></i>
                      En savoir plus
                    </button>
                </div>
            </div>
            <div class="column">
                <div class="ui basic segment">
                    <img class="ui fluid image" src="http://lorempixel.com/g/500/200/">
                    <h3 class="ab_titre_carte">C'est parti pour six mois intensifs de développement !</h3>
                    <span class="ab_date_carte">Il y a 1 an</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat, nulla in interdum gravida, tortor velit eleifend nulla, a consectetur ipsum mi et ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat, nulla in interdum gravida, tortor velit eleifend nulla, a consectetur ipsum mi et ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    <br>
                    <button class="ui right labeled icon button ab_bouton_actu">
                      <i class="right arrow icon"></i>
                      En savoir plus
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection