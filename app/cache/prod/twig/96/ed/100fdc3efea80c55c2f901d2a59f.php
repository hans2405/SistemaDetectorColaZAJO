<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_96ed100fdc3efea80c55c2f901d2a59f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  33 => 4,  30 => 3,  82 => 15,  72 => 9,  67 => 8,  54 => 11,  51 => 15,  49 => 14,  41 => 10,  38 => 9,  36 => 8,  24 => 1,  541 => 285,  537 => 284,  533 => 283,  528 => 281,  524 => 280,  520 => 279,  516 => 278,  512 => 277,  503 => 271,  499 => 270,  495 => 269,  491 => 268,  487 => 267,  483 => 266,  476 => 262,  472 => 261,  468 => 260,  464 => 259,  460 => 258,  456 => 257,  452 => 256,  448 => 255,  444 => 254,  437 => 250,  433 => 249,  429 => 248,  422 => 244,  418 => 243,  414 => 242,  407 => 238,  403 => 237,  399 => 236,  395 => 235,  391 => 234,  387 => 233,  384 => 232,  381 => 231,  377 => 196,  374 => 195,  354 => 197,  352 => 195,  343 => 189,  336 => 186,  317 => 214,  315 => 186,  308 => 181,  298 => 174,  293 => 172,  275 => 156,  273 => 155,  270 => 154,  259 => 146,  255 => 145,  245 => 138,  235 => 131,  231 => 130,  227 => 129,  223 => 128,  216 => 124,  198 => 108,  196 => 107,  184 => 98,  175 => 92,  166 => 86,  162 => 85,  157 => 83,  106 => 34,  103 => 33,  91 => 24,  87 => 23,  81 => 20,  77 => 14,  73 => 18,  69 => 17,  65 => 16,  61 => 7,  57 => 12,  52 => 12,  44 => 7,  40 => 7,  35 => 3,  32 => 7,  31 => 3,  28 => 2,);
    }
}
