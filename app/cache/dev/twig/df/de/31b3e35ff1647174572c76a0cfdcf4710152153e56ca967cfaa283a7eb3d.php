<?php

/* SpxMainBundle:Default:index.html.twig */
class __TwigTemplate_dfde31b3e35ff1647174572c76a0cfdcf4710152153e56ca967cfaa283a7eb3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html >
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\"../../docs-assets/ico/favicon.png\">

    <title>Sparxs | ";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <!--link href=\"../../dist/css/bootstrap.css\" rel=\"stylesheet\" -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css\" rel=\"stylesheet\">
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src=\"../../docs-assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href=\"carousel.css\" rel=\"stylesheet\">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class=\"navbar-wrapper\">
      <div class=\"container\">

        <div class=\"navbar\" role=\"navigation\" style=\"margin-bottom:0\">
          <div class=\"container\">
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <!--<span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>-->
              </button>
              <a class=\"navbar-brand\" href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("spx_main_homepage");
        echo "\">SPARXS</a>
            </div>
            <div class=\"navbar-inner pull-right\">
              <div class=container>
              <ul id=\"top-nav\"class=\"nav navbar-nav\">
                <li id=\"navbar-accueil\"><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("spx_main_homepage");
        echo "\">Accueil</a></li>
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("spx_main_produits", array("modele" => "topdec"));
        echo "\">Produits <b class=\"caret\"></b></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("spx_main_produits", array("modele" => "topdec"));
        echo "\">Modèle Topdec</a></li>
                    <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("spx_main_produits", array("modele" => "topdec-xl"));
        echo "\">Modèle Topdec XL</a></li>
                    <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("spx_main_produits", array("modele" => "topdec-xxl"));
        echo "\">Modèle Topdec XXL</a></li>
                    <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("spx_main_produits", array("modele" => "recharges"));
        echo "\">Recharges</a></li>
                  </ul>  
                <li id=\"navbar-habillages\"><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("spx_main_habillages", array("type" => "beton"));
        echo "\">Habillages</a></li>
                <li id=\"navbar-securite\"><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("spx_main_securite", array("item" => "anti-flash"));
        echo "\">Sécurité</a></li>
                <li id=\"navbar-galerie\"><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("spx_main_galerie_fonctionnement");
        echo "\">Galerie</a></li>
                <li id=\"navbar-news\"><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("spx_main_news");
        echo "\">News</a></li>
                <li id=\"navbar-reglementation\"><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("spx_main_reglementation");
        echo "\"><button type=\"button\" class=\"btn btn-danger\">Feux de bois <span class=\"glyphicon glyphicon-flash\"></span></button></a></li>
                <li id=\"navbar-commander\"><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("spx_main_commander");
        echo "\"><button type=\"button\" class=\"btn btn-warning\">Contactez nous</button></a></li>
              </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
<!-- TEST D'UN MENU DEROULANT
            <div class=\"navbar\">
              <div class=\"navbar-inner\">
              <div class=container>
              <ul class=\"nav\">
                <li ><a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("spx_main_homepage");
        echo "\">Accueil</a></li>
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("spx_main_produits", array("modele" => "topdec"));
        echo "\">Produits <b class=\"caret\"></b></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("spx_main_produits", array("modele" => "topdec"));
        echo "\">Modèle Topdec</a></li>
                    <li><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("spx_main_produits", array("modele" => "topdec-xl"));
        echo "\">Modèle Topdec XL</a></li>
                    <li><a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("spx_main_produits", array("modele" => "topdec-xxl"));
        echo "\">Modèle Topdec XXL</a></li>
                    <li><a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("spx_main_produits", array("modele" => "recharges"));
        echo "\">Recharges</a></li>
                  </ul>  
                <li ><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("spx_main_habillages", array("type" => "beton"));
        echo "\">Habillages</a></li>
                <li ><a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("spx_main_securite", array("item" => "anti-flash"));
        echo "\">Sécurité</a></li>
                <li ><a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("spx_main_galerie_fonctionnement");
        echo "\">Galerie</a></li>
                <li ><a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("spx_main_news");
        echo "\">News</a></li>
                <li ><a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("spx_main_reglementation");
        echo "\"><button type=\"button\" class=\"btn btn-warning navbar-btn\">Feux de bois</button></a></li>
                <li ><a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("spx_main_commander");
        echo "\"><button type=\"button\" class=\"btn btn-warning navbar-btn\">Contactez nous</button></a></li>
              </ul>
              </div>
              </div>
            </div>
