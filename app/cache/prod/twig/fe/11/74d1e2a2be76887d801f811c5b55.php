<?php

/* RutaMicroBundle:LineaMicro:show.html.twig */
class __TwigTemplate_fe1174d1e2a2be76887d801f811c5b55 extends Twig_Template
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
        echo "Detalle de la linea";
    }

    // line 3
    public function block_section_main($context, array $blocks = array())
    {
        // line 4
        echo "<ul class=\"breadcrumb br_styled no_space\">                              
                <li class=\"active\">";
        // line 5
        $this->displayBlock("title", $context, $blocks);
        echo "</li>
              </ul> 


<div class=\"row-fluid page_info\">
    <div class=\"span6\">
    <table class=\"table_basic\">
        <tbody>
           
            <tr>
                <th>Nombre</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
        echo "</td>
            </tr>     
            <tr>
                <th>Descripcion</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion"), "html", null, true);
        echo "</td>
            </tr>
           
        </tbody>
    </table>

 <br>
        <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("lineamicro");
        echo "\">
            Ir a la lista
        </a>
<br>
        <form action=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lineamicro_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
            <br>
            
            <button style=\"width:100px\" class=\"btn btn-danger\" type=\"submit\">Eliminar</button>
            <a class=\"btn btn-danger\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lineamicro_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Editar
            </a>
        </form>
    
</ul>
</div>

<div class=\"span6\">
    <h4>foto:</h4>
     <img src=\"http://images.evisos.com.bo/2012/10/19/micro-en-venta-de-ocacion-modelo-90-techo_755ef5b3c_3.jpg\" width=\"400\" heigth=\"220\" alt=\"\">           
            
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "RutaMicroBundle:LineaMicro:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 37,  84 => 33,  79 => 31,  72 => 27,  62 => 20,  55 => 16,  41 => 5,  38 => 4,  35 => 3,  29 => 2,);
    }
}
