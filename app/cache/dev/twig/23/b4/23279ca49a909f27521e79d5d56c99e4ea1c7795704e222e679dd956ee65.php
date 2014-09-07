<?php

/* SpxMainBundle:Habillage:test.html.twig */
class __TwigTemplate_23b423279ca49a909f27521e79d5d56c99e4ea1c7795704e222e679dd956ee65 extends Twig_Template
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
<h1>Un bloc de combustion à l'éthanol est idéal pour faire
revivre une cheminée inutilisée et apporter la magie et la chaleur du feu dans une pièce.</h1>
<h1>Sparxs résoud le problème de l'intégration facile et élégante d'un brûleur bio-éthanol en proposant un habillage sur
mesure à partir des dimensions de la cheminée; ils sont réalisés sous
une dizaine de jours. Cet habillage se marie aussi bien avec les
cheminées anciennes que contemporaines. </h1>
<div class=\"photo_vs_video\">
<img style=\"width: 320px; height: 240px;\" alt=\"cheminée éthanol\" src=\"../images/cheminee%20triste.jpg\" /><br />
AVANT</div>
<div class=\"lecteur-video\">
<object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" width=\"320\" height=\"240\" id=\"FLVPlayer\">
  <param name=\"movie\" value=\"FLVPlayer_Progressive.swf\" />
  <param name=\"quality\" value=\"high\" />
  <param name=\"wmode\" value=\"opaque\" />
  <param name=\"scale\" value=\"noscale\" />
  <param name=\"salign\" value=\"lt\" />
  <param name=\"FlashVars\" value=\"&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=../video/video-sur-mesure&amp;autoPlay=true&amp;autoRewind=true\" />
  <param name=\"swfversion\" value=\"8,0,0,0\" />
  <!-- Cette balise <param> invite les utilisateurs de Flash Player en version 6.0 r65 et ultérieure à télécharger la version la plus récente de Flash Player. Supprimez-la si vous ne voulez pas que cette invite soit visible. -->
  <param name=\"expressinstall\" value=\"Scripts/expressInstall.swf\" />
  <!-- La balise <object> suivante est destinée aux navigateurs autres qu'IE. Supprimez-la d'IE à l'aide d'IECC. -->
  <!--[if !IE]>-->
  <object type=\"application/x-shockwave-flash\" data=\"FLVPlayer_Progressive.swf\" width=\"320\" height=\"240\">
    <!--<![endif]-->
    <param name=\"quality\" value=\"high\" />
    <param name=\"wmode\" value=\"opaque\" />
    <param name=\"scale\" value=\"noscale\" />
    <param name=\"salign\" value=\"lt\" />
    <param name=\"FlashVars\" value=\"&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=../video/video-sur-mesure&amp;autoPlay=true&amp;autoRewind=true\" />
    <param name=\"swfversion\" value=\"8,0,0,0\" />
    <param name=\"expressinstall\" value=\"Scripts/expressInstall.swf\" />
    <!-- Le navigateur affichera le contenu alternatif suivant pour les utilisateurs d'un lecteur Flash de version 6.0 ou de versions plus anciennes. -->
    <div>
      <h4>Le contenu de cette page nécessite une version plus récente d’Adobe Flash Player.</h4>
      <p><a href=\"http://www.adobe.com/go/getflashplayer\"><img src=\"http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif\" alt=\"Obtenir le lecteur Adobe Flash\" /></a></p>
    </div>
    <!--[if !IE]>-->
  </object>
  <!--<![endif]-->
</object>
<br />
APRES</div>
<p><br />
</p>
<div class=\"photo_vs_video\">
<img style=\"width: 320px; height: 240px;\" alt=\"habillage cheminée\" src=\"../images/parametres%20cache.jpg\" /><font size=\"-1\"><br />Dimensions
A,B,C, D d''une cheminée</font></div>
<div class=\"photo_vs_video\">
<img style=\"width: 360px; height: 254px;\" alt=\"cheminee ethanol\" src=\"../images/Cache%20cheminee%20avec%20cotes.gif\" /><br />
<small style=\"font-weight: bold;\">Le <a style=\"font-size: 14px;\" class=\"a\" href=\"../documents/Gabarit%20de%20mesure%20pour%20chemin%E9e%20existante.pdf\">gabarit de
l'habillage</a> SPARXS sur mesure permet de couvrir 95%
des cas de cheminées existantes (trapezoidales avec ou sans retour (A)
ou simplement rectangulaires).</small><br />
</div>
<!-- --><!-- --><!-- Bandeau Terminologie --><!-- --><!-- -->
<div class=\"terminologie\">

</div>


";
    }

    public function getTemplateName()
    {
        return "SpxMainBundle:Habillage:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
