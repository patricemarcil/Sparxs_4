<?php

/* SpxMainBundle:Produits:produits.html.twig */
class __TwigTemplate_8d679ef96b41a2ca9a11410bddeeb4bf5378200712ef82fc07e471c040270836 extends Twig_Template
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
        echo "Nos Produits, brûleurs topdec, topdec XL et topdec XXL";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        echo "Nos Produits";
    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        // line 8
        echo "<li id=\"navbar-topdec\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("spx_main_produits", array("modele" => "topdec"));
        echo "\">Modèle Topdec</a></li>
<li id=\"navbar-topdec-xl\"><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("spx_main_produits", array("modele" => "topdec-xl"));
        echo "\">Modèle Topdec XL</a></li>
<li id=\"navbar-topdec-xxl\"><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("spx_main_produits", array("modele" => "topdec-xxl"));
        echo "\">Modèle Topdec XXL</a></li>
<li id=\"navbar-recharges\"><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("spx_main_produits", array("modele" => "recharges"));
        echo "\">Recharges</a></li>
";
    }

    public function getTemplateName()
    {
        return "SpxMainBundle:Produits:produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  54 => 10,  50 => 9,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  37 => 8,  31 => 4,  28 => 3,);
    }
}
