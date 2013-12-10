<?php

/* RutaMicroBundle:ConsultarRuta:index.html.twig */
class __TwigTemplate_24128f6d3352f593bde105ce13f8a303 extends Twig_Template
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

\t\t\t\t\t<form class=\"well form-inline\" method=\"post\" style=\"width:400px; float:left\">
\t\t\t\t\t\t<!-- <input type=\"text\"  name=\"lugar\" class=\"input-small\" placeholder=\"Lugar\"> -->
\t\t\t\t\t\t<select name=\"calle\" data-placeholder=\"Elija un destino...\" class=\"chzn-select\" style=\"width:220px;\" tabindex=\"2\">
\t\t\t\t\t\t\t<option value=\"#\"></option>
\t\t\t\t\t\t\t";
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calles"]) ? $context["calles"] : $this->getContext($context, "calles")));
        foreach ($context['_seq'] as $context["_key"] => $context["calle"]) {
            // line 74
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["calle"]) ? $context["calle"] : $this->getContext($context, "calle")), "nombre"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["calle"]) ? $context["calle"] : $this->getContext($context, "calle")), "nombre"), "html", null, true);
            echo "</option> 
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"submit\" name=\"boton\" value=\"mostrar linea micro\" class=\"btn\" />
\t\t\t\t\t</form>

\t\t\t\t\t<form name=\"form1\" action=\"\" class=\"well form-inline\" method=\"post\" style=\"width:400px; float:left; margin-left:12px\">>
\t\t\t\t\t\t<select name=\"linea\" data-placeholder=\"Elija una linea...\" class=\"chzn-select\" style=\"width:220px;\" tabindex=\"2\">
\t\t\t\t\t\t\t<option value=\"#\"></option>
\t\t\t\t\t\t\t";
        // line 83
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lineaMicros"]) ? $context["lineaMicros"] : $this->getContext($context, "lineaMicros")));
        foreach ($context['_seq'] as $context["_key"] => $context["linea"]) {
            // line 84
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "nombre"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "nombre"), "html", null, true);
            echo "</option> 
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"submit\" name=\"boton\" value=\"mostrar ruta\" class=\"btn\" />
\t\t\t\t\t</form>
\t\t\t\t</div>\t\t
\t\t\t</div>
\t\t\t";
        // line 91
        if (((isset($context["microsCalles"]) ? $context["microsCalles"] : $this->getContext($context, "microsCalles")) != null)) {
            // line 92
            echo "\t\t\t<h4> Pasan la linea : </h4>
\t\t\t";
        }
        // line 94
        echo "\t\t\t<br>
\t\t\t<div class=\"row-fluid\">
\t\t\t\t
\t\t\t\t";
        // line 97
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["microsCalles"]) ? $context["microsCalles"] : $this->getContext($context, "microsCalles")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["micro"]) {
            // line 98
            echo "\t\t\t\t<div class=\"span1\">
\t\t\t\t\t<a style=\"color:black\"  href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consultar_ruta", array("linea" => $this->getAttribute((isset($context["micro"]) ? $context["micro"] : $this->getContext($context, "micro")), "nombre"), "calle" => (isset($context["calle"]) ? $context["calle"] : $this->getContext($context, "calle")))), "html", null, true);
            echo "\" class=\"thumbnail\">
\t\t\t\t\t\t";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["micro"]) ? $context["micro"] : $this->getContext($context, "micro")), "nombre"), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 104
            echo "
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['micro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "\t\t\t</div>
\t\t</div>
\t</section>
</div>


<div class=\"row-fluid\">

\t<div class=\"span9\">
\t\t";
        // line 115
        echo $this->env->getExtension('ivory_google_map')->renderHtmlContainer((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")));
        echo "
\t\t";
        // line 116
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
\t\t\t\t\t\t\t<td>Linea:</td>
\t\t\t\t\t\t\t<td>";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Destino :</td>
\t\t\t\t\t\t\t<td>";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["calle"]) ? $context["calle"] : $this->getContext($context, "calle")), "html", null, true);
        echo "</td>
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
        return array (  184 => 137,  176 => 132,  157 => 116,  153 => 115,  142 => 106,  135 => 104,  126 => 100,  122 => 99,  119 => 98,  114 => 97,  109 => 94,  105 => 92,  103 => 91,  96 => 86,  85 => 84,  81 => 83,  72 => 76,  61 => 74,  57 => 73,  38 => 56,  35 => 3,  29 => 2,);
    }
}
