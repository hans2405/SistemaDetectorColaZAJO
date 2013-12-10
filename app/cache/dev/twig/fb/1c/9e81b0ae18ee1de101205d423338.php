<?php

/* RutaMicroBundle:Entidad:edit.html.twig */
class __TwigTemplate_fb1c9e81b0ae18ee1de101205d423338 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Modificar Entidad";
    }

    // line 5
    public function block_section($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"row\">
    <div class=\"span4\"></div>
    <div class=\"span4\">

        <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entidad_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
;
        echo ">
            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
            <p>
                <button class=\"btn btn-primary\" type=\"submit\"> Modificar </button>
            </p>
        </form>

        <ul class=\"record_actions\">
            <li>
                <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("entidad");
        echo "\">
                    Volver a la Lista de Entidades
                </a>
            </li>
        </ul>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "RutaMicroBundle:Entidad:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 21,  53 => 13,  45 => 11,  38 => 6,  35 => 5,  29 => 3,);
    }
}
