<?php

/* SpxMainBundle:Securite:controle-parental.html.twig */
class __TwigTemplate_15065bc8cc57c090823afe1b33e177845ef62faecf2fed0347851f831a52927f extends Twig_Template
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
<div class=\"panneau_principal\">
\t<h2>Contrôle parental</h2>
\t<img style=\"width: 300px; height: 195px; float: right; margin-right: -15px; margin-left: 20px; margin-top: 20px;\" alt=\"cheminée éthanol\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/Securite/Boitier-pile-main.jpg"), "html", null, true);
        echo "\" />
\t<p>Certains parents souhaitent que leurs enfants ou des proches ne puissent pas allumer un feu en leur absence.</p>
\t<p>C'est pourquoi, les brûleurs Sparxs sont équipés de <span style=\"color: red;\">boîtiers support de piles amovibles</span> spécifiques. Une fois ce support retiré un simple clic, il est impossible à une autre personne de placer des piles directement dans l'appareil pour le faire fonctionner.</p>
\t<p>C'est la plus simple et la meilleure sécurité contre une utilisation non désirée en votre absence.</p>
</div>

";
    }

    public function getTemplateName()
    {
        return "SpxMainBundle:Securite:controle-parental.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  31 => 4,  28 => 3,);
    }
}
