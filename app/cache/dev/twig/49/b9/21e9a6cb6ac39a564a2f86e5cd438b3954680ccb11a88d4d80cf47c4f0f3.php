<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_49b921e9a6cb6ac39a564a2f86e5cd438b3954680ccb11a88d4d80cf47c4f0f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  175 => 65,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  303 => 122,  300 => 121,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  248 => 94,  226 => 84,  216 => 79,  200 => 72,  197 => 71,  191 => 67,  185 => 66,  181 => 65,  153 => 56,  150 => 55,  134 => 54,  113 => 48,  81 => 23,  70 => 19,  58 => 11,  53 => 12,  146 => 106,  90 => 27,  76 => 31,  340 => 195,  328 => 173,  296 => 147,  253 => 110,  245 => 105,  213 => 78,  198 => 72,  172 => 64,  170 => 194,  118 => 49,  114 => 58,  110 => 57,  97 => 53,  319 => 188,  310 => 167,  297 => 157,  267 => 101,  211 => 89,  195 => 71,  180 => 66,  126 => 61,  124 => 65,  104 => 54,  100 => 39,  84 => 24,  399 => 217,  390 => 195,  377 => 185,  358 => 169,  347 => 161,  315 => 125,  308 => 128,  301 => 124,  287 => 116,  280 => 112,  265 => 99,  262 => 98,  256 => 96,  239 => 219,  237 => 100,  233 => 87,  207 => 75,  205 => 98,  194 => 70,  190 => 89,  186 => 88,  178 => 66,  174 => 85,  165 => 60,  161 => 63,  152 => 188,  148 => 187,  127 => 62,  77 => 23,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 218,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 194,  322 => 189,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 120,  285 => 139,  283 => 88,  278 => 106,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 205,  177 => 65,  169 => 83,  140 => 58,  132 => 51,  128 => 49,  107 => 36,  61 => 25,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 104,  230 => 82,  227 => 99,  224 => 71,  221 => 90,  219 => 94,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 40,  102 => 40,  71 => 19,  67 => 24,  63 => 13,  59 => 14,  38 => 6,  94 => 44,  89 => 51,  85 => 50,  75 => 17,  68 => 14,  56 => 9,  87 => 34,  21 => 2,  26 => 6,  93 => 52,  88 => 50,  78 => 21,  46 => 13,  27 => 3,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 11,  166 => 193,  163 => 120,  158 => 62,  156 => 58,  151 => 59,  142 => 71,  138 => 54,  136 => 56,  121 => 50,  117 => 44,  105 => 34,  91 => 27,  62 => 12,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 18,  40 => 11,  37 => 8,  22 => 1,  246 => 93,  157 => 80,  145 => 46,  139 => 45,  131 => 63,  123 => 42,  120 => 40,  115 => 59,  111 => 47,  108 => 55,  101 => 48,  98 => 54,  96 => 37,  83 => 33,  74 => 14,  66 => 13,  55 => 16,  52 => 20,  50 => 9,  43 => 12,  41 => 12,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 73,  199 => 67,  193 => 73,  189 => 11,  187 => 84,  182 => 87,  176 => 63,  173 => 65,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 54,  144 => 178,  141 => 51,  133 => 177,  130 => 46,  125 => 51,  122 => 60,  116 => 39,  112 => 56,  109 => 34,  106 => 56,  103 => 32,  99 => 31,  95 => 28,  92 => 51,  86 => 28,  82 => 22,  80 => 32,  73 => 20,  64 => 23,  60 => 6,  57 => 11,  54 => 22,  51 => 19,  48 => 13,  45 => 10,  42 => 7,  39 => 10,  36 => 7,  33 => 4,  30 => 3,);
    }
}
