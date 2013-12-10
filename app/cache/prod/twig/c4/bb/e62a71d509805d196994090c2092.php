<?php

/* ::layout.html.twig */
class __TwigTemplate_c4bbe62a71d509805d196994090c2092 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
            'section_main' => array($this, 'block_section_main'),
            'section' => array($this, 'block_section'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 2
    public function block_css($context, array $blocks = array())
    {
        // line 3
        echo "
<!-- ===================== CSS ===================== -->    
<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>     -->
<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

<!-- Site specific - CSS --> 


<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/css/validationEngine.jquery.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/css/prettify.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/css/dataTables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/css/fullcalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/css/fullcalendar.print.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/css/chosen.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/css/dropkick.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/css/jquery-ui-1.8.20.custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

<!-- Common - CSS -->     
<link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/css/common.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/css/theme_light.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <!--[if lt IE 9]>
      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
      <![endif]-->


      ";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "      <!-- gif loading -->
      <!-- <div id=\"loader_cont\"><img src=\"img/loaders/page_loader.gif\"></div>  -->
      <!-- end gif loading -->

      <div class=\"navbar navbar-fixed-top\">
        <div class=\"navbar-inner\">
          <div class=\"container\">
            <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
              <span class=\"sweet-gray sweet-go-back-from-screen\">&nbsp;</span>
            </a>
            <div class=\"nav-collapse\">            
<!--             <ul class=\"nav main_nav\" role=\"navigation\">                
                <li id=\"mail\" class=\"styled dropdown mail\">
                  <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Mail<span></span></a>
                  <ul class=\"dropdown-menu top_menu\">
                      <li><a class=\"mn_new_msg\" href=\"mail.html\"><span>New Message</span></a></li>
                      <li><a class=\"mn_inbox\" href=\"mail.html\"><span>Inbox</span></a></li>
                      <li><a class=\"mn_outbox\" href=\"mail.html\"><span>OutBox</span></a></li>
                      <li><a class=\"mn_spam\" href=\"mail.html\"><span>Spam</span></a></li>
                      <li><a class=\"mn_trash\" href=\"mail.html\"><span>Trash</span></a></li>
                  </ul>
                </li>
                       
              </ul>  -->

              <ul class=\"main_nav nav pull-right\">                
                <li id=\"search\" class=\"search\"> 
                  <a href=\"#\">Buscar</a> 
                  <div class=\"search_cont\">
                    <form class=\"navbar-search form-search\">                          
                      <input type=\"text\" class=\"input-medium search-query\" placeholder=\"Search\">
                      <button type=\"submit\">Buscar</button>
                    </form> 
                  </div>              
                </li> 
                <li id=\"settings\" class=\"styled dropdown settings\">
                  <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Configuracion</a>
                  <ul class=\"dropdown-menu top_menu\">
                    <li class=\"show_all\">Configuracion</li>
                    <li><a class=\"mn_site\" href=\"#\"><span>Sitio</span></a></li>
                     <!--    <li><a class=\"mn_admin\" href=\"#\"><span>Admin</span></a></li>
                        <li><a class=\"mn_mail\" href=\"#\"><span>Mail</span></a></li>
                        <li><a class=\"mn_user\" href=\"#\"><span>User</span></a></li> -->
                      </ul>
                    </li>
                    <li id=\"profile\" class=\"styled dropdown profile\">
                      <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Perfil</a>
                      <ul class=\"dropdown-menu top_menu\">                        
                        <li class=\"profile group\">
                          <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/img/general/user_1.jpg"), "html", null, true);
        echo "\" width=\"50\" height=\"50\" alt=\"User\">
                          <ul>
                            <li><strong>";
        // line 85
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "nombre") . " ") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "apellidos")), "html", null, true);
        echo "</strong></li>
                            <li>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "email"), "html", null, true);
        echo "</li>
                            <li><span></span></li>
                          </ul>
                        </li>
                        <li><a class=\"mn_settings\" href=\"#\"><span>Mi configuracion</span></a></li>
                        <li><a class=\"mn_profile\" href=\"#\"><span>Mi perfil</span></a></li>
                        <li><a class=\"mn_logout\" href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("usuario_logout");
        echo "\"><span>Cerrar session</span></a></li>
                      </ul>
                    </li>                          
                  </ul>           
                </div>

                <h1 class=\"brand\"><a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("ruta_micro_homepage");
        echo "\">Ruta de micros Santa Cruz</a></h1>                                       
              </div>
            </div>
          </div>

          <div class=\"container\">      

            <div class=\"main_content row-fluid\">

              ";
        // line 107
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 108
            echo "              <div class=\"span3\">
                <div class=\"side_nav sidebar-nav\" data-spy=\"affix\" data-offset-top=\"150\">
                  <!-- Cuadro de busqueda -->
