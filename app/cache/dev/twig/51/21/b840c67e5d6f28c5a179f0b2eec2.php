<?php

/* RutaMicroBundle:Ticket:show.html.twig */
class __TwigTemplate_5121b840c67e5d6f28c5a179f0b2eec2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Ticket</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nro</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nro"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechahoraemision</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaHoraEmision"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechahoraatencion</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaHoraAtencion"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechahorafinalizacion</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaHoraFinalizacion"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Estado</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estado"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("ticket");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ticket_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ticket_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "RutaMicroBundle:Ticket:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 21,  102 => 34,  97 => 41,  100 => 47,  104 => 35,  522 => 272,  518 => 271,  514 => 270,  509 => 268,  505 => 267,  501 => 266,  497 => 265,  493 => 264,  484 => 258,  476 => 256,  472 => 255,  468 => 254,  464 => 253,  449 => 247,  445 => 246,  441 => 245,  433 => 243,  429 => 242,  425 => 241,  418 => 237,  414 => 236,  410 => 235,  403 => 231,  399 => 230,  395 => 229,  388 => 225,  380 => 223,  376 => 222,  372 => 221,  358 => 183,  335 => 184,  333 => 182,  324 => 176,  317 => 173,  296 => 173,  289 => 168,  279 => 161,  274 => 159,  256 => 143,  254 => 142,  251 => 141,  239 => 132,  231 => 130,  227 => 129,  223 => 128,  216 => 124,  198 => 108,  184 => 98,  175 => 92,  65 => 21,  81 => 34,  76 => 25,  63 => 18,  59 => 18,  53 => 18,  77 => 25,  480 => 257,  474 => 161,  469 => 158,  461 => 155,  457 => 249,  453 => 248,  444 => 149,  440 => 148,  437 => 244,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 224,  381 => 120,  379 => 119,  374 => 116,  368 => 220,  365 => 219,  362 => 218,  360 => 109,  355 => 182,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 201,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 131,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 41,  107 => 51,  71 => 24,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 40,  84 => 37,  70 => 25,  67 => 26,  61 => 22,  38 => 6,  94 => 32,  89 => 27,  85 => 38,  75 => 25,  68 => 21,  56 => 22,  87 => 34,  21 => 2,  26 => 6,  93 => 34,  88 => 35,  78 => 27,  46 => 14,  27 => 4,  44 => 8,  31 => 4,  28 => 3,  201 => 92,  196 => 107,  183 => 70,  171 => 61,  166 => 86,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 50,  121 => 46,  117 => 44,  105 => 49,  91 => 41,  62 => 21,  49 => 20,  24 => 1,  25 => 3,  19 => 1,  79 => 29,  72 => 21,  69 => 25,  47 => 9,  40 => 6,  37 => 10,  22 => 2,  246 => 32,  157 => 83,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 44,  108 => 36,  101 => 32,  98 => 36,  96 => 31,  83 => 26,  74 => 30,  66 => 24,  55 => 18,  52 => 14,  50 => 12,  43 => 8,  41 => 5,  35 => 6,  32 => 2,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 85,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 46,  125 => 44,  122 => 46,  116 => 36,  112 => 53,  109 => 41,  106 => 42,  103 => 38,  99 => 46,  95 => 35,  92 => 42,  86 => 31,  82 => 28,  80 => 27,  73 => 26,  64 => 20,  60 => 22,  57 => 16,  54 => 20,  51 => 17,  48 => 6,  45 => 10,  42 => 7,  39 => 10,  36 => 8,  33 => 4,  30 => 7,);
    }
}
