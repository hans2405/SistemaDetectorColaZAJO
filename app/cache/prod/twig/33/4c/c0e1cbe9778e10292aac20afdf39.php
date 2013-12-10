<?php

/* ::base.html.twig */
class __TwigTemplate_334cc0e1cbe9778e10292aac20afdf39 extends Twig_Template
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
        return array (  82 => 15,  77 => 14,  72 => 9,  61 => 7,  54 => 16,  49 => 14,  41 => 10,  38 => 9,  36 => 8,  32 => 7,  24 => 1,  414 => 235,  410 => 234,  406 => 233,  401 => 231,  397 => 230,  393 => 229,  389 => 228,  385 => 227,  376 => 221,  372 => 220,  368 => 219,  364 => 218,  360 => 217,  356 => 216,  349 => 212,  345 => 211,  341 => 210,  334 => 206,  330 => 205,  326 => 204,  322 => 203,  318 => 202,  314 => 201,  311 => 200,  308 => 199,  304 => 165,  301 => 164,  266 => 166,  264 => 164,  255 => 158,  237 => 143,  233 => 142,  223 => 135,  213 => 128,  209 => 127,  205 => 126,  201 => 125,  194 => 121,  166 => 96,  100 => 32,  97 => 31,  85 => 22,  81 => 21,  75 => 18,  71 => 17,  67 => 8,  63 => 15,  59 => 14,  55 => 13,  51 => 15,  43 => 7,  39 => 6,  34 => 3,  31 => 2,  28 => 2,);
    }
}
