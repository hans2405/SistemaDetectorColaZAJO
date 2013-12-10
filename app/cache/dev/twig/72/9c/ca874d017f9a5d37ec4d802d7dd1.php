<?php

/* RutaMicroBundle:Sucursal:edit.html.twig */
class __TwigTemplate_729cca874d017f9a5d37ec4d802d7dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Sucursal edit</h1>

    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sucursal_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
;
        echo ">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <p>
            <button type=\"submit\">Edit</button>
        </p>
    </form>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("sucursal");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sucursal_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "RutaMicroBundle:Sucursal:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 19,  102 => 43,  97 => 41,  100 => 39,  104 => 35,  522 => 272,  518 => 271,  514 => 270,  509 => 268,  505 => 267,  501 => 266,  497 => 265,  493 => 264,  484 => 258,  476 => 256,  472 => 255,  468 => 254,  464 => 253,  449 => 247,  445 => 246,  441 => 245,  433 => 243,  429 => 242,  425 => 241,  418 => 237,  414 => 236,  410 => 235,  403 => 231,  399 => 230,  395 => 229,  388 => 225,  380 => 223,  376 => 222,  372 => 221,  358 => 183,  335 => 184,  333 => 182,  324 => 176,  317 => 173,  296 => 173,  289 => 168,  279 => 161,  274 => 159,  256 => 143,  254 => 142,  251 => 141,  239 => 132,  231 => 130,  227 => 129,  223 => 128,  216 => 124,  198 => 108,  184 => 98,  175 => 92,  65 => 21,  81 => 28,  76 => 25,  63 => 18,  59 => 18,  53 => 15,  77 => 30,  480 => 257,  474 => 161,  469 => 158,  461 => 155,  457 => 249,  453 => 248,  444 => 149,  440 => 148,  437 => 244,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 224,  381 => 120,  379 => 119,  374 => 116,  368 => 220,  365 => 219,  362 => 218,  360 => 109,  355 => 182,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 201,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 131,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 41,  107 => 36,  71 => 24,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 39,  84 => 33,  70 => 23,  67 => 23,  61 => 15,  38 => 5,  94 => 32,  89 => 36,  85 => 38,  75 => 25,  68 => 21,  56 => 11,  87 => 34,  21 => 2,  26 => 6,  93 => 34,  88 => 35,  78 => 24,  46 => 14,  27 => 4,  44 => 8,  31 => 4,  28 => 3,  201 => 92,  196 => 107,  183 => 70,  171 => 61,  166 => 86,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 50,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 21,  49 => 9,  24 => 1,  25 => 3,  19 => 1,  79 => 29,  72 => 21,  69 => 25,  47 => 9,  40 => 6,  37 => 10,  22 => 2,  246 => 32,  157 => 83,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 44,  108 => 36,  101 => 32,  98 => 36,  96 => 33,  83 => 30,  74 => 23,  66 => 18,  55 => 18,  52 => 14,  50 => 12,  43 => 8,  41 => 5,  35 => 6,  32 => 2,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 85,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 46,  125 => 44,  122 => 43,  116 => 36,  112 => 42,  109 => 41,  106 => 42,  103 => 38,  99 => 34,  95 => 39,  92 => 32,  86 => 31,  82 => 25,  80 => 27,  73 => 26,  64 => 20,  60 => 17,  57 => 16,  54 => 16,  51 => 17,  48 => 6,  45 => 10,  42 => 7,  39 => 10,  36 => 8,  33 => 4,  30 => 7,);
    }
}