<!--             <div class=\"sidebar_widget first_widget group\">
              <form class=\"sidebar_search form-search\">
                <input type=\"text\" class=\"input-medium search-query\" placeholder=\"Quick search\">
                <button type=\"submit\" class=\"btn btn-inverse\"><i class=\"icon-search icon-gray\"></i></button>
              </form>
            </div> -->
            <h3 class=\"main_menu group\">
              <span class=\"title\">Main Menu</span>
              <a id=\"nav_list_btn\" class=\"btn-collapse btn btn-inverse\">
                <span class=\"sweet-gray sweet-go-back-from-screen\">&nbsp;</span>              
              </a>
            </h3>
            <ul class=\"nav nav-list\">                          
              <li class=\"active\"><a class=\"home\" href=\"";
            // line 124
            echo $this->env->getExtension('routing')->getPath("ruta_micro_homepage");
            echo "\">Inicio</a></li>
              <li class=\"sub\">
                <a class=\"forms\" href=\"#\">Administrar Ruta</a>
                <ul>
                  <li><a href=\"";
            // line 128
            echo $this->env->getExtension('routing')->getPath("lugar");
            echo "\">Gestionar lugar</a></li>
                  <li><a href=\"";
            // line 129
            echo $this->env->getExtension('routing')->getPath("calle");
            echo "\">Gestionar calle</a></li>
                  <li><a href=\"";
            // line 130
            echo $this->env->getExtension('routing')->getPath("ruta");
            echo "\">Gestionar rutas</a></li>
                  <li><a href=\"";
            // line 131
            echo $this->env->getExtension('routing')->getPath("consultar_ruta");
            echo "\">Consultar rutas</a></li>
                </ul>
              </li>   

              <li class=\"sub\">
                <a class=\"forms\" href=\"#\">Administrar linea micro</a>
                <ul>
                  <li><a href=\"";
            // line 138
            echo $this->env->getExtension('routing')->getPath("lineamicro");
            echo "\">Gestionar linea de micro</a></li>
                </ul>
              </li>

              <li class=\"sub\">
                <a class=\"forms\" href=\"#\">Administracion de usuario</a>
                <ul>
                  <li><a href=\"";
            // line 145
            echo $this->env->getExtension('routing')->getPath("usuario");
            echo "\">Gestionar usuarios</a></li>
                  <li><a href=\"";
            // line 146
            echo $this->env->getExtension('routing')->getPath("roles");
            echo "\">Gestionar Roles</a></li>
                </ul>
              </li>
              <!-- <li><a class=\"charts\" href=\"charts.html\">Charts</a></li>              -->
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        ";
        }
        // line 154
        echo "
        ";
        // line 155
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") && (!$this->env->getExtension('security')->isGranted("ROLE_ADMIN")))) {
            // line 156
            echo "        <div class=\"span2\">
          <div class=\"side_nav sidebar-nav\" data-spy=\"affix\" data-offset-top=\"150\">
            <!-- Cuadro de busqueda -->
