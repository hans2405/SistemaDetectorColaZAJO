<?php

/* RutaMicroBundle:Ruta:index.html.twig */
class __TwigTemplate_79e3169f8425325429e9f788f2fd4ef2 extends Twig_Template
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
        echo "Rutas";
    }

    // line 3
    public function block_section($context, array $blocks = array())
    {
        // line 4
        echo "<h2>Linea: </h2>

<form name=\"form1\" action=\"\" method=\"post\">
    <select name=\"linea\" data-placeholder=\"Elija una linea...\" class=\"chzn-select\" style=\"width:220px;\" tabindex=\"2\">
        <option value=\"#\"></option>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lineaMicros"]) ? $context["lineaMicros"] : $this->getContext($context, "lineaMicros")));
        foreach ($context['_seq'] as $context["_key"] => $context["linea"]) {
            // line 10
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "nombre"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "nombre"), "html", null, true);
            echo "</option> 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </select>
    <input type=\"submit\" name=\"boton\" value=\"mostrar ruta\" class=\"btn\" />
</form>

<table id=\"example\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Posicion</th>
            <th>Calle</th>
            <th>Linea</th>
            <th>Latitud</th>
            <th>Longitud</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 30
            echo "        <tr>
            <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ruta_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "posicion"), "html", null, true);
            echo "</td>
            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calle"), "html", null, true);
            echo "</td>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lineaMicro"), "html", null, true);
            echo "</td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "latitud"), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "longitud"), "html", null, true);
            echo "</td>
            <td>

                <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ruta_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">ver</a>
                ,
                <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ruta_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">editar</a>

            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </tbody>
</table>

<br>
<a class=\"btn btn-primary\" href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("ruta_new");
        echo "\">
    Nueva ruta
</a>

";
    }

    public function getTemplateName()
    {
        return "RutaMicroBundle:Ruta:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 50,  130 => 46,  119 => 41,  114 => 39,  108 => 36,  104 => 35,  100 => 34,  96 => 33,  92 => 32,  86 => 31,  83 => 30,  79 => 29,  60 => 12,  49 => 10,  45 => 9,  38 => 4,  35 => 3,  29 => 2,);
    }
}
