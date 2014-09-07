<?php

/* SpxMainBundle:Habillage:beton.html.twig */
class __TwigTemplate_edeea4e6ab77f1b9468aa346d3d97e6d1a1e7740828648f1ebb5884978e8c92f extends Twig_Template
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
<h2> HABILLAGE EN BÉTON CIRÉ POUR MODÈLE TOPDEC</h2>
<h5>Cet habillage occupe en toute légèreté l'espace
dans des cheminées de grande taille.</h5>
<h5>Il se marie aussi bien avec le
contemporain qu'avec l'ancien et l'aspect rendu par le béton ciré lui
confère un positionnement très tendance.</h5>
<div align=\"center\">
\t<img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/Habillages/Habillage-beton-jardin.jpg"), "html", null, true);
        echo "\">
\t<p>Habillage sur table à des fins de présentation<br/>
\t<small><small>(<small> en réalité il doit toujours être fixé au bâti ou quasi-fixé dans un endroit sans aucun risque de mouvement </small>)</small></small></p>
</div>

<div align=\"center\">
\t<div class=\"photo_vs_video\" style=\"display: inline-block\">
\t\t<img style=\"width: 320px; height: 240px;\" alt=\"nuancier cheminée\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/Habillages/Nuancier-beton.jpg"), "html", null, true);
        echo "\"/>
\t\t<p>Nuancier<br>
\t\t<small><small><small>Les teintes sont susceptibles de légères variations car chaque <br /> habillage est réalisé à la main et à la commande.</small></small></small></p>
\t</div>
\t<div class=\"photo_vs_video\" style=\"display: inline-block\">
\t\t<img style=\"width: 320px; height: 240px;\" alt=\"nuancier cheminée\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/Habillages/Nuancier-beton.jpg"), "html", null, true);
        echo "\"/>
\t\t<p>Nuancier<br>
\t\t<small><small><small>Les teintes sont susceptibles de légères variations car chaque <br /> habillage est réalisé à la main et à la commande.</small></small></small></p>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SpxMainBundle:Habillage:beton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 24,  51 => 19,  41 => 12,  31 => 4,  28 => 3,);
    }
}
