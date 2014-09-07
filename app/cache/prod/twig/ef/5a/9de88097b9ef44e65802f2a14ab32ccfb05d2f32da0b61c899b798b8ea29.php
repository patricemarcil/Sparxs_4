<?php

/* SpxMainBundle:Default:news.html.twig */
class __TwigTemplate_ef5a9de88097b9ef44e65802f2a14ab32ccfb05d2f32da0b61c899b798b8ea29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SpxMainBundle:Default:index.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SpxMainBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Actualités et revue de presse";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<div id=\"news-container\" class=\"container bs-docs-container\">

    <div class=\"row\">
        <div class=\"col-md-12\" id=\"bandeau\">
            <h1 align=\"center\">News</h1>
        </div>
    </div>

    <div class=\"row\" style=\"margin-bottom: 20px\">
\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t<h2 align=\"center\">Actualités et revue de presse</h2>
\t\t\t<div class=\"panel-group\" id=\"accordion\">
\t\t\t\t<div class=\"panel panel-default\" style=\"border-radius: 0px\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t  <h4 class=\"panel-title\">01-02-2011 : NOUVEAU : le brûleur TOPDEC se décline en Extra Large !</h4>
\t\t\t\t\t  <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse7\">
\t\t\t\t        En savoir plus
\t\t\t\t      </a>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"collapse7\" class=\"panel-collapse collapse\">
\t\t\t\t\t  <div class=\"panel-body\">

\t\t\t\t\t    *** Rajouter un text explicatif ici avec un <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("spx_main_produits", array("modele" => "topdec-xl"));
        echo "\">lien vers le modèle topdec xl</a> ***

\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t  <h4 class=\"panel-title\">15-11-2010 : Avant toute chose, exigez un Certificat de Conformité</h4>
\t\t\t\t\t  <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse6\">
\t\t\t\t        En savoir plus
\t\t\t\t      </a>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"collapse6\" class=\"panel-collapse collapse\">
\t\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t  \t<h5><b>Certificat de conformité</b></h5>
\t\t\t\t\t  \t<p>Avant d'acheter un brûleur ou une cheminée au bio éthanol, il est important  d'exiger du vendeur une copie du certificat de conformité à la norme D35-386 en s'assurant que:</p>
\t\t\t\t\t    <ul>
\t\t\t\t\t    \t<li>ce certificat émane d'un ORGANISME OFFICIEL ET INDEPENDANT (et non du fabricant lui-même)</li>
\t\t\t\t\t    \t<li>la TOTALITÉ  des tests de la norme D35-386  ont été passés sans non-conformité</li>
\t\t\t\t\t    </ul>
\t\t\t\t\t    <p>Il faut également savoir qu'à ce jour,  à l'exception de la NF D35-386, aucune autre norme ne possède d'exigence en matière de sécurité active pour les cheminées à l'éthanol.  La France est pionnière en ce domaine et c'est pourquoi la norme NF D35-386 servira de base à la future norme européenne. Toutes les normes étrangères auquelles certains fabricants essayent de faire référence sont des normes générales de fabrication et non de sécurité: elles ne couvrent pas  les failles  mises en évidence par Commission de Sécurité des Consommateurs.</p>
\t\t\t\t\t    <p>Vous pouvez télécharger le certificat de conformité SPARXS <a href=\"http://www.sparxs.fr/documents/Attestation%20LNE%20D35-386.pdf\">ici</a>.</p>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t  <h4 class=\"panel-title\">07-06-2010 : Etablissements recevant du public Arrêté au JO du 7 juin 2010</h4>
\t\t\t\t\t  <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse5\">
\t\t\t\t        En savoir plus
\t\t\t\t      </a>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"collapse5\" class=\"panel-collapse collapse\">
\t\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t  \t<h5><b>Décret pour cheminées à l'éthanol dans les Etablissements Recevant du Public  (ERP)</b></h5>
\t\t\t\t\t    <p>\"Les Cheminées et systèmes de combustion sans conduit à au bio éthanol constituent un réel avantage dans de nombreux Etablissements Recevant du Public. Ils permettent d'apporter facilement de la convivialité et de la chaleur d'un feu sans les contraintes d'une cheminée traditionnelle.</p> 
\t\t\t\t\t\t<p>Hotels, restaurants, magasins ont compris l'intérêt de séduire leurs clients par des éléments de bien-être et d'atmosphère. Par contre, les brûleurs à l'éthanol de première génération constituent un risque pour les employés qui les manipulent et pour les clients (cf. le Compte-Rendu de la Commission de Sécurité des Consommateurs de décembre 2008).</p> 
\t\t\t\t\t\t<p>Un Arrêté du 7 juin 2010 publié au Journal Officiel rend obligatoire la conformité à la norme D35-386 pour les systèmes de combustion à l'éthanol et précise les précautions particulières d'emploi. Sparxs est à ce jour un des rares acteurs du marché à proposer un système de combustion à l'éthanol entièrement testé et certifié conforme à la NF D35-386 par un organisme officiel et indépendant (LNE).\"</p>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t  <h4 class=\"panel-title\">06-03-2010 : SPARXS sur LCI</h4>
\t\t\t\t\t  <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse4\">
\t\t\t\t        En savoir plus
\t\t\t\t      </a>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"collapse4\" class=\"panel-collapse collapse\">
\t\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t    
\t\t\t\t\t    *** Mettre la vidéo sur Youtube et rajouter un player intégré ici (comme dans galerie > fonctionnement) ***
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t  <h4 class=\"panel-title\">01-06-2009 : Sparxs Grand Prix du Jury de Paris Business Angels</h4>
\t\t\t\t\t  <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse3\">
\t\t\t\t        En savoir plus
\t\t\t\t      </a>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"collapse3\" class=\"panel-collapse collapse\">
\t\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t\t<img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/News/Sparxs%20PBA.jpg"), "html", null, true);
        echo "\" alt=\"Sparxs grand prix du jury paris business angel\">
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t  <h4 class=\"panel-title\">01-05-2009 : Article de presse dans \"Bricoler Coté Maison\"</h4>
\t\t\t\t\t  <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse2\">
\t\t\t\t        En savoir plus
\t\t\t\t      </a>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"collapse2\" class=\"panel-collapse collapse\">
\t\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t    <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/News/Bricoler%20cote%20maison.jpg"), "html", null, true);
        echo "\" alt=\"Sparxs dans bricoler côté maison\">
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t  <h4 class=\"panel-title\">20-07-2007 : SPARXS sécurise les cheminées à l'éthanol (Usine Nouvelle)</h4>
\t\t\t\t\t  <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse1\">
\t\t\t\t        En savoir plus
\t\t\t\t      </a>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"collapse1\" class=\"panel-collapse collapse\">
\t\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t  \t<h5><b>Septembre 2007 - Article Usine Nouvelle</b></h5>
\t\t\t\t\t    <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/News/usine-nouvelle.jpg"), "html", null, true);
        echo "\" alt=\"Sparxs dans l'Usine Nouvelle\">
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
    \t</div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "SpxMainBundle:Default:news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 120,  146 => 106,  130 => 93,  63 => 29,  38 => 6,  35 => 5,  29 => 3,);
    }
}
