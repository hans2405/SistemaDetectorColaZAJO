<?php

/* RutaMicroBundle:Calle:new.html.twig */
class __TwigTemplate_91fb3334f48c921765a22caec2a21ba6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Registro nuevo";
    }

    // line 3
    public function block_section($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"row\">
    <div class=\"span3\"></div>
    <div class=\"span4\">
    <h2>";
        // line 8
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>

    <form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("calle_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
;
        echo ">
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <p>
            <button type=\"submit\">Registrar</button>
        </p>
    </form>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("calle");
        echo "\">
           ir atras a la lista
        </a>
    </li>
</ul>


</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "RutaMicroBundle:Calle:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  522 => 272,  518 => 271,  514 => 270,  509 => 268,  505 => 267,  501 => 266,  497 => 265,  493 => 264,  484 => 258,  476 => 256,  472 => 255,  468 => 254,  464 => 253,  449 => 247,  445 => 246,  441 => 245,  433 => 243,  429 => 242,  425 => 241,  418 => 237,  414 => 236,  410 => 235,  403 => 231,  399 => 230,  395 => 229,  388 => 225,  380 => 223,  376 => 222,  372 => 221,  358 => 183,  335 => 184,  333 => 182,  324 => 176,  317 => 173,  296 => 173,  289 => 168,  279 => 161,  274 => 159,  256 => 143,  254 => 142,  251 => 141,  239 => 132,  231 => 130,  227 => 129,  223 => 128,  216 => 124,  198 => 108,  184 => 98,  175 => 92,  65 => 16,  81 => 20,  76 => 25,  63 => 21,  59 => 20,  53 => 15,  77 => 23,  480 => 257,  474 => 161,  469 => 158,  461 => 155,  457 => 249,  453 => 248,  444 => 149,  440 => 148,  437 => 244,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 224,  381 => 120,  379 => 119,  374 => 116,  368 => 220,  365 => 219,  362 => 218,  360 => 109,  355 => 182,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 201,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 131,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  107 => 36,  71 => 19,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 28,  70 => 29,  67 => 19,  61 => 15,  38 => 4,  94 => 32,  89 => 20,  85 => 25,  75 => 23,  68 => 20,  56 => 11,  87 => 23,  21 => 2,  26 => 6,  93 => 28,  88 => 28,  78 => 34,  46 => 14,  27 => 4,  44 => 8,  31 => 4,  28 => 3,  201 => 92,  196 => 107,  183 => 70,  171 => 61,  166 => 86,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 24,  62 => 21,  49 => 10,  24 => 1,  25 => 3,  19 => 1,  79 => 18,  72 => 21,  69 => 17,  47 => 9,  40 => 6,  37 => 10,  22 => 2,  246 => 32,  157 => 83,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 26,  66 => 18,  55 => 15,  52 => 12,  50 => 18,  43 => 8,  41 => 10,  35 => 3,  32 => 2,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 85,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 36,  112 => 42,  109 => 41,  106 => 34,  103 => 33,  99 => 40,  95 => 34,  92 => 35,  86 => 39,  82 => 15,  80 => 29,  73 => 18,  64 => 17,  60 => 17,  57 => 16,  54 => 16,  51 => 15,  48 => 13,  45 => 17,  42 => 7,  39 => 10,  36 => 8,  33 => 4,  30 => 7,);
    }
}
