<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_50100659ca6f360d588183fd70b8b2ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  55 => 13,  25 => 4,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  201 => 92,  199 => 91,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  86 => 28,  66 => 15,  62 => 23,  39 => 6,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  80 => 19,  78 => 40,  46 => 7,  27 => 4,  22 => 2,  43 => 8,  33 => 5,  30 => 3,  82 => 15,  72 => 16,  67 => 8,  54 => 21,  51 => 12,  49 => 19,  41 => 9,  38 => 9,  36 => 7,  24 => 3,  541 => 285,  537 => 284,  533 => 283,  528 => 281,  524 => 280,  520 => 279,  516 => 278,  512 => 277,  503 => 271,  499 => 270,  495 => 269,  491 => 268,  487 => 267,  483 => 266,  476 => 262,  472 => 261,  468 => 260,  464 => 259,  460 => 258,  456 => 257,  452 => 256,  448 => 255,  444 => 254,  437 => 250,  433 => 249,  429 => 248,  422 => 244,  418 => 243,  414 => 242,  407 => 238,  403 => 237,  399 => 236,  395 => 235,  391 => 234,  387 => 233,  384 => 232,  381 => 231,  377 => 196,  374 => 195,  354 => 197,  352 => 195,  343 => 189,  336 => 186,  317 => 214,  315 => 186,  308 => 181,  298 => 174,  293 => 172,  275 => 156,  273 => 155,  270 => 154,  259 => 146,  255 => 145,  245 => 138,  235 => 131,  231 => 130,  227 => 129,  223 => 128,  216 => 124,  198 => 108,  196 => 90,  184 => 98,  175 => 92,  166 => 71,  162 => 85,  157 => 83,  106 => 34,  103 => 33,  91 => 31,  87 => 20,  81 => 20,  77 => 14,  73 => 18,  69 => 25,  65 => 16,  61 => 7,  57 => 14,  52 => 12,  44 => 10,  40 => 8,  35 => 4,  32 => 12,  31 => 5,  28 => 2,);
    }
}
