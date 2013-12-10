<?php

/* RutaMicroBundle:ConsultarRuta:index.html.twig */
class __TwigTemplate_1e1b0af3d1f54e4ef905d57c765a4906 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'section_main' => array($this, 'block_section_main'),
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
        echo "Consultar rutas";
    }

    // line 3
    public function block_section_main($context, array $blocks = array())
    {
        // line 56
        echo "
<div class=\"widget chart\">
\t<header>
\t\t<h3>Consultar ruta <span>- filtrar</span></h3>
\t\t<ul class=\"toggle_content\">                          
\t\t\t<li class=\"arrow\"><a href=\"#\">Toggle Content</a></li>
\t\t</ul>
\t</header>
\t<section style=\"heigth:auto\">
\t\t<div class=\"row-fluid\" style=\"min-height:auto\">
\t\t\t<div class=\"span12\">
\t\t\t\t<div  style=\"padding-right:40px\">


\t\t\t\t</div>\t\t
\t\t\t</div>

\t\t\t<br>
\t\t\t<div class=\"row-fluid\">
\t\t\t\t

\t\t\t</div>
\t\t</div>
\t</section>
</div>


<div class=\"row-fluid\">

\t<div class=\"span9\">
\t\t";
        // line 86
        echo $this->env->getExtension('ivory_google_map')->renderHtmlContainer((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")));
        echo "
\t\t";
        // line 87
        echo $this->env->getExtension('ivory_google_map')->renderJavascripts((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")));
        echo "
\t</div>\t

\t<div class=\"span3\">
\t\t<div class=\"widget chart\">
\t\t\t<header>
\t\t\t\t<h3>Datos de busqueda <span></span></h3>
\t\t\t\t<ul class=\"toggle_content\">                          
\t\t\t\t\t<li class=\"arrow\"><a href=\"#\">Toggle Content</a></li>
\t\t\t\t</ul>
\t\t\t</header>
\t\t\t<section>
\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>

\t\t\t\t\t<br>

\t\t\t\t</div>

\t\t\t</section>


\t\t</div>
\t</div>
</div>




";
    }

    public function getTemplateName()
    {
        return "RutaMicroBundle:ConsultarRuta:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 87,  70 => 86,  38 => 56,  35 => 3,  29 => 2,);
    }
}
