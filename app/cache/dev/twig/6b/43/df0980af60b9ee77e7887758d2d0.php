<?php

/* RutaMicroBundle:Usuario:login3.html.twig */
class __TwigTemplate_6b43df0980af60b9ee77e7887758d2d0 extends Twig_Template
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
        echo "Iniciar session";
    }

    // line 3
    public function block_section($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>";
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>
<div class=\"center\" style=\"width:250px\">

\t<h3>";
        // line 7
        echo "Accede a tu cuenta";
        echo "</h3>

\t";
        // line 9
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 10
            echo "\t<div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
\t";
        }
        // line 12
        echo "
\t<form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("usuario_login_check");
        echo "\" method=\"post\">
\t\t<label>usuario</label>
\t\t<p><input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"ingrese nombre usuario\" /></p>
\t\t<label>contraseña</label>
\t\t<p><input type=\"password\" id=\"password\" name=\"_password\"  placeholder=\"ingrese contraseña\" /></p>
\t\t<input  type=\"checkbox\" id=\"no_cerrar\" name=\"_remember_me\" checked />
\t\t<label  for=\"no_cerrar\">no cerrar session</label>
\t\t<button  type=\"submit\" name=\"login\" >acceder</button>
\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "RutaMicroBundle:Usuario:login3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  102 => 34,  97 => 41,  100 => 47,  104 => 35,  522 => 272,  518 => 271,  514 => 270,  509 => 268,  505 => 267,  501 => 266,  497 => 265,  493 => 264,  484 => 258,  476 => 256,  472 => 255,  468 => 254,  464 => 253,  449 => 247,  445 => 246,  441 => 245,  433 => 243,  429 => 242,  425 => 241,  418 => 237,  414 => 236,  410 => 235,  403 => 231,  399 => 230,  395 => 229,  388 => 225,  380 => 223,  376 => 222,  372 => 221,  358 => 183,  335 => 184,  333 => 182,  324 => 176,  317 => 173,  296 => 173,  289 => 168,  279 => 161,  274 => 159,  256 => 143,  254 => 142,  251 => 141,  239 => 132,  231 => 130,  227 => 129,  223 => 128,  216 => 124,  198 => 108,  184 => 98,  175 => 92,  65 => 21,  81 => 27,  76 => 25,  63 => 18,  59 => 18,  53 => 18,  77 => 25,  480 => 257,  474 => 161,  469 => 158,  461 => 155,  457 => 249,  453 => 248,  444 => 149,  440 => 148,  437 => 244,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 224,  381 => 120,  379 => 119,  374 => 116,  368 => 220,  365 => 219,  362 => 218,  360 => 109,  355 => 182,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 201,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 131,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 49,  132 => 51,  128 => 43,  119 => 72,  107 => 68,  71 => 24,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 40,  84 => 37,  70 => 25,  67 => 26,  61 => 13,  38 => 4,  94 => 32,  89 => 27,  85 => 38,  75 => 27,  68 => 20,  56 => 22,  87 => 30,  21 => 2,  26 => 6,  93 => 34,  88 => 52,  78 => 27,  46 => 14,  27 => 4,  44 => 8,  31 => 4,  28 => 3,  201 => 92,  196 => 107,  183 => 70,  171 => 61,  166 => 86,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 50,  121 => 46,  117 => 44,  105 => 34,  91 => 31,  62 => 24,  49 => 10,  24 => 1,  25 => 3,  19 => 1,  79 => 28,  72 => 21,  69 => 26,  47 => 9,  40 => 6,  37 => 10,  22 => 2,  246 => 32,  157 => 83,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 40,  115 => 70,  111 => 35,  108 => 36,  101 => 32,  98 => 36,  96 => 31,  83 => 29,  74 => 30,  66 => 15,  55 => 18,  52 => 10,  50 => 9,  43 => 8,  41 => 5,  35 => 3,  32 => 2,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 85,  154 => 54,  149 => 51,  147 => 54,  144 => 53,  141 => 51,  133 => 55,  130 => 46,  125 => 75,  122 => 40,  116 => 36,  112 => 53,  109 => 69,  106 => 42,  103 => 38,  99 => 33,  95 => 32,  92 => 42,  86 => 31,  82 => 28,  80 => 27,  73 => 26,  64 => 20,  60 => 22,  57 => 12,  54 => 20,  51 => 17,  48 => 6,  45 => 7,  42 => 7,  39 => 10,  36 => 8,  33 => 4,  30 => 7,);
    }
}
