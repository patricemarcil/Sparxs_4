<?php

/* SpxMainBundle:Default:index_backup.html.twig */
class __TwigTemplate_cef92a5dccf47ce22f56d2b168d6dcb700ab6dd92e813d2b366d70383e18aa4c extends Twig_Template
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
            <div class=\"navbar-collapse collapse pull-right\">
              <ul id=\"top-nav\"class=\"nav navbar-nav\">
                <li id=\"navbar-accueil\"><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("spx_main_homepage");
        echo "\">Accueil</a></li>
                <li id=\"navbar-produits\"><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("spx_main_produits", array("modele" => "topdec"));
        echo "\">Produits</a></li>
                <li id=\"navbar-habillages\"><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("spx_main_habillages", array("type" => "beton"));
        echo "\">Habillages</a></li>
                <li id=\"navbar-securite\"><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("spx_main_securite", array("item" => "anti-flash"));
        echo "\">Sécurité</a></li>
                <li id=\"navbar-galerie\"><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("spx_main_galerie_fonctionnement");
        echo "\">Galerie</a></li>
                <li id=\"navbar-news\"><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("spx_main_news");
        echo "\">News</a></li>
                <li id=\"navbar-reg\"><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("spx_main_reglementation");
        echo "\"><button type=\"button\" class=\"btn btn-warning navbar-btn\">Feux de bois</button></a></li>
                <li id=\"navbar-commander\"><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("spx_main_commander");
        echo "\"><button type=\"button\" class=\"btn btn-warning navbar-btn\">Contactez nous</button></a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

    ";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 172
        echo "
    <!-- FOOTER -->
    <div class=\"container\">
      <footer style=\"padding: 20px 0px\" align=\"center\">
        <p><small>2013 Sparxs, SAS. - 15 rue Gudin, 75016 Paris - Tel: 09 81 74 74 74</small></p>
        <p><small><a href=\"mailto:contact@sparxs.fr\">contact@sparxs.fr</a> - <a href=\"";
        // line 177
        echo $this->env->getExtension('routing')->getPath("spx_main_commander");
        echo "\">Nous contacter</a> - <a href=\"";
        echo $this->env->getExtension('routing')->getPath("spx_main_mention");
        echo "\">Mention légale</a> - <a href=\"https://plus.google.com/110182932904096250201\" rel=\"publisher\">Google+</a></small></p>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://code.jquery.com/jquery-1.10.2.min.js\"></script>
    <script src=\"../../web/dist/js/bootstrap.min.js\"></script>
    <script src=\"../../docs-assets/js/holder.js\"></script>
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 188
        $this->displayBlock('javascripts', $context, $blocks);
        // line 190
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

    // line 65
    public function block_body($context, array $blocks = array())
    {
        // line 66
        echo "
    <!-- Carousel 
    ================================================== -->
    <section>
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
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide1.jpg"), "html", null, true);
        echo "\" alt=\"First slide\">
            <div class=\"container\">
              <div class=\"carousel-caption\">
                <h1>Bruleurs à éthanol Sparxs</h1>
                <p>Pour redonner vie à votre salon, rien de mieux que la chaleur d'une vraie flamme</p>
                <!--<p><a class=\"btn btn-lg btn-primary\" href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("spx_main_commander");
        echo "\" role=\"button\">Commander votre bruleur</a></p>-->
              </div>
            </div>
          </div>
          <div class=\"item\" >
            <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide2.jpg"), "html", null, true);
        echo "\" alt=\"Second slide\">
            <div class=\"container\">
              <div class=\"carousel-caption\">
                <h1>Sécurité maximale</h1>
                <p>Nos bruleurs sont conformes aux normes européennes, équipés d'un détecteur de CO2 et d'une sécurité enfant, profitez de la joie d'un feu en toute séreinité.</p>
                <p><a class=\"btn btn-lg btn-primary\" href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("spx_main_securite", array("item" => "anti-flash"));
        echo "\" role=\"button\">En savoir plus</a></p>
              </div>
            </div>
          </div>
          <div class=\"item\">
            <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide3.jpg"), "html", null, true);
        echo "\" alt=\"Third slide\">
            <div class=\"container\">
              <div class=\"carousel-caption\">
                <h1>100% personnalisable</h1>
                <p>Commandez votre bruleur dans un ensemble en Béton ou en Inox. Choisissez parmis nos produits, ceux de notre partenaires ou faites-vous faire le votre sur mesure</p>
                <p><a class=\"btn btn-lg btn-primary\" href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("spx_main_galerie_photos");
        echo "\" role=\"button\">Voir la galerie</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\"><span class=\"glyphicon glyphicon-chevron-left\"></span></a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a>
      </div><!-- /.carousel -->
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
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/flamme.jpg"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\">
          </div>
        </div>

        <hr class=\"featurette-divider\">

        <div class=\"row featurette\">
          <div class=\"col-md-5\" align=\"center\">
            <img class=\"featurette-image img-responsive\" src=\"";
        // line 141
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
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/yinyang.jpg"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\">
          </div>
        </div>

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->
    </section>

    <section style=\"height: 100px; background-color: #C8C8C8\">
      <h3 align=\"center\" style=\"line-height: 100px\"><img class=\"img-circle\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/fabrique-en-france.jpg"), "html", null, true);
        echo "\" alt=\"fabriqué en france\" width=\"50px\"> Les brûleurs Sparxs sont conçus et produits en France</h3>
    </section>


    ";
    }

    // line 188
    public function block_javascripts($context, array $blocks = array())
    {
        // line 189
        echo "    ";
    }

    public function getTemplateName()
    {
        return "SpxMainBundle:Default:index_backup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 188,  310 => 167,  297 => 157,  267 => 133,  211 => 89,  195 => 79,  180 => 66,  126 => 172,  124 => 65,  104 => 54,  100 => 53,  84 => 49,  399 => 217,  390 => 195,  377 => 185,  358 => 169,  347 => 161,  315 => 132,  308 => 128,  301 => 124,  287 => 116,  280 => 112,  265 => 99,  262 => 98,  256 => 11,  239 => 219,  237 => 217,  233 => 216,  207 => 200,  205 => 98,  194 => 90,  190 => 89,  186 => 88,  178 => 86,  174 => 85,  165 => 82,  161 => 81,  152 => 188,  148 => 187,  127 => 62,  77 => 45,  34 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 218,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 189,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 120,  285 => 89,  283 => 88,  278 => 141,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 205,  177 => 65,  169 => 83,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 104,  230 => 82,  227 => 99,  224 => 71,  221 => 77,  219 => 94,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 60,  102 => 55,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 53,  89 => 51,  85 => 50,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 50,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 11,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 1,  246 => 90,  157 => 80,  145 => 46,  139 => 45,  131 => 63,  123 => 61,  120 => 40,  115 => 59,  111 => 58,  108 => 55,  101 => 32,  98 => 54,  96 => 52,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 15,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 84,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 87,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 190,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 177,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 56,  109 => 34,  106 => 56,  103 => 32,  99 => 31,  95 => 28,  92 => 51,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 16,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
