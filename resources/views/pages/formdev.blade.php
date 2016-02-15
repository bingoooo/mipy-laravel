@extends('layout')

@section('content')

<h1 class="titre-page">Formation Développement Web</h1>

<div class="ui one column doubling stackable grid container">
  <h2>La formation Dev à Simplon.co c’est quoi ?</h2>
  <p>
    Apprendre à créer des sites Internet et des applications web, et en faire son métier
    En intensif, sur un cycle de 6 mois
    Un apprentissage par la pratique, par projets.
    Une formation ouverte à tous, et en priorité à des profils encore peu représentés dans le domaine : non-diplômés, demandeurs d’emploi, bénéficiaires de minima sociaux, personnes originaires de quartiers prioritaires, zones rurales, objectif de parité hommes-femmes. Et ce car il n’y a plus besoin d’être ingénieur ou très diplômé pour programmer.
    Une formation dont la sélection se fait sur la motivation et l’envie de travailler en équipe !
    Un écosystème riche comprenant une communauté de mentors, de professionnels, des partenaires publics, privés et non-marchands…</p>
</div>

<div class="ui two column doubling stackable grid container">
  <div class="column">
    <h2>Le programme des 6 mois de formation ?</h2>
    <p>
      Acquérir des compétences en développement web et mobile, en gestion d'équipe, en administration système, en design et ergonomie, afin d'être capable de créer une application et de la mettre en production. En utilisant différents langages de programmation
      et différentes techniques de mise en oeuvre.
    </p>
  </div>

  <div class="column">
    <img src="../img/code-d.jpeg" alt="">
  </div>

</div>

