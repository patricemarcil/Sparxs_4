<?php

/* SpxMainBundle:Default:links.html.twig */
class __TwigTemplate_5a0edb1e7cb82c7e5dadd1cdb128b794148268d128d2c8025abff37a022e6012 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SpxMainBundle:Default:index.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'modele' => array($this, 'block_modele'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SpxMainBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<div id=\"link-container\" class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\" id=\"bandeau\">
            <h1 align=\"center\">
            ";
        // line 9
        $this->displayBlock('header', $context, $blocks);
        // line 11
        echo "            </h1>
        </div>
    </div>
    <div class=\"row\">

        <div class=\"col-md-3\">
            <ul id=\"left-nav\" class=\"nav nav-pills nav-stacked\">
                ";
        // line 18
        $this->displayBlock('menu', $context, $blocks);
        // line 20
        echo "            </ul>
        </div>

        <div class=\"col-md-9\" role=\"main\">

            ";
        // line 25
        $this->displayBlock('modele', $context, $blocks);
        // line 27
        echo "
        </div>

    </div>
</div>

";
    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        // line 10
        echo "            ";
    }

    // line 18
    public function block_menu($context, array $blocks = array())
    {
        // line 19
        echo "                ";
    }

    // line 25
    public function block_modele($context, array $blocks = array())
    {
        // line 26
        echo "            ";
    }

    public function getTemplateName()
    {
        return "SpxMainBundle:Default:links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 26,  87 => 25,  83 => 19,  80 => 18,  76 => 10,  73 => 9,  63 => 27,  61 => 25,  52 => 18,  43 => 11,  41 => 9,  34 => 4,  58 => 11,  54 => 20,  50 => 9,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  37 => 8,  31 => 3,  28 => 3,);
    }
}
