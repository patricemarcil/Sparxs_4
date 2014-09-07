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
              <ul id=\"top-nav\" class=\"nav navbar-nav\">
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
                <li id=\"navbar-commander\"><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("spx_main_commander");
        echo "\"><button class=\"btn btn-warning\">Contactez nous</button></a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

    ";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 171
        echo "
    <!-- FOOTER -->
    <div class=\"container\">
      <footer style=\"padding: 20px 0px\" align=\"center\">
        <p><small>2013 Sparxs, SAS. - 15 rue Gudin, 75016 Paris - Tel: 09 81 74 74 74</small></p>
        <p><small><a href=\"mailto:contact@sparxs.fr\">contact@sparxs.fr</a> - <a href=\"";
        // line 176
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
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 187
        $this->displayBlock('javascripts', $context, $blocks);
        // line 189
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

    // line 64
    public function block_body($context, array $blocks = array())
    {
        // line 65
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
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide1.jpg"), "html", null, true);
        echo "\" alt=\"First slide\">
            <div class=\"container\">
              <div class=\"carousel-caption\">
                <h1>Bruleurs à éthanol Sparxs</h1>
                <p>Pour redonner vie à votre salon, rien de mieux que la chaleur d'une vraie flamme</p>
                <!--<p><a class=\"btn btn-lg btn-primary\" href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("spx_main_commander");
        echo "\" role=\"button\">Commander votre bruleur</a></p>-->
              </div>
            </div>
          </div>
          <div class=\"item\" >
            <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide2.jpg"), "html", null, true);
        echo "\" alt=\"Second slide\">
            <div class=\"container\">
              <div class=\"carousel-caption\">
                <h1>Sécurité maximale</h1>
                <p>Nos bruleurs sont conformes aux normes européennes, équipés d'un détecteur de CO2 et d'une sécurité enfant, profitez de la joie d'un feu en toute séreinité.</p>
                <p><a class=\"btn btn-lg btn-primary\" href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("spx_main_securite", array("item" => "anti-flash"));
        echo "\" role=\"button\">En savoir plus</a></p>
              </div>
            </div>
          </div>
          <div class=\"item\">
            <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide3.jpg"), "html", null, true);
        echo "\" alt=\"Third slide\">
            <div class=\"container\">
              <div class=\"carousel-caption\">
                <h1>100% personnalisable</h1>
                <p>Commandez votre bruleur dans un ensemble en Béton ou en Inox. Choisissez parmis nos produits, ceux de notre partenaires ou faites-vous faire le votre sur mesure</p>
                <p><a class=\"btn btn-lg btn-primary\" href=\"";
        // line 103
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
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/flamme.jpg"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\">
          </div>
        </div>

        <hr class=\"featurette-divider\">

        <div class=\"row featurette\">
          <div class=\"col-md-5\" align=\"center\">
            <img class=\"featurette-image img-responsive\" src=\"";
        // line 140
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
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/yinyang.jpg"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\">
          </div>
        </div>

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->
    </section>

    <section style=\"height: 100px; background-color: #C8C8C8\">
      <h3 align=\"center\" style=\"line-height: 100px\"><img class=\"img-circle\" src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/fabrique-en-france.jpg"), "html", null, true);
        echo "\" alt=\"fabriqué en france\" width=\"50px\"> Les brûleurs Sparxs sont conçus et produits en France</h3>
    </section>


    ";
    }

    // line 187
    public function block_javascripts($context, array $blocks = array())
    {
        // line 188
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
        return array (  318 => 188,  315 => 187,  306 => 166,  293 => 156,  274 => 140,  263 => 132,  231 => 103,  223 => 98,  215 => 93,  207 => 88,  199 => 83,  191 => 78,  176 => 65,  173 => 64,  167 => 11,  150 => 189,  148 => 187,  144 => 186,  129 => 176,  122 => 171,  120 => 64,  108 => 55,  104 => 54,  100 => 53,  96 => 52,  92 => 51,  88 => 50,  84 => 49,  77 => 45,  45 => 16,  41 => 15,  34 => 11,  22 => 1,);
    }
}
