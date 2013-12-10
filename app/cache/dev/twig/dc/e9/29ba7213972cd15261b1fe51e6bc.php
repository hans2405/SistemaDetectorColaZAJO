<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_dce929ba7213972cd15261b1fe51e6bc extends Twig_Template
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
        return array (  161 => 63,  462 => 202,  446 => 197,  439 => 195,  431 => 189,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  248 => 94,  233 => 87,  226 => 84,  213 => 78,  207 => 75,  200 => 72,  197 => 71,  194 => 70,  191 => 67,  185 => 66,  181 => 65,  178 => 66,  172 => 64,  153 => 56,  150 => 55,  134 => 54,  113 => 48,  118 => 49,  90 => 27,  58 => 12,  102 => 40,  97 => 38,  100 => 39,  104 => 42,  522 => 272,  518 => 271,  514 => 270,  509 => 268,  505 => 267,  501 => 266,  497 => 265,  493 => 264,  484 => 258,  476 => 256,  472 => 255,  468 => 254,  464 => 253,  449 => 198,  445 => 246,  441 => 196,  433 => 243,  429 => 188,  425 => 241,  418 => 237,  414 => 236,  410 => 235,  403 => 231,  399 => 230,  395 => 229,  388 => 225,  380 => 160,  376 => 222,  372 => 221,  358 => 183,  335 => 134,  333 => 182,  324 => 176,  317 => 173,  296 => 173,  289 => 113,  279 => 161,  274 => 159,  256 => 96,  254 => 142,  251 => 141,  239 => 132,  231 => 130,  227 => 129,  223 => 128,  216 => 79,  198 => 108,  184 => 98,  175 => 65,  65 => 21,  81 => 23,  76 => 31,  63 => 18,  59 => 14,  53 => 12,  77 => 25,  480 => 257,  474 => 161,  469 => 158,  461 => 155,  457 => 249,  453 => 199,  444 => 149,  440 => 148,  437 => 244,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 224,  381 => 120,  379 => 119,  374 => 116,  368 => 220,  365 => 219,  362 => 218,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 88,  278 => 106,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 90,  235 => 131,  229 => 85,  224 => 71,  220 => 81,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 58,  132 => 51,  128 => 57,  119 => 40,  107 => 68,  71 => 24,  177 => 65,  165 => 60,  160 => 61,  135 => 47,  126 => 45,  114 => 40,  84 => 24,  70 => 19,  67 => 24,  61 => 13,  38 => 6,  94 => 32,  89 => 27,  85 => 38,  75 => 27,  68 => 20,  56 => 11,  87 => 34,  21 => 2,  26 => 6,  93 => 34,  88 => 52,  78 => 27,  46 => 13,  27 => 3,  44 => 8,  31 => 4,  28 => 3,  201 => 92,  196 => 107,  183 => 70,  171 => 61,  166 => 86,  163 => 70,  158 => 62,  156 => 58,  151 => 59,  142 => 59,  138 => 57,  136 => 62,  121 => 50,  117 => 44,  105 => 34,  91 => 31,  62 => 18,  49 => 14,  24 => 1,  25 => 3,  19 => 1,  79 => 28,  72 => 21,  69 => 22,  47 => 9,  40 => 6,  37 => 10,  22 => 2,  246 => 93,  157 => 83,  145 => 46,  139 => 50,  131 => 42,  123 => 42,  120 => 40,  115 => 70,  111 => 47,  108 => 36,  101 => 32,  98 => 36,  96 => 37,  83 => 33,  74 => 30,  66 => 15,  55 => 16,  52 => 10,  50 => 9,  43 => 12,  41 => 5,  35 => 6,  32 => 5,  29 => 2,  209 => 82,  203 => 73,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 63,  173 => 74,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 69,  147 => 54,  144 => 67,  141 => 51,  133 => 55,  130 => 46,  125 => 51,  122 => 40,  116 => 39,  112 => 53,  109 => 69,  106 => 42,  103 => 38,  99 => 31,  95 => 32,  92 => 42,  86 => 31,  82 => 28,  80 => 32,  73 => 20,  64 => 23,  60 => 22,  57 => 12,  54 => 20,  51 => 17,  48 => 10,  45 => 10,  42 => 7,  39 => 10,  36 => 8,  33 => 4,  30 => 3,);
    }
}
