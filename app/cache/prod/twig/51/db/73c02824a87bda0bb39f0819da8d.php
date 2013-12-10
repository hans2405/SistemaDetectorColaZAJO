<?php

/* RutaMicroBundle:Usuario:login.html.twig */
class __TwigTemplate_51db73c02824a87bda0bb39f0819da8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
        echo "Iniciar session";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
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
                      <input type=\"text\" class=\"input-medium search-query\" placeholder=\"busqueda\">
                      <button type=\"submit\">Buscar</button>
                    </form> 
                  </div>              
                </li> 
                <li id=\"settings\" class=\"styled dropdown settings\">
                  <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Configuracion</a>
                  <ul class=\"dropdown-menu top_menu\">
                    <li class=\"show_all\">Configuracion</li>
                    <li><a class=\"mn_site\" href=\"#\"><span>Sitio</span></a></li>
                    <li><a class=\"mn_paperclip\" href=\"#\"><span>Ayuda</span></a></li>
                     <!--    <li><a class=\"mn_admin\" href=\"#\"><span>Admin</span></a></li>
                        <li><a class=\"mn_mail\" href=\"#\"><span>Mail</span></a></li>
                        <li><a class=\"mn_user\" href=\"#\"><span>User</span></a></li> -->
                      </ul>
                    </li>

                  </ul>           
                </div>


                <h3><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("ruta_micro_homepage");
        echo "\"><span>Ruta de micros Santa Cruz</span></a></h3>                                       

              </div>
            </div>

          </div>


          <div class=\"login_main_cont\"> 
            <div class=\"login_cont group login\">
