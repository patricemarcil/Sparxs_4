<?php

/* SpxMainBundle:Habillage:habillage.html.twig */
class __TwigTemplate_66c9ba0e394592c8f321df933607cf8c43a8e94a2c4a06b6960292f528e923c4 extends Twig_Template
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
        echo "Nos habillages pour cheminées";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        echo "Nos habillages pour cheminées";
    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        // line 8
        echo "<li id=\"navbar-beton\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("spx_main_habillages", array("type" => "beton"));
        echo "\">Béton ciré</a></li>
<li id=\"navbar-inox-standard\"><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("spx_main_habillages", array("type" => "inox-standard"));
        echo "\">Inox standard</a></li>
<li id=\"navbar-inox-sur-mesure\"><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("spx_main_habillages", array("type" => "inox-sur-mesure"));
        echo "\">Inox sur mesure</a></li>
";
    }

    public function getTemplateName()
    {
        return "SpxMainBundle:Habillage:habillage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  50 => 9,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  59 => 24,  51 => 19,  41 => 12,  31 => 4,  28 => 3,);
    }
}
