@extends('layout')

@section('content')


    <img class="ui fluid image" src="http://lorempixel.com/g/940/200/">
    <h1 class="titre-formation" title="Actus et events">Actus et events</h1>
    <h2 class="ui center aligned header ab_titre_actu" title="Start'up Week !">Start'up Week !</h2>
    <p class="ab_date_actu">10 fevrier 1994</p>
<div class="ui stackable two column grid actualites">
    <div class="ab_container_actu">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat, nulla in interdum gravida, tortor velit eleifend nulla, a consectetur ipsum mi et ante. Mauris molestie nibh eget lacus mattis, ac efficitur elit sagittis. Aenean vitae ex urna. Donec sed elit vitae ligula posuere iaculis. Nullam sed ipsum feugiat, commodo odio quis, ornare augue. Sed eu erat vitae justo posuere rutrum id ac sapien. Duis tellus enim, tincidunt non varius et, pretium et arcu.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat, nulla in interdum gravida, tortor velit eleifend nulla, a consectetur ipsum mi et ante. Mauris molestie nibh eget lacus mattis, ac efficitur elit sagittis. Aenean vitae ex urna. Donec sed elit vitae ligula posuere iaculis. Nullam sed ipsum feugiat, commodo odio quis, ornare augue. Sed eu erat vitae justo posuere rutrum id ac sapien. Duis tellus enim, tincidunt non varius et, pretium et arcu...</p>
        <a class="page_article" x-script="page_article" href="article.html">
            <button class="ui centered labeled icon button ab_bouton_actu">
            <i class="right arrow icon"></i>
            En savoir plus
            </button>
        </a>
    </div>
        <br>
    <h2 class="ui horizontal divider header" title="Evènements à venir">Evènements à venir</h2>
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
                    <button href="" class="ui right labeled icon button ab_bouton_actu">
                      <i class="right arrow icon"></i>
                      En savoir plus
                  </button>
              </div>
          </div><div class="column">
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
                    <button href="" class="ui right labeled icon button ab_bouton_actu">
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
                    <button href="" class="ui right labeled icon button ab_bouton_actu">
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
                    <button href="" class="ui right labeled icon button ab_bouton_actu">
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
                    <button href="" class="ui right labeled icon button ab_bouton_actu">
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
                    <button href="" class="ui right labeled icon button ab_bouton_actu">
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
                    <button href="" class="ui right labeled icon button ab_bouton_actu">
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
                    <button href="" class="ui right labeled icon button ab_bouton_actu">
                      <i class="right arrow icon"></i>
                      En savoir plus
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection