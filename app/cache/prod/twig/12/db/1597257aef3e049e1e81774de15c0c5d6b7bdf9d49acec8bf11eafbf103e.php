<?php

/* SpxMainBundle:Default:commander.html.twig */
class __TwigTemplate_12db1597257aef3e049e1e81774de15c0c5d6b7bdf9d49acec8bf11eafbf103e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SpxMainBundle:Default:index.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Nous contacter";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"container bs-docs-container\" style=\"border: solid 1px #C8C8C8\">

    <div class=\"row\">
        <div class=\"col-md-12\" style=\"background-color: rgb(92,96,99); height: 150px; margin-top: -20px;\">
            <h1 align=\"center\" style=\"color:white; padding-top: 30px;\">Où trouver des bruleurs Sparxs ?</h1>
            <h3 align=\"center\" style=\"color:white;\">Contactez nous au 09 81 74 74 74</h3>
        </div>
    </div>

\t<div class=\"row\">
\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t<h3>Particuliers- Vous cherchez un brûleur Sparxs près de chez vous ou souhaitez des renseignements complémentaires:</h3>
\t\t\t<p></p>
\t\t\t<p>N'hésitez pas à nous contacter au: <big><b>09 81 74 74 74</b></big> <small> (prix d'un appel local)</small></p>
\t\t\t
\t\t\t<h3>Professionels - Vous souhaitez intégrer Sparxs à votre gamme ?</h3>
\t\t\t<p>Si vous voulez intégrer nos brûleurs SPARXS à vos cheminées de décorations.</p>
\t\t\t<p>Si vous voulez distribuer nos brûleurs ou cheminées à vos clients.</p>
\t\t\t<p>Veuillez prendre contact directement avec <strong>Jean Gatellier en passant par notre standard <br> au <big><b>09 81 74 74 74</b></big> <small> (prix d'un appel local)</small> </strong> ou par email à contact@sparxs.fr</p>
\t\t\t<p align=\"center\"><big><a href=\"mailto:contact@sparxs.fr\">contact@sparxs.fr</a></big></p>
\t\t\t<h3>Journalistes - Vous souhaitez parler de Sparxs ?</h3>
\t\t\t<p>Vous souhaitez plus de détails sur nos brûleurs et la sécurité.</p>
\t\t\t<p>Vous souhaitez parler d'une belle entreprise industrielle 100% française.</p>
\t\t\t<p>Contactez directement <strong>Jean Gatellier au <big><b>09 81 74 74 74</b></big></strong></p>
\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "SpxMainBundle:Default:commander.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,);
    }
}
