<?php

/* SpxMainBundle:Securite:anti-flash.html.twig */
class __TwigTemplate_007a93e25fe4aaf841b8895b854901cb53f9dbe66581c710f11f302ecc409071 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SpxMainBundle:Securite:securite.html.twig");

        $this->blocks = array(
            'modele' => array($this, 'block_modele'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SpxMainBundle:Securite:securite.html.twig";
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
<div>
\t<h2>Prévention de l'effet flash</h2>
\t<p>Conformément à l'exigence de la norme de sécurité <span style=\"color: red;\">NF D35-386</span>, il est impossible lorsque la zone de combustion d'éthanol est encore chaude:</p>
\t<div style=\"position: relative; float: right; text-align: center; min-height: 150px; font-family: Arial,Helvetica,sans-serif; padding-right: 2px; width: 320px;\">
\t\t<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/Securite/Carte%20electronique%20detouree.jpg"), "html", null, true);
        echo "\" alt=\"bruleur éthanol\" style=\"width: 300px; height: 175px; float: right;\" />
\t\t<p><small><span style=\"font-family: Helvetica,Arial,sans-serif;\">&nbsp;<span style=\"font-style: italic;\">Carte électronique gérant entres autres<br/>les sécurités liées à la température</span></span></small></p>
\t</div>
\t<ul style=\"margin-left: 11px;\" class=\"liste1\">
\t\t<li>d'accéder au &nbsp;réservoir de combustible</li>
\t\t<li>de redémarrer une flambée</li>
\t</ul>
\t<p>En effet, lorsque de l'éthanol est en contact avec les parties chaudes d'un brûleur, il se vaporise très vite; les vapeurs d'éthanol, plus lourdes que l'air, se confinent en une boule invisible au dessus du brûleur.</p>
\t<p>En approchant alors une allumette pour démarrer un feu, on va d'abord enflammer les vapeurs d'éthanol qui flottent autour du réservoir. C'est le dangereux Effet Flash qui a déjà provoqué de très graves brûlures avec des foyers à l'éthanol non sécurisés.</p>
\t<p>Les blocs de combustion au bio éthanol SPARXS sont, en conséquence, équipés de <span style=\"color: red;\">détecteurs de température et de systèmes de verrouillage</span> gérés par&nbsp;un microcontroleur électronique.</p>
</div>

";
    }

    public function getTemplateName()
    {
        return "SpxMainBundle:Securite:anti-flash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  31 => 4,  28 => 3,);
    }
}
