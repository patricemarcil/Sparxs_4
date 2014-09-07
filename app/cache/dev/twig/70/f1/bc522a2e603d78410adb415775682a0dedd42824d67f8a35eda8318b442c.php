<?php

/* SpxMainBundle:Habillage:inox-sur-mesure.html.twig */
class __TwigTemplate_70f1bc522a2e603d78410adb415775682a0dedd42824d67f8a35eda8318b442c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SpxMainBundle:Habillage:habillage.html.twig");

        $this->blocks = array(
            'modele' => array($this, 'block_modele'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SpxMainBundle:Habillage:habillage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_modele($context, array $blocks = array())
    {
        // line 4
        echo "

<h2> Habillage sur mesure du brûleur bio-éthanol TOPDEC&nbsp; pour votre cheminée existante</h2>
<h4>Un bloc de combustion à l'éthanol est idéal pour faire revivre une cheminée inutilisée et apporter la magie et la chaleur du feu dans une pièce.</h4>
<h4>Sparxs résoud le problème de l'intégration facile et élégante d'un brûleur bio-éthanol en proposant un habillage sur
mesure à partir des dimensions de la cheminée; ils sont réalisés sous
une dizaine de jours. Cet habillage se marie aussi bien avec les
cheminées anciennes que contemporaines.</h4>
<div class=\"row\">
<div class=\"col-md-6\"style=\"text-align:center\"><img alt=\"cheminee ethanol\" class=\"img-responsive\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/Habillages/cheminee triste.jpg"), "html", null, true);
        echo "\" />
<h6>AVANT</h6>
</div>
<!--lecteur You Tube -->
<div class=\"col-md-6\"style=\"text-align:center\">

  <div class=\"lecteur-video\" style=\"float: right; width: 320px; height: 240px; margin-bottom: 50px; margin-right: 250px; margin-left: 21px;\"><object id=\"player1\" type=\"application/x-shockwave-flash\" data=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/videos/player_flv_classic.swf"), "html", null, true);
        echo "\" height=\"240\" width=\"320\"><param name=\"movie\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/videos/player_flv_classic.swf"), "html", null, true);
        echo "\" /><param name=\"wmode\" value=\"opaque\" /><param name=\"FlashVars\" value=\"configxml =";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/videos/demo fonctionnement.xml"), "html", null, true);
        echo "\" /></object></div>

  <div style=\"margin: 20px;\">
  <div id=\"ytplayer\" style=\"border: solid 1px #C8C8C8\" class=\"img-responsive\"></div>
  </div>

  <script>
  // Load the IFrame Player API code asynchronously.
  var tag = document.createElement('script');
  tag.src = \"https://www.youtube.com/player_api\";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  // Replace the 'ytplayer' element with an <iframe> and
  // YouTube player after the API code downloads.
  var player;
  function onYouTubePlayerAPIReady() {
    player = new YT.Player('ytplayer', {
      height: '',
      width: 'auto',
      videoId: 'p0cBgsI_5Sk'
    });
  }
</script>
<h6>APRES</h6>
</div>
</div>
<br />
<div class=\"row\">
<div class=\"col-md-6\"style=\"text-align:center\"><img alt=\"cheminee ethanol\" class=\"img-responsive\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/Habillages/parametres cache.jpg"), "html", null, true);
        echo "\"/>
<h6>Dimensions A,B,C, D d'une cheminée</h6>
</div>
<div class=\"col-md-6\"style=\"text-align:center\"><img alt=\"cheminee ethanol\" class=\"img-responsive\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/Habillages/Cache cheminee avec cotes.gif"), "html", null, true);
        echo "\"/>
<h6> Le <a href=";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("documents/Gabarit de mesure pour cheminée existante.pdf"), "html", null, true);
        echo "> gabarit de l'habillage</a> SPARXS sur mesure permet de couvrir 95% des cas <br />de cheminées existantes (trapezoidales avec ou sans retour (A) ou simplement rectangulaires).</h6>
</div>
<!-- --><!-- --><!-- Bandeau Terminologie --><!-- --><!-- -->
<div class=\"terminologie\">

</div>


";
    }

    public function getTemplateName()
    {
        return "SpxMainBundle:Habillage:inox-sur-mesure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 52,  93 => 51,  87 => 48,  51 => 19,  42 => 13,  31 => 4,  28 => 3,);
    }
}
