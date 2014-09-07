<?php

/* SpxMainBundle:Default:reglementation.html.twig */
class __TwigTemplate_3372303fe966b44c82fac6fea3ad903079df1eef3271a6a9b924458b5dd6a46e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SpxMainBundle:Default:links.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'modele' => array($this, 'block_modele'),
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
        echo "Interdiction des feux de bois";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        echo "Les feux de bois en cheminées interdits en ville";
    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        // line 8
        echo "<li><button class=\"btn btn-danger nav-btn\" style=\"width:100%\">Télécharger :</button></li>
<li id=\"navbar-beton\"><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/news/arrete interdiction feu de bois.pdf"), "html", null, true);
        echo "\" target=\"_blank\">Arrêté Préfectoral</a></li>
<li id=\"navbar-inox-standard\"><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("spx_main_habillages", array("type" => "inox-standard"));
        echo "\">Inox standard</a></li>
<li id=\"navbar-inox-sur-mesure\"><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("spx_main_habillages", array("type" => "inox-sur-mesure"));
        echo "\">Inox sur mesure</a></li>
";
    }

    // line 13
    public function block_modele($context, array $blocks = array())
    {
        // line 14
        echo "<h2>LES FEUX DE BOIS INTERDITS EN VILLE ET AGGLOMERATION ?<h2/>
<h5>            
A partir du 1er janvier 2015, les feux de cheminée dans les foyers ouverts seront interdits en Ile de France. En effet, la législation évolue et va de plus en plus étendre la limitation de cette pratique.<h5/>
<h5>La raison en est que les feux de bois génèrent une importante pollution par les particules fines (une demi-journée au coin du feu émet autant de particules fines qu'une voiture diesel qui roulerait pendant 3.500 kms!) et la France commence à suivre des mesures déjà adoptées notamment aux Etats-Unis (par exemple en Californie).<h5/> 
<h5>L’arrêté inter-préfectoral du 26 mars 2013 mentionne deux cas:
<ul>
<li class=\"h5\">dans Paris intra-muros, la combustion de bois sera totalement interdite (aussi bien pour les poêles que pour les cheminées) sauf par dérogation pour des installations très performantes ou dans l'artisanat.</li>
<li class=\"h5\">en Île-de-France si vous avez une cheminée traditionnelle, c'est-à-dire à foyer ouvert, vous ne pourrez plus faire de feu dans les 430 communes énumérées par décret. Vous pourrez continuer de faire du feu si vous avez une chaudière à bois, un poêle ou un foyer fermé type insert.</li>
</ul></h5>
<h4>Alors que faire de votre cheminée ? <span class=\"glyphicon glyphicon-arrow-right\"></span> Conservez la magie et la présence du feu avec un brûleur sécurisé SPARXS posé dans <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("spx_main_habillages", array("type" => "inox-sur-mesure"));
        echo "\"><em>un habillage spécialement destiné aux cheminées existantes</em></a></h4>
<h5>Placer un bruleur électronique à éthanol SPARXS dans une ancienne cheminée procure de nombreux avantages:
<ul >
<li class=\"h5\">un très beau design contemporain en parfaite harmonie avec l'ancien</li>
<li class=\"h5\">plus de corvée de bois et de ramonage</li>
<li class=\"h5\">plus de suie: la combustion de l’éthanol ne dégage que de la vapeur d’eau et du CO2 comme la respiration d'un être humain</li>
<li class=\"h5\">en obturant facilement votre conduit avec de la laine de roche, vous chaufferez votre pièce comme avec un très puissant radiateur électrique(2,5 à 4,5 kw). Toute l'énergie de la combustion est conservée dans la pièce alors qu'un feu de bois traditionnel ne conserve que 15-20% de cette énergie.</li>
</ul>
<h5>Vous avez également la possibilité d'insérer le brûleur entre 2 chenets pour conserver un coté plus rustique.</h5>
<h5>Rappelons que les produits SPARXS, 100% made in France, sont leaders du marché, cocorico; ils ont non seulement été parmi les tout premiers à satisfaire à la norme de sécurité D35-386 dont les principales obligations sont: l’impossibilité de rallumage à chaud , l’impossibilité de remplissage ou d’accès au combustible en fonctionnement  et l’arrêt automatique en cas de taux de CO2 dépassant 0,8 % dans la pièce, mais de plus ils possèdent un réservoir amovible pour encore plus de confort d'utilisation et de sécurité (le remplissage pouvant avoir lieu au dessus d'un évier et non accropui devant la cheminée du salon). 
</h5>
";
    }

    public function getTemplateName()
    {
        return "SpxMainBundle:Default:reglementation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  146 => 106,  90 => 26,  76 => 10,  340 => 195,  328 => 173,  296 => 147,  253 => 110,  245 => 105,  213 => 85,  198 => 72,  172 => 196,  170 => 194,  118 => 59,  114 => 58,  110 => 57,  97 => 53,  319 => 188,  310 => 167,  297 => 157,  267 => 133,  211 => 89,  195 => 71,  180 => 66,  126 => 61,  124 => 65,  104 => 54,  100 => 53,  84 => 49,  399 => 217,  390 => 195,  377 => 185,  358 => 169,  347 => 161,  315 => 163,  308 => 128,  301 => 124,  287 => 116,  280 => 112,  265 => 99,  262 => 98,  256 => 11,  239 => 219,  237 => 100,  233 => 216,  207 => 200,  205 => 98,  194 => 90,  190 => 89,  186 => 88,  178 => 86,  174 => 85,  165 => 82,  161 => 81,  152 => 188,  148 => 187,  127 => 62,  77 => 23,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 218,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 194,  322 => 189,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 120,  285 => 139,  283 => 88,  278 => 141,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 95,  220 => 70,  214 => 205,  177 => 65,  169 => 83,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 25,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 104,  230 => 82,  227 => 99,  224 => 71,  221 => 90,  219 => 94,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 60,  102 => 55,  71 => 19,  67 => 15,  63 => 13,  59 => 14,  38 => 6,  94 => 53,  89 => 51,  85 => 50,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 52,  88 => 50,  78 => 21,  46 => 8,  27 => 4,  44 => 12,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 11,  166 => 193,  163 => 120,  158 => 67,  156 => 66,  151 => 183,  142 => 71,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 55,  91 => 27,  62 => 23,  49 => 9,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 5,  22 => 1,  246 => 90,  157 => 80,  145 => 46,  139 => 45,  131 => 63,  123 => 61,  120 => 40,  115 => 59,  111 => 58,  108 => 55,  101 => 54,  98 => 54,  96 => 52,  83 => 19,  74 => 14,  66 => 14,  55 => 15,  52 => 18,  50 => 9,  43 => 7,  41 => 9,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 84,  199 => 67,  193 => 73,  189 => 11,  187 => 84,  182 => 87,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 190,  149 => 51,  147 => 58,  144 => 178,  141 => 48,  133 => 177,  130 => 93,  125 => 44,  122 => 60,  116 => 41,  112 => 56,  109 => 34,  106 => 56,  103 => 32,  99 => 31,  95 => 28,  92 => 51,  86 => 28,  82 => 22,  80 => 18,  73 => 9,  64 => 17,  60 => 6,  57 => 11,  54 => 20,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