<div class="ui two column doubling stackable grid container">
  <div class="column">
    <h2>Front-End</h2>
  <div class="ui items">
    <div class="item html5">
        <div class="image img-frontend-form">
          <img class="img-frontend-form" src="/img/html5-xs.svg">
        </div>
        <div class="content">
          <a class="header">HTML5</a>
        <div class="description">
          <p>L’Hypertext Markup Language, généralement abrégé HTML, est le format de données conçu pour représenter les pages web. C’est un langage de balisage permettant d’écrire de l’hypertexte, d’où son nom. HTML permet également de structurer sémantiquement et de mettre en forme le contenu des pages, d’inclure des ressources multimédias dont des images, des formulaires de saisie, et des programmes informatiques. Il permet de créer des documents interopérables avec des équipements très variés de manière conforme aux exigences de l’accessibilité du web. Il est souvent utilisé conjointement avec des langages de programmation (JavaScript) et des formats de présentation (feuilles de style en cascade). HTML est initialement dérivé du Standard Generalized Markup Language (SGML).</p>
        </div>
      </div>
    </div>
      <div class="item css3">
        <div class="image img-frontend-form">
          <img class="img-frontend" src="/img/css3-xs.svg">
        </div>
        <div class="content">
            <a class="header">CSS3</a>
          <div class="description">
            <p>Cascading Style Sheets (CSS), littéralement feuilles de style en cascade, est un langage de feuilles de style utilisé pour décrire la présentation d'un document écrit en HTML ou XML (cela inclut divers langages XML comme XHTML ou SVG).
            CSS est l'un des langages clefs du Web ouvert et il est standardisé par une spécification W3C. Développé par niveaux, CSS1 est maintenant obsolète, CSS2.1 est une recommandation et CSS3, découpé en plusieurs modules, suit le processus de standardisation. Les premiers brouillons pour les modules CSS4 sont en cours d'écriture.</p>
          </div>
        </div>
      </div>
      <div class="item js">
        <div class="image img-frontend-form">
          <img class="img-frontend" src="/img/js-xs.svg">
        </div>
        <div class="content">
          <a class="header">Javascript</a>
          <div class="description">
            <p>JavaScript est un langage de programmation de scripts principalement employé dans les pages web interactives mais aussi pour les serveurs2. C’est un langage orienté objet à prototype, c’est-à-dire que les bases du langage et ses principales interfaces sont fournies par des objets qui ne sont pas des instances de classes, mais qui sont chacun équipés de constructeurs permettant de créer leurs propriétés, et notamment une propriété de prototypage qui permet d’en créer des objets héritiers personnalisés. En outre, les fonctions sont des objets de première classe.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="column">
    <h2>Back-End</h2>
  <div class="ui items">
    <div class="item php">
        <div class="image img-frontend-form">
          <img class="img-frontend" src="/img/php-xs.svg">
        </div>
        <div class="content">
          <a class="header">PHP</a>
        <div class="description">
          <p>PHP: Hypertext Preprocessor3, plus connu sous son sigle PHP (acronyme récursif), est un langage de programmation libre4, principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP3, mais pouvant également fonctionner comme n'importe quel langage interprété de façon locale. PHP est un langage impératif orienté objet comme C++.
          PHP a permis de créer un grand nombre de sites web célèbres, comme Facebook, YouTube, Wikipedia, etc.5 Il est considéré comme la base de la création des sites Internet dits dynamiques.</p>
        </div>
      </div>
    </div>
      <div class="item mysql">
        <div class="image img-frontend-form">
          <img class="img-frontend" src="/img/mysql-xs.svg">
        </div>
        <div class="content">
            <a class="header">MySql</a>
          <div class="description">
            <p>MySQL est un système de gestion de bases de données relationnelles (SGBDR). Il est distribué sous une double licence GPL et propriétaire. Il fait partie des logiciels de gestion de base de données les plus utilisés au monde2, autant par le grand public (applications web principalement) que par des professionnels, en concurrence avec Oracle, Informix et Microsoft SQL Server.
            Son nom vient du prénom de la fille du cocréateur Michael Widenius, My. SQL fait référence au Structured Query Language, le langage de requête utilisé.</p>
          </div>
        </div>
      </div>
      <div class="item nodejs">
        <div class="image img-frontend-form">
          <img class="img-frontend" src="/img/nodejs-xs.svg">
        </div>
        <div class="content">
          <a class="header">NodeJs</a>
          <div class="description">
            <p>Node.js est une plateforme logicielle libre et événementielle en JavaScript orientée vers les applications réseau qui doivent pouvoir monter en charge. Elle utilise la machine virtuelle V8 et implémente sous licence MIT les spécifications CommonJS. Node.js contient une bibliothèque de serveur HTTP intégrée, ce qui rend possible de faire tourner un serveur web sans avoir besoin d'un logiciel externe comme Apache ou Lighttpd, et permettant de mieux contrôler la façon dont le serveur web fonctionne.
            Node.js est de plus en plus populaire comme plateforme serveur1, elle est utilisée par Groupon, SAP, LinkedIn, Microsoft, Yahoo!, Walmart, Rakuten et PayPal.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="ui one column doubling stackable grid container">
  <h2>La formation Dev à Simplon.co c’est quoi ?</h2>
  <p>
    Des compétences et des technologies : le développement « front-end » (ce qu’on voit à l’écran, avec HTML, CSS et Javascript), le développement « back-end » (les coulisses, les fonctionnalités), l’administration systèmes (sous Linux), la programmation d’objets connectés, la gestion de projet et la conception d’interfaces Des méthodes : méthodologies agiles, pair programming, etc. Des outils : Git, Github, Slack, Sublime text, etc. Des ouvertures sur d’autres domaines : Sécurité, environnement, intelligence artificielle, consommation collaborative, entrepreneuriat, communication, marketing, … Autant de sujets qui pourront donner lieu à des interventions, sur votre demande notamment. Nouveau dès novembre 2015 : possibilité de faire certifier sa formation au travers d’un titre professionnel inscrit au RNCP (Développeur logiciel, niveau III)
  </p>
</div>

@endsection