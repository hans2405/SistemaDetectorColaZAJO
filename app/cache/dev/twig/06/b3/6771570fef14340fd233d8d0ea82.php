<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_06b36771570fef14340fd233d8d0ea82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Redirection Intercepted";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 328,  339 => 316,  295 => 275,  20 => 1,  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  745 => 476,  742 => 475,  723 => 473,  706 => 472,  702 => 470,  698 => 469,  694 => 468,  690 => 467,  686 => 466,  682 => 465,  678 => 464,  675 => 463,  673 => 462,  656 => 461,  645 => 460,  630 => 455,  625 => 453,  621 => 452,  618 => 451,  616 => 450,  602 => 449,  565 => 414,  547 => 411,  530 => 410,  527 => 409,  525 => 408,  520 => 406,  515 => 404,  244 => 136,  188 => 90,  389 => 160,  386 => 159,  378 => 157,  371 => 156,  367 => 155,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  307 => 128,  302 => 125,  293 => 120,  290 => 119,  281 => 114,  276 => 111,  269 => 107,  259 => 103,  253 => 100,  232 => 88,  222 => 83,  210 => 77,  170 => 84,  155 => 47,  152 => 46,  127 => 35,  34 => 5,  363 => 153,  357 => 123,  353 => 149,  344 => 318,  332 => 116,  327 => 114,  321 => 135,  318 => 111,  306 => 107,  297 => 276,  291 => 102,  288 => 118,  265 => 105,  263 => 95,  255 => 101,  243 => 92,  212 => 78,  202 => 77,  190 => 76,  174 => 65,  161 => 63,  462 => 202,  446 => 197,  439 => 195,  431 => 189,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  373 => 156,  361 => 152,  351 => 120,  348 => 140,  342 => 317,  338 => 135,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 131,  303 => 106,  300 => 105,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  248 => 97,  233 => 87,  226 => 84,  213 => 78,  207 => 75,  200 => 72,  197 => 69,  194 => 68,  191 => 67,  185 => 74,  181 => 65,  178 => 59,  172 => 57,  153 => 77,  150 => 55,  134 => 39,  113 => 48,  118 => 49,  90 => 42,  58 => 18,  102 => 43,  97 => 38,  100 => 39,  104 => 32,  522 => 272,  518 => 271,  514 => 270,  509 => 268,  505 => 267,  501 => 266,  497 => 265,  493 => 264,  484 => 258,  476 => 256,  472 => 255,  468 => 254,  464 => 253,  449 => 198,  445 => 246,  441 => 196,  433 => 243,  429 => 188,  425 => 241,  418 => 237,  414 => 236,  410 => 235,  403 => 231,  399 => 230,  395 => 229,  388 => 225,  380 => 158,  376 => 222,  372 => 221,  358 => 151,  335 => 134,  333 => 182,  324 => 113,  317 => 173,  296 => 121,  289 => 113,  279 => 161,  274 => 110,  256 => 96,  254 => 142,  251 => 141,  239 => 132,  231 => 83,  227 => 86,  223 => 128,  216 => 79,  198 => 108,  184 => 63,  175 => 58,  65 => 24,  81 => 29,  76 => 27,  63 => 21,  59 => 16,  53 => 15,  77 => 28,  480 => 257,  474 => 161,  469 => 158,  461 => 155,  457 => 249,  453 => 199,  444 => 149,  440 => 148,  437 => 244,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 224,  381 => 120,  379 => 119,  374 => 116,  368 => 220,  365 => 219,  362 => 218,  360 => 109,  355 => 150,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 115,  278 => 98,  268 => 85,  264 => 84,  258 => 94,  252 => 80,  247 => 78,  241 => 93,  235 => 89,  229 => 87,  224 => 81,  220 => 81,  214 => 69,  208 => 76,  169 => 60,  143 => 51,  140 => 58,  132 => 51,  128 => 57,  119 => 40,  107 => 68,  71 => 23,  177 => 65,  165 => 83,  160 => 61,  135 => 47,  126 => 45,  114 => 40,  84 => 35,  70 => 26,  67 => 22,  61 => 12,  38 => 6,  94 => 38,  89 => 30,  85 => 23,  75 => 28,  68 => 12,  56 => 16,  87 => 32,  21 => 2,  26 => 3,  93 => 34,  88 => 25,  78 => 18,  46 => 14,  27 => 4,  44 => 11,  31 => 8,  28 => 3,  201 => 92,  196 => 92,  183 => 70,  171 => 61,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 59,  138 => 57,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 35,  62 => 24,  49 => 14,  24 => 2,  25 => 3,  19 => 1,  79 => 29,  72 => 18,  69 => 17,  47 => 21,  40 => 8,  37 => 7,  22 => 2,  246 => 96,  157 => 83,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 70,  111 => 47,  108 => 36,  101 => 31,  98 => 34,  96 => 39,  83 => 30,  74 => 30,  66 => 25,  55 => 38,  52 => 12,  50 => 15,  43 => 11,  41 => 19,  35 => 5,  32 => 6,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 69,  147 => 75,  144 => 42,  141 => 73,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 47,  106 => 51,  103 => 38,  99 => 23,  95 => 34,  92 => 28,  86 => 31,  82 => 19,  80 => 27,  73 => 27,  64 => 21,  60 => 22,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 9,  42 => 8,  39 => 10,  36 => 7,  33 => 6,  30 => 5,);
    }
}
