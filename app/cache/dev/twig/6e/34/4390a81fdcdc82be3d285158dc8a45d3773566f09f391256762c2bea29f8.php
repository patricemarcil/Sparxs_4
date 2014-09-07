<?php

/* SpxMainBundle:Habillage:inox-standard.html.twig */
class __TwigTemplate_6e344390a81fdcdc82be3d285158dc8a45d3773566f09f391256762c2bea29f8 extends Twig_Template
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

<h2> Habillage standard du bruleur bio-éthanol TOPDEC</h2>
<h4>SPARXS propose un habillage standard en inox pour
ceux qui souhaitent par exemple passer leur système à l'éthanol d'une cheminée à une autre</h4><br /><br />
<div style=\"text-align:center\"><img style=\"width:60%\" alt=\"cheminee ethanol\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/Habillages/WTN fentes longues.jpg"), "html", null, true);
        echo "\" /></div>
<h5 style=\"text-align: center\">Cet habillage est réalisé dans un inox brossé de très belle qualité dont le pourtour est peint en noir.<br/></h5>
<h5 style=\"text-align: center;\">Ses dimensions hors tout sont 536 mm (L) x 276 mm (P) x 118 mm (H)</h5>
<br />
<div style=\"text-align:center\"><img style=\"width:60%\" alt=\"habillage brûleur ethanol\" alt=\"Cheminée inutilisée\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/Habillages/Habillage a fentes grand.jpg"), "html", null, true);
        echo "\" /></div>
<h5 style=\"text-align: center\">Habillage du bruleur bio-éthanol TOPDEC sur table à des fins de présentation</h5><br />
<h6>(en réalité il doit toujours être fixé au bâti ou quasi-fixé </br>
  dans un endroit sans aucun risque de mouvement </h6>

";
    }

    public function getTemplateName()
    {
        return "SpxMainBundle:Habillage:inox-standard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  38 => 9,  31 => 4,  28 => 3,);
    }
}
