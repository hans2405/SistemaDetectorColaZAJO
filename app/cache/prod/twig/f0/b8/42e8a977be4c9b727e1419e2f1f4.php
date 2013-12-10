<?php

/* RutaMicroBundle:Ruta:edit.html.twig */
class __TwigTemplate_f0b842e8a977be4c9b727e1419e2f1f4 extends Twig_Template
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
        echo "Editar rutas";
    }

    // line 3
    public function block_section($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"row\">
  <div class=\"span4\"></div>
  <div class=\"span4\">
    <h2>";
        // line 8
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>

    <form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ruta_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
;
        echo ">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <p>
            <button type=\"submit\">Editar</button>
        </p>
    </form>

    
        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("ruta");
        echo "\">
            ir a la lista
        </a>

        <form action=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ruta_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
            <button type=\"submit\">Eliminar</button>
        </form>

</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "RutaMicroBundle:Ruta:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 25,  74 => 23,  67 => 19,  57 => 12,  49 => 10,  44 => 8,  38 => 4,  35 => 3,  29 => 2,);
    }
}
