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
        return array (  70 => 14,  58 => 11,  53 => 10,  146 => 106,  90 => 26,  76 => 10,  340 => 195,  328 => 173,  296 => 147,  253 => 110,  245 => 105,  213 => 85,  198 => 72,  172 => 196,  170 => 194,  118 => 59,  114 => 58,  110 => 57,  97 => 53,  319 => 188,  310 => 167,  297 => 157,  267 => 133,  211 => 89,  195 => 71,  180 => 66,  126 => 61,  124 => 65,  104 => 54,  100 => 53,  84 => 49,  399 => 217,  390 => 195,  377 => 185,  358 => 169,  347 => 161,  315 => 163,  308 => 128,  301 => 124,  287 => 116,  280 => 112,  265 => 99,  262 => 98,  256 => 11,  239 => 219,  237 => 100,  233 => 216,  207 => 200,  205 => 98,  194 => 90,  190 => 89,  186 => 88,  178 => 86,  174 => 85,  165 => 82,  161 => 81,  152 => 188,  148 => 187,  127 => 62,  77 => 23,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 218,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 194,  322 => 189,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 120,  285 => 139,  283 => 88,  278 => 141,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 95,  220 => 70,  214 => 205,  177 => 65,  169 => 83,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 25,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 104,  230 => 82,  227 => 99,  224 => 71,  221 => 90,  219 => 94,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 60,  102 => 55,  71 => 19,  67 => 15,  63 => 13,  59 => 24,  38 => 9,  94 => 44,  89 => 51,  85 => 50,  75 => 17,  68 => 14,  56 => 9,  87 => 40,  21 => 2,  26 => 6,  93 => 52,  88 => 50,  78 => 21,  46 => 14,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 11,  166 => 193,  163 => 120,  158 => 67,  156 => 66,  151 => 183,  142 => 71,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 55,  91 => 27,  62 => 12,  49 => 9,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 18,  40 => 8,  37 => 8,  22 => 1,  246 => 90,  157 => 80,  145 => 46,  139 => 45,  131 => 63,  123 => 61,  120 => 40,  115 => 59,  111 => 58,  108 => 55,  101 => 48,  98 => 54,  96 => 52,  83 => 19,  74 => 14,  66 => 13,  55 => 15,  52 => 20,  50 => 9,  43 => 13,  41 => 12,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 84,  199 => 67,  193 => 73,  189 => 11,  187 => 84,  182 => 87,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 190,  149 => 51,  147 => 58,  144 => 178,  141 => 48,  133 => 177,  130 => 93,  125 => 44,  122 => 60,  116 => 41,  112 => 56,  109 => 34,  106 => 56,  103 => 32,  99 => 31,  95 => 28,  92 => 51,  86 => 28,  82 => 22,  80 => 36,  73 => 32,  64 => 17,  60 => 6,  57 => 11,  54 => 22,  51 => 19,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 7,  33 => 4,  30 => 3,);
    }
}
