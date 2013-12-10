<?php

/* ::base.html.twig */
class __TwigTemplate_09ba5d20df3bbb2b9d9c3e4190d1e794 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 8
        $this->displayBlock('css', $context, $blocks);
        // line 9
        echo "    ";
        $this->displayBlock('js', $context, $blocks);
        // line 10
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"author\" href=\"humans.txt\">
</head>
<body>
   ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "   ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "   
</body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenido!";
    }

    // line 8
    public function block_css($context, array $blocks = array())
    {
    }

    // line 9
    public function block_js($context, array $blocks = array())
    {
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 15,  72 => 9,  67 => 8,  54 => 16,  51 => 15,  49 => 14,  41 => 10,  38 => 9,  36 => 8,  24 => 1,  522 => 272,  518 => 271,  514 => 270,  509 => 268,  505 => 267,  501 => 266,  497 => 265,  493 => 264,  484 => 258,  480 => 257,  476 => 256,  472 => 255,  468 => 254,  464 => 253,  457 => 249,  453 => 248,  449 => 247,  445 => 246,  441 => 245,  437 => 244,  433 => 243,  429 => 242,  425 => 241,  418 => 237,  414 => 236,  410 => 235,  403 => 231,  399 => 230,  395 => 229,  388 => 225,  384 => 224,  380 => 223,  376 => 222,  372 => 221,  368 => 220,  365 => 219,  362 => 218,  358 => 183,  355 => 182,  335 => 184,  333 => 182,  324 => 176,  317 => 173,  298 => 201,  296 => 173,  289 => 168,  279 => 161,  274 => 159,  256 => 143,  254 => 142,  251 => 141,  239 => 132,  235 => 131,  231 => 130,  227 => 129,  223 => 128,  216 => 124,  198 => 108,  196 => 107,  184 => 98,  175 => 92,  166 => 86,  162 => 85,  157 => 83,  106 => 34,  103 => 33,  91 => 24,  87 => 23,  81 => 20,  77 => 14,  73 => 18,  69 => 17,  65 => 16,  61 => 7,  57 => 14,  52 => 12,  44 => 7,  40 => 6,  35 => 3,  32 => 7,  31 => 3,  28 => 2,);
    }
}
