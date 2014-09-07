<?php

/* SpxMainBundle:Galerie:fonctionnement.html.twig */
class __TwigTemplate_f32ec457cff9d7996ddaa417262b15a5d8ae79bb5d334f604c17bc577cabe5e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SpxMainBundle:Galerie:galerie.html.twig");

        $this->blocks = array(
            'modele' => array($this, 'block_modele'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SpxMainBundle:Galerie:galerie.html.twig";
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
<h2>Fonctionnement du brûleur Topdec de Sparxs</h2>
<h4>Voici une vidéo explicative du fonctionnement simple et sécurisé des brûleurs Sparxs</h4>
<div style=\"margin: 20px;\">
\t<div id=\"ytplayer\" style=\"border: solid 1px #C8C8C8\"></div>
</div>

";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "
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
      height: '390',
      width: '640',
      videoId: 'YNyC4lGcokY'
    });
  }
</script>


";
    }

    public function getTemplateName()
    {
        return "SpxMainBundle:Galerie:fonctionnement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  43 => 13,  32 => 4,  29 => 3,);
    }
}