<!--               <ul class=\"login_switcher\">
                <li><a class=\"login_l akt\" href=\"#\"><span>Login</span></a></li>
                <li><a class=\"login_s\" href=\"#\"><span>Sign up</span></a></li>
                <li><a class=\"login_f\" href=\"#\"><span>Forgot password</span></a></li>
              </ul> -->
              <h2>Iniciar session</h2>
              ";
        // line 68
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 69
            echo "              <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
              ";
        }
        // line 70
        echo "          
              <div class=\"login_form\">
                <form class=\"formClass\" action=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("usuario_login_check");
        echo "\" method=\"post\">
                  <fieldset>                
                    <label for=\"username\"><span>email</span></label>
                    <input id=\"username\" name=\"_username\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"validate[required] text-input\" placeholder=\"email\" type=\"text\" tabindex=\"1\" accesskey=\"u\">                
                  </fieldset>
                  <fieldset>                
                    <label class=\"pw_cont\" for=\"password\"><span>contraseña</span></label>
                    <input id=\"password\" name=\"_password\" class=\"validate[required] text-input\" placeholder=\"contraseña\" type=\"password\" tabindex=\"2\" accesskey=\"p\">                
                  </fieldset>
                  <fieldset class=\"login_submit\">
                    <center>

                      <button type=\"submit\" name=\"login\" class=\"btn\">ENTRAR</button>
                    </center>
                  </fieldset>
                  <fieldset class=\"login_social\">              
                <!--     <ul class=\"left\">
                      <li><input type=\"checkbox\" class=\"remember\"  value=\"1\" tabindex=\"3\" name=\"_remember_me\" checked></li>
                      <li class=\"info\"><span>REMEMBER ME</span></li>
                    </ul>                
                    <ul class=\"right\">                  
                      <li class=\"info\"><span>SIGN IN WITH</span></li>
                      <li><a class=\"login_facebook\" href=\"#\"><span>Facebook</span></a></li>
                      <li><a class=\"login_twitter\" href=\"#\"><span>Twitter</span></a></li>
                    </ul>    -->            
                  </fieldset>                    
                </form>      
              </div>
            </div> 
            <div class=\"login_cont group sign_up\">
              <ul class=\"login_switcher\">
                <li><a class=\"login_l\" href=\"#\"><span>Login</span></a></li>
                <li><a class=\"login_s akt\" href=\"#\"><span>Sign up</span></a></li>
                <li><a class=\"login_f\" href=\"#\"><span>Forgot password</span></a></li>
              </ul>
              <h2>Sign up</h2>
              <div class=\"login_form\">          
                <form class=\"formClass\" action=\"http://themes.loxdesign.net/phoenix/index.html\">
                  <fieldset>                
                    <label class=\"email_cont\" for=\"email_s\"><span>Email</span></label>
                    <input id=\"email_s\" name=\"email_s\" class=\"validate[custom[email]] text-input\" placeholder=\"email\" type=\"text\" tabindex=\"1\" accesskey=\"e\">                
                  </fieldset>
                  <fieldset>                
                    <label for=\"username_s\"><span>Username</span></label>
                    <input id=\"username_s\" name=\"username_s\" class=\"validate[required] text-input\" placeholder=\"username\" type=\"text\" tabindex=\"2\" accesskey=\"u\">                
                  </fieldset>
                  <fieldset>                
                    <label class=\"pw_cont\" for=\"password_s\"><span>Password</span></label>
                    <input id=\"password_s\" name=\"password_s\" class=\"validate[required] text-input\" placeholder=\"password\" type=\"password\" tabindex=\"3\" accesskey=\"p\">                
                  </fieldset>
                  <fieldset class=\"login_submit\"><button type=\"submit\" class=\"btn\">SIGN UP</button></fieldset>
                  <fieldset class=\"login_social\">                                                  
                    <ul class=\"right\">                  
                      <li class=\"info\"><span>SIGN IN WITH</span></li>
                      <li><a class=\"login_facebook\" href=\"#\"><span>Facebook</span></a></li>
                      <li><a class=\"login_twitter\" href=\"#\"><span>Twitter</span></a></li>
                    </ul>               
                  </fieldset>                    
                </form> 
              </div>     
            </div>
            <div class=\"login_cont group forgot\">
              <ul class=\"login_switcher\">
                <li><a class=\"login_l\" href=\"#\"><span>Login</span></a></li>
                <li><a class=\"login_s\" href=\"#\"><span>Sign up</span></a></li>
                <li><a class=\"login_f akt\" href=\"#\"><span>Forgot password</span></a></li>
              </ul>
              <h2>Forgot Password</h2> 
              <div class=\"login_form\">          
                <form class=\"formClass\" action=\"index.html\">
                  <fieldset>                
                    <label class=\"email_cont\" for=\"email_f\"><span>Email</span></label>
                    <input id=\"email_f\" name=\"email_f\" placeholder=\"email\" class=\"validate[custom[email]] text-input\"  type=\"text\" tabindex=\"1\" accesskey=\"u\">                
                  </fieldset>
                  <fieldset>                
                    <label for=\"username_f\"><span>Username</span></label>
                    <input id=\"username_f\" name=\"username_f\" class=\"validate[required] text-input\" placeholder=\"username\" type=\"text\" tabindex=\"1\" accesskey=\"u\">                
                  </fieldset>                            
                  <fieldset class=\"login_submit\"><button type=\"submit\" class=\"btn\">RECOVER PASSWORD</button></fieldset>
                  <fieldset class=\"login_social\">                                                
                    <ul class=\"right\">                  
                      <li class=\"info\"><span>SIGN IN WITH</span></li>
                      <li><a class=\"login_facebook\" href=\"#\"><span>Facebook</span></a></li>
                      <li><a class=\"login_twitter\" href=\"#\"><span>Twitter</span></a></li>
                    </ul>               
                  </fieldset>                      
                </form>  
              </div>                    
            </div>                
          </div>



          ";
    }

    public function getTemplateName()
    {
        return "RutaMicroBundle:Usuario:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 75,  119 => 72,  115 => 70,  109 => 69,  107 => 68,  88 => 52,  38 => 4,  35 => 3,  29 => 2,);
    }
}