<!--             <div class=\"sidebar_widget first_widget group\">
              <form class=\"sidebar_search form-search\">
                <input type=\"text\" class=\"input-medium search-query\" placeholder=\"Quick search\">
                <button type=\"submit\" class=\"btn btn-inverse\"><i class=\"icon-search icon-gray\"></i></button>
              </form>
            </div> -->
            <h3 class=\"main_menu group\">
              <span class=\"title\">Main Menu</span>
              <a id=\"nav_list_btn\" class=\"btn-collapse btn btn-inverse\">
                <span class=\"sweet-gray sweet-go-back-from-screen\">&nbsp;</span>              
              </a>
            </h3>
            <ul class=\"nav nav-list\">                          
              <li class=\"active\"><a class=\"home\" href=\"";
            // line 172
            echo $this->env->getExtension('routing')->getPath("ruta_micro_homepage");
            echo "\">Inicio</a></li>

              <li><a href=\"";
            // line 174
            echo $this->env->getExtension('routing')->getPath("consultar_ruta");
            echo "\">Consultar rutas</a></li>
              
              <!-- <li><a class=\"charts\" href=\"charts.html\">Charts</a></li>              -->
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        ";
        }
        // line 181
        echo "

        <div class=\"span9\">
          <div class=\"row-fluid\">
            <div class=\"span12\">
             ";
        // line 186
        $this->displayBlock('section_main', $context, $blocks);
        // line 214
        echo "            </div>                  
          </div><!--/row-->

          
        </div><!--/span-->
      </div><!--/row-->      
      <hr>

      <footer>
        <p>&copy; Taller de grado 1 - 2013</p>
      </footer>

    </div><!--/.fluid-container-->


    ";
    }

    // line 186
    public function block_section_main($context, array $blocks = array())
    {
        echo " 

             <ul class=\"breadcrumb br_styled no_space\">                              
              <li class=\"active\">";
        // line 189
        $this->displayBlock("title", $context, $blocks);
        echo "</li>
            </ul> 

            <ul class=\"page_info\">
              <!-- <li><h2>Notica</h2></li> -->

              ";
        // line 195
        $this->displayBlock('section', $context, $blocks);
        // line 197
        echo "
            </ul>

<!--               <div class=\"widget chart\">
                <header>
                  <h3>Gestionar ruta <span>- rutas</span></h3>
                  <ul class=\"toggle_content\">                          
                    <li class=\"arrow\"><a href=\"#\">Toggle Content</a></li>
                  </ul>
                </header>
                <section>
                  <div>

                   </div>                
                </section>
              </div> -->
              ";
    }

    // line 195
    public function block_section($context, array $blocks = array())
    {
        // line 196
        echo "              ";
    }

    // line 231
    public function block_javascripts($context, array $blocks = array())
    {
        // line 232
        echo "    <!-- ===================== JS ===================== -->
    <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/libs/jquery-1.7.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/libs/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/libs/ios-orientationchange-fix.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/libs/jquery-ui-1.8.20.custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/plugins/widgets/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/common.js"), "html", null, true);
        echo "\"></script>

    <!-- Site specific - JS -TABLES --> 

    <script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/plugins/tables/colResizable-1.3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/plugins/tables/jquery.tablesorter.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/specific/tables_advanced.js"), "html", null, true);
        echo "\"></script>

    <!-- LOGIN -->  

    <script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/plugins/filevalidation/languages/jquery.validationEngine-en.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/specific/login.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/plugins/filevalidation/jquery.validationEngine.js"), "html", null, true);
        echo "\"></script>

    <!-- Site specific - JS FORMULARIOS --> 

    <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/plugins/formselements/jquery.maskedinput-1.3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/plugins/formselements/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/plugins/formselements/jquery.quicksearch.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/plugins/formselements/jquery.autogrowtextarea.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/plugins/formselements/jquery.textareaCounter.plugin.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/plugins/formselements/ui.spinner.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/plugins/formselements/jquery.ibutton.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/plugins/formselements/jquery.metadata.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/specific/forms_elements.js"), "html", null, true);
        echo "\"></script>

    <!-- Site specific --> 

    <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/libs/prettify.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/plugins/charts/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/plugins/charts/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/plugins/charts/jquery.flot.pie.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/plugins/charts/jquery.flot.stack.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/plugins/charts/jquery.flot.symbol.min.js"), "html", null, true);
        echo "\"></script>

    <!--[if lt IE 9]>      
          <script type=\"text/javascript\" src=\"js/plugins/charts/excanvas.min.js\"></script>
          <![endif]-->    

          <script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/plugins/tables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/plugins/calendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/plugins/formselements/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/plugins/formselements/scrollability.min.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/plugins/formselements/jquery.dropkick-1.0.0.js"), "html", null, true);
        echo "\"></script>

          <script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/script.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/specific/sparks.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/rutamicro/js/specific/index.js"), "html", null, true);
        echo "\"></script>

          <script type=\"text/javascript\">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-31818910-2']);
          _gaq.push(['_setDomainName', 'loxdesign.net']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

          </script>

          ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  541 => 285,  537 => 284,  533 => 283,  528 => 281,  524 => 280,  520 => 279,  516 => 278,  512 => 277,  503 => 271,  499 => 270,  495 => 269,  491 => 268,  487 => 267,  483 => 266,  476 => 262,  472 => 261,  468 => 260,  464 => 259,  460 => 258,  456 => 257,  452 => 256,  448 => 255,  444 => 254,  437 => 250,  433 => 249,  429 => 248,  422 => 244,  418 => 243,  414 => 242,  407 => 238,  403 => 237,  399 => 236,  395 => 235,  391 => 234,  387 => 233,  384 => 232,  381 => 231,  377 => 196,  374 => 195,  354 => 197,  352 => 195,  343 => 189,  336 => 186,  317 => 214,  315 => 186,  308 => 181,  298 => 174,  293 => 172,  275 => 156,  273 => 155,  270 => 154,  259 => 146,  255 => 145,  245 => 138,  235 => 131,  231 => 130,  227 => 129,  223 => 128,  216 => 124,  198 => 108,  196 => 107,  184 => 98,  175 => 92,  166 => 86,  162 => 85,  157 => 83,  106 => 34,  103 => 33,  91 => 24,  87 => 23,  81 => 20,  77 => 19,  73 => 18,  69 => 17,  65 => 16,  61 => 15,  57 => 14,  52 => 12,  44 => 7,  40 => 6,  35 => 3,  32 => 2,);
    }
}
