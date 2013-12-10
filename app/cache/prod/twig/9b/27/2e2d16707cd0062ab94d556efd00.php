<?php

/* RutaMicroBundle:Usuario:new.html.twig */
class __TwigTemplate_9b272e2d16707cd0062ab94d556efd00 extends Twig_Template
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
        echo "Nuevo usuario";
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
        echo $this->env->getExtension('routing')->getPath("usuario_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
;
        echo ">
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <p>
            <button type=\"submit\">Registrar</button>
        </p>
    </form>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("usuario");
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
        return "RutaMicroBundle:Usuario:new.html.twig";
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