-->


    ";
        // line 98
        $this->displayBlock('body', $context, $blocks);
        // line 200
        echo "
    <!-- FOOTER -->
  <div class=\"container\">
    <div class=\"row\">
    <p><strong>Pour en savoir plus...<br />
    </div>
    <div class=\"row\">
    <div class=\"col-md-3\">
    <a href=\"http://www.sparxs.fr/fr/habillage-beton-cire.html\">Terminologie : 
    Cheminée à l'éthanol est un terme classiquement utilisé pour désigner tout système de
    décoration / chauffage fonctionnant à l&#8217;éthanol. En réalité, les termes «&nbsp; 
    foyer à l&#8217;éthanol&nbsp;» ou «&nbsp;foyer à
    l&#8217;éthanol sans conduit&nbsp;» sont plus génériques : l&#8217;habillage en
    forme de cheminée ou l&#8217;utilisation dans une cheminée existante en étant
    des cas particuliers.</a> <br /> <br />
  </div> <!-- col-md-3 -->
  <div class=\"col-md-4\">
  <a href=\"http://www.sparxs.fr/fr/bruleur-ethanol-ceramic.html\">
    Comment fonctionne le syt&egrave;me de bruleur &agrave; l'etanol : <br />
    Le c&#339;ur du système est constitué par le brûleur&nbsp;aussi appelé
    bloc
    de combustion. Longtemps en forme de boîte à mouchoirs ou de godets
    simples, les blocs de combustion à sécurité active sont d'une
    conception différente pour offrir enfin une bonne qualité de combustion
    (absence d&#8217;odeur et de vapeurs parfois indisposantes) et intégrer
    l&#8217;électronique nécessaire aux sécurités actives exigées par la norme
    D35-386.</a><br /> <br />
  </div> <!-- col-md-3 -->
  <div class=\"col-md-5\">
     <a href=\"http://www.sparxs.fr/fr/qualite-combustion-ethanol.html\">
    Ethanol et agriculture biologique :<br />
    La dénomination bio-éthanol signifie issu de
    l'agriculture et non de produits fossiles. Néanmoins le bio éthanol
    n'est pas issu de l'agriculture biologique comme les produits
    généralement étiquettés \" &nbsp;Bio \". Le bioéthanol est écologique
    car il ne dégage pas plus de CO2 que les plantes qui ont servi à le
    générer&nbsp;n'en ont absorbé&nbsp;pendant leur croissance.
    De plus toutes les calories dégagées par le bloc de combustion pendant
    la flambée servent à chauffer la pièce, à la différence
    des&nbsp;systèmes à conduit qui rejettent une part plus ou moins
    importante de ces calories dans l'atmosphère</a>
   </div> <!-- col-md-6 -->
  </div> <!-- row -->
</div> <!-- container -->
<div class=\"container\">
    <div class=\"row\"> 
      <footer style=\"padding: 20px 0px\" align=\"center\">
        <p><small>2013 Sparxs, SAS. - 15 rue Gudin, 75016 Paris - Tel: 09 81 74 74 74</small></p>
        <p><small><a href=\"mailto:contact@sparxs.fr\">contact@sparxs.fr</a> - <a href=\"";
        // line 248
        echo $this->env->getExtension('routing')->getPath("spx_main_commander");
        echo "\">Nous contacter</a> - <a href=\"";
        echo $this->env->getExtension('routing')->getPath("spx_main_mention");
        echo "\">Mention légale</a> - <a href=\"https://plus.google.com/110182932904096250201\" rel=\"publisher\">Google+</a></small></p>
      </footer>
 </div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://code.jquery.com/jquery-1.10.2.min.js\"></script>
    <!-- <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> -->
    <script src=\"../../web/dist/js/bootstrap.min.js\"></script>
    <script src=\"../../docs-assets/js/holder.js\"></script>
    <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 261
        $this->displayBlock('javascripts', $context, $blocks);
        // line 263
        echo "    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-46216600-1', 'sparxs.fr');
      ga('send', 'pageview');

    </script>
  </body>
</html>

";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "Bruleurs à éthanol de qualité et 100% conformes à la norme";
    }

    // line 98
    public function block_body($context, array $blocks = array())
    {
        // line 99
        echo "    <!-- Carousel 
    ================================================== -->
    <section>
    <div class=\"container\">
      <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"15000\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
          <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
          <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\">
          <div class=\"item active\">
            <img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide1.jpg"), "html", null, true);
        echo "\" alt=\"First slide\">
              <div class=\"carousel-caption\">
                <h1>Bruleurs à éthanol Sparxs </span></h1>
                <p>Pour redonner vie à votre salon, rien de mieux que la chaleur d'une vraie flamme</p>
                <!--<p><a class=\"btn btn-lg btn-primary\" href=\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("spx_main_commander");
        echo "\" role=\"button\">Commander votre bruleur</a></p>-->
              </div>
          </div>
          <div class=\"item\">
            <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide2.jpg"), "html", null, true);
        echo "\" alt=\"Second slide\">
              <div class=\"carousel-caption\">
                <h1>Sécurité maximale</h1>
                <p>Nos bruleurs sont conformes aux normes européennes, équipés d'un détecteur de CO2 et d'une sécurité enfant, profitez de la joie d'un feu en toute séreinité.</p>
                <p><a class=\"btn btn-lg btn-primary\" href=\"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("spx_main_securite", array("item" => "anti-flash"));
        echo "\" role=\"button\">En savoir plus</a></p>
              </div>
          </div>
          <div class=\"item\">
            <img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide3.jpg"), "html", null, true);
        echo "\" alt=\"Third slide\">
              <div class=\"carousel-caption\">
                <h1>100% personnalisable</h1>
                <p>Commandez votre bruleur dans un ensemble en Béton ou en Inox. Choisissez parmis nos produits, ceux de notre partenaires ou faites-vous faire le votre sur mesure</p>
                <p><a class=\"btn btn-lg btn-primary\" href=\"";
        // line 132
        echo $this->env->getExtension('routing')->getPath("spx_main_galerie_photos");
        echo "\" role=\"button\">Voir la galerie</a></p>
              </div>
          </div>
        </div>
        <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\"><span class=\"glyphicon glyphicon-chevron-left\"></span></a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a>
      </div><!-- /.carousel -->
    </div><!-- /.container -->
    </section>



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <section>
      <div class=\"container marketing\">

        <!-- START THE FEATURETTES -->

        <br><br>

        <div class=\"row featurette\">
          <div class=\"col-md-7\">
            <h2 class=\"featurette-heading\">La plus belle flamme du marché</h2>
            <p class=\"lead\">Sparxs vous garantie la meilleure qualité de combustion du marché avec une flamme vive et légère, aucune odeur et une chaleur incroyable. Vous n'avez plus besoin d'un conduit pour profiter de la chaleur d'un feu.</p>
          </div>
          <div class=\"col-md-5\" align=\"center\">
            <img class=\"featurette-image img-responsive\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/flamme.jpg"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\">
          </div>
        </div>

        <hr class=\"featurette-divider\">

        <div class=\"row featurette\">
          <div class=\"col-md-5\" align=\"center\">
            <img class=\"featurette-image img-responsive\" src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/carte.jpg"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\">
          </div>
          <div class=\"col-md-7\">
            <h2 class=\"featurette-heading\">Entièrement sécurisée et aux normes</h2>
            <p class=\"lead\">Au coeur de nos produits: un système à sécurité active de deuxième génération pour cheminées sans conduit au bio-ethanol qui vous apporte sécurité maximale et qualité de combustion optimale certifiée sans rejets nocifs.</p>
          </div>
        </div>

        <hr class=\"featurette-divider\">

        <div class=\"row featurette\">
          <div class=\"col-md-7\">
            <h2 class=\"featurette-heading\">Cheminées à 100% personnalisables</h2>
            <p class=\"lead\">Nos brûleurs à éthanol sont adaptables à vos cheminées. Choisissez un habillage standard, sur mesure, ou parmis les nombreux choix de nos partenaires.</p>
          </div>
          <div class=\"col-md-5\" align=\"center\">
            <img class=\"featurette-image img-responsive\" src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/yinyang.jpg"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\">
          </div>
        </div>

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->
    </section>

    <section style=\"height: 100px; background-color: #C8C8C8\">
      <h3 align=\"center\" style=\"line-height: 100px\"><img class=\"img-circle\" src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/fabrique-en-france.jpg"), "html", null, true);
        echo "\" alt=\"fabriqué en france\" width=\"50px\"> Les brûleurs Sparxs sont conçus et produits en France</h3>
    </section>


    ";
    }

    // line 261
    public function block_javascripts($context, array $blocks = array())
    {
        // line 262
        echo "    ";
    }

    public function getTemplateName()
    {
        return "SpxMainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 262,  443 => 261,  434 => 195,  421 => 185,  402 => 169,  391 => 161,  359 => 132,  352 => 128,  345 => 124,  338 => 120,  331 => 116,  324 => 112,  309 => 99,  306 => 98,  300 => 11,  283 => 263,  281 => 261,  277 => 260,  271 => 257,  257 => 248,  207 => 200,  205 => 98,  194 => 90,  190 => 89,  186 => 88,  182 => 87,  178 => 86,  174 => 85,  169 => 83,  165 => 82,  161 => 81,  157 => 80,  152 => 78,  148 => 77,  131 => 63,  127 => 62,  123 => 61,  119 => 60,  115 => 59,  111 => 58,  106 => 56,  102 => 55,  98 => 54,  94 => 53,  89 => 51,  85 => 50,  77 => 45,  45 => 16,  41 => 15,  34 => 11,  22 => 1,);
    }
}
