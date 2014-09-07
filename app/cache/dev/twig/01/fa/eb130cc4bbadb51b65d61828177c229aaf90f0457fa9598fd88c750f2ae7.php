<?php

/* SpxMainBundle:Produits:topdec.html.twig */
class __TwigTemplate_01faeb130cc4bbadb51b65d61828177c229aaf90f0457fa9598fd88c750f2ae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SpxMainBundle:Produits:produits.html.twig");

        $this->blocks = array(
            'modele' => array($this, 'block_modele'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SpxMainBundle:Produits:produits.html.twig";
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
\t<h2 style=\"margin-bottom: 20px\">Le bloc de combustion  TOPDEC pour cheminée bio éthanol est le best-seller de la gamme SPARXS</h2>
\t<div style=\"height: 252px; float: right; position: relative; width: 399px;\">
\t\t<img alt=\"bruleur ethanol\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/Produits/Habillage-a-fentes.jpg"), "html", null, true);
        echo "\" />
\t\t<p align=\"center\"><small>Topdec dans son habillage Loggia</small></p>
\t</div>
\t<h4>Design épuré:</h4>
\t<ul>
\t\t<li>le bloc de combustion bio-éthanol TOPDEC s'intègre\"flush\", c'est à dire affleurant au niveau de la structure le recevant</li>
\t\t<li>sa flamme se reflète sur le capot avant prenant ainsi une consistence accrue, unaniment reconnue comme la plus belle  du marché des cheminées bio-éthanol (voir videos dans \"Habillages\")</li>
\t</ul>
\t<h4>Grande simplicité d'utilisation</h4>
\t<ul>
\t\t<li>Le réservoir de bio-éthanol amovible permet un remplissage à distance à la fois plus aisé et sans risque de débordement à proximité du foyer</li>
\t\t<li>Les commandes et indications d'état de l'appareil sont accessibles par la combinaison de 2 bouton-poussoirs lumineux bicolores</li>
\t\t<li>Pas de branchement:  fonctionnement basse consommation sur piles alcalines (autonomie de 30 flambées environ) ou piles rechargeables.</li>
\t\t<li> Pour une utilisation encore plus aisée, possibilité de recharges d'éthanol pré-remplies en usine à usage unique</li>
\t</ul>
\t<h4>Sécurité sans compromis (+ d'info dans l'onglet SÉCURITÉ):</h4>
\t<ul>
\t\t<li>le bloc de combustion pour cheminées bio-éthanol TOPDEC a été certifié 100% conforme à la nouvelle norme de sécurité NF D35-386 par le Laboratoire National d'Essai  (organisme gouvernemental indépendant)</li>
\t\t<li>Le réservoir de bio-éthanol amovible est un avantage inconstestable du système Sparxs aussi bien en terme de sécurité qu'en terme de facilité d'utilisation</li>
\t</ul>
</div>

";
    }

    public function getTemplateName()
    {
        return "SpxMainBundle:Produits:topdec.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  31 => 4,  28 => 3,);
    }
}
