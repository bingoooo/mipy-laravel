@extends('layout')

@section('content')
    <img class="ui fluid image" src="http://lorempixel.com/g/940/200/">
    <h1 class="ui center aligned header ab_titre_actu">{{$lastNews->titre}}</h1>
    <p class="ab_date_actu">{{$lastNewsForDays}} <?php echo date('D d M Y', strtotime($lastNews->event_date)); ?></p>
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
    <h2 class="ui horizontal divider header" title="Evènements à venir">Evènements à venir</h2>
    <div class="ui vertically divided container stackable grid">
        <div class="ui three column row">
        @foreach($lastEvents as $event)
            <div class="column">
                <div class="ui basic segment">
                    <img class="ui fluid image" src="http://lorempixel.com/g/500/200/">
                    <h3 class="ab_titre_carte">{{$event->titre}}</h3>
                    <span class="ab_date_carte">{{$event->forDays}}</span>
                    <?php echo html_entity_decode($event->preview); ?>
                    <br>
                    <a class="page_article" x-script="page_article" href="article{{$event->id}}.html">
                    <button class="ui right labeled icon button">
                      <i class="right arrow icon"></i>
                      En savoir plus
                  </button>
                  </a>
                </div>
            </div>
        @endforeach
        </div>
        <div class="ui three column row">
        @foreach($thirdRow as $event)
            <div class="column">
                <div class="ui basic segment">
                    <img class="ui fluid image" src="http://lorempixel.com/g/500/200/">
                    <h3 class="ab_titre_carte">{{$event->titre}}</h3>
                    <span class="ab_date_carte">{{$event->forDays}}</span>
                    <?php echo html_entity_decode($event->preview); ?>
                    <br>
                    <a class="page_article" x-script="page_article" href="article{{$event->id}}.html">
                    <button class="ui right labeled icon button ab_bouton_actu">
                      <i class="right arrow icon"></i>
                      En savoir plus
                    </button>
                    </a>
                </div>
            </div>
        @endforeach
        </div>
        <div class="three column row">
        @foreach($fourthRow as $event)
            <div class="column">
                <div class="ui basic segment">
                    <img class="ui fluid image" src="http://lorempixel.com/g/500/200/">
                    <h3 class="ab_titre_carte">{{$event->titre}}</h3>
                    <span class="ab_date_carte">{{$event->forDays}}</span>
                    <?php echo html_entity_decode($event->preview); ?>
                    <br>
                    <a class="page_article" x-script="page_article" href="article{{$event->id}}.html">
                    <button class="ui right labeled icon button ab_bouton_actu">
                      <i class="right arrow icon"></i>
                      En savoir plus
                    </button>
                    </a>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>

@endsection