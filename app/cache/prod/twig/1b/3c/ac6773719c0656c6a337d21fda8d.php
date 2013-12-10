<?php

/* RutaMicroBundle:Ruta:new.html.twig */
class __TwigTemplate_1b3cac6773719c0656c6a337d21fda8d extends Twig_Template
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
        echo "Registro nuevo";
    }

    // line 3
    public function block_section($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"row\">
    <div class=\"span3\"></div>
    <div class=\"span4\">
    <h2>";
        // line 8
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>

    <form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("ruta_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
;
        echo ">
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <p>
            <button class=\"btn btn-primary\"  type=\"submit\">Create</button>
        </p>
    </form>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("ruta");
        echo "\">
            Ir a la lista
        </a>
    </li>
</ul>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "RutaMicroBundle:Ruta:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 19,  56 => 11,  49 => 10,  44 => 8,  38 => 4,  35 => 3,  29 => 2,);
    }
}
