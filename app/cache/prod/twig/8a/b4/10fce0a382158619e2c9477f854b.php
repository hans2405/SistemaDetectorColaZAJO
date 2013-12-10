<?php

/* RutaMicroBundle:LineaMicro:index.html.twig */
class __TwigTemplate_8ab410fce0a382158619e2c9477f854b extends Twig_Template
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
        echo "Lineas de micros";
    }

    // line 3
    public function block_section($context, array $blocks = array())
    {
        // line 4
        echo "<h2>";
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>
<section class=\"group\">  
    <table id=\"example\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>

                <th>Foto</th>
                <th>Acccion</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lineamicro_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
            echo "</a></td>
                
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion"), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "foto"), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lineamicro_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">ver</a>
                    ,
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lineamicro_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">editar</a>
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>

</section>
<a  class=\"btn btn-primary\" href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("lineamicro_new");
        echo "\">
    Nueva linea
</a>
";
    }

    public function getTemplateName()
    {
        return "RutaMicroBundle:LineaMicro:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 34,  93 => 30,  83 => 26,  78 => 24,  73 => 22,  69 => 21,  62 => 19,  59 => 18,  55 => 17,  38 => 4,  35 => 3,  29 => 2,);
    }
}
