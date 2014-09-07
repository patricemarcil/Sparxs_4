<?php

/* SpxMainBundle:Securite:securite.html.twig */
class __TwigTemplate_bd2b1d34eda42f146fff2ff7b98e8a6d3b7b58c9c86e315bb0ca8025dc5b57c7 extends Twig_Template
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
        echo "La Sécurité de nos brûleurs";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        echo "La Sécurité";
    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        // line 8
        echo "<li id=\"navbar-anti-flash\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("spx_main_securite", array("item" => "anti-flash"));
        echo "\">Anti-flash</a></li>
<li id=\"navbar-qualite\"><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("spx_main_securite", array("item" => "qualite"));
        echo "\">Qualité de combustion</a></li>
<li id=\"navbar-reservoir-amovible\"><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("spx_main_securite", array("item" => "reservoir-amovible"));
        echo "\">Réservoir amovible</a></li>
<li id=\"navbar-controle-parental\"><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("spx_main_securite", array("item" => "controle-parental"));
        echo "\">Controle parental</a></li>
<li id=\"navbar-detection-de-CO2\"><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("spx_main_securite", array("item" => "detection-de-CO2"));
        echo "\">Détection de CO2</a></li>
<li id=\"navbar-assurances\"><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("spx_main_securite", array("item" => "assurances"));
        echo "\">Assurances</a></li>
<li id=\"navbar-conception\"><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("spx_main_securite", array("item" => "conception"));
        echo "\">Conception & qualité</a></li>
";
    }

    public function getTemplateName()
    {
        return "SpxMainBundle:Securite:securite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  38 => 9,  31 => 4,  28 => 3,);
    }
}
