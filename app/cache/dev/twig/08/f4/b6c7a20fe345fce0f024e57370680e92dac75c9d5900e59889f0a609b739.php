<?php

/* SpxMainBundle:Galerie:galerie.html.twig */
class __TwigTemplate_08f4b6c7a20fe345fce0f024e57370680e92dac75c9d5900e59889f0a609b739 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SpxMainBundle:Default:links.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SpxMainBundle:Default:links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Galerie, vidéo et photos des cheminées Sparxs";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        echo "Galerie, vidéo et photos";
    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        // line 8
        echo "<li id=\"navbar-fonctionnement\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("spx_main_galerie_fonctionnement");
        echo "\">Fonctionnement (vidéo)</a></li>
<li id=\"navbar-photos\"><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("spx_main_galerie_photos");
        echo "\">Galerie de photos</a></li>
";
    }

    public function getTemplateName()
    {
        return "SpxMainBundle:Galerie:galerie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  46 => 14,  43 => 13,  32 => 4,  29 => 3,);
    }
}
