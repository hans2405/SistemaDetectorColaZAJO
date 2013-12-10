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
        return array (  82 => 15,  72 => 9,  67 => 8,  54 => 16,  51 => 15,  49 => 14,  41 => 10,  38 => 9,  36 => 8,  24 => 1,  541 => 285,  537 => 284,  533 => 283,  528 => 281,  524 => 280,  520 => 279,  516 => 278,  512 => 277,  503 => 271,  499 => 270,  495 => 269,  491 => 268,  487 => 267,  483 => 266,  476 => 262,  472 => 261,  468 => 260,  464 => 259,  460 => 258,  456 => 257,  452 => 256,  448 => 255,  444 => 254,  437 => 250,  433 => 249,  429 => 248,  422 => 244,  418 => 243,  414 => 242,  407 => 238,  403 => 237,  399 => 236,  395 => 235,  391 => 234,  387 => 233,  384 => 232,  381 => 231,  377 => 196,  374 => 195,  354 => 197,  352 => 195,  343 => 189,  336 => 186,  317 => 214,  315 => 186,  308 => 181,  298 => 174,  293 => 172,  275 => 156,  273 => 155,  270 => 154,  259 => 146,  255 => 145,  245 => 138,  235 => 131,  231 => 130,  227 => 129,  223 => 128,  216 => 124,  198 => 108,  196 => 107,  184 => 98,  175 => 92,  166 => 86,  162 => 85,  157 => 83,  106 => 34,  103 => 33,  91 => 24,  87 => 23,  81 => 20,  77 => 14,  73 => 18,  69 => 17,  65 => 16,  61 => 7,  57 => 14,  52 => 12,  44 => 7,  40 => 6,  35 => 3,  32 => 7,  31 => 3,  28 => 2,);
    }
}
