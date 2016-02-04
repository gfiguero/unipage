<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f089058d94ff3455209c3176c6b3c34d86f3b39e809039db26a40da5204f6575 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:login.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'user_content' => array($this, 'block_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Admin:login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72d8e6b9bf7bb1cbef5371106e015931d9841dac2d24220b210d09b880b4547a = $this->env->getExtension("native_profiler");
        $__internal_72d8e6b9bf7bb1cbef5371106e015931d9841dac2d24220b210d09b880b4547a->enter($__internal_72d8e6b9bf7bb1cbef5371106e015931d9841dac2d24220b210d09b880b4547a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72d8e6b9bf7bb1cbef5371106e015931d9841dac2d24220b210d09b880b4547a->leave($__internal_72d8e6b9bf7bb1cbef5371106e015931d9841dac2d24220b210d09b880b4547a_prof);

    }

    // line 3
    public function block_user_content($context, array $blocks = array())
    {
        $__internal_622d9968b02f5315c1718d01d777f104d3ec7ede083c8746312f294e6a6bc26a = $this->env->getExtension("native_profiler");
        $__internal_622d9968b02f5315c1718d01d777f104d3ec7ede083c8746312f294e6a6bc26a->enter($__internal_622d9968b02f5315c1718d01d777f104d3ec7ede083c8746312f294e6a6bc26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_content"));

        // line 4
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-2\">
            <div class=\"login-logo\">
                <img class=\"img-responsive center-block\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('asset')->getAssetUrl("/uploads/logo/uniAdmin.png"), "login_logo"), "html", null, true);
        echo "\">
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4\">
            <div class=\"login-panel panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title text-center\">Ingreso de Usuarios</h3>
                </div>
                <div class=\"panel-body\">
                    <form action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("user_security_check");
        echo "\" method=\"post\">
                        <fieldset>
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                            <div class=\"form-group\">
                                <input class=\"form-control text-center\" id=\"username\" placeholder=\"Usuario\" name=\"_username\" type=\"text\" required=\"required\" autofocus>
                            </div>
                            <div class=\"form-group\">
                                <input class=\"form-control text-center\" id=\"password\" placeholder=\"Password\" name=\"_password\" type=\"password\" value=\"\" required=\"required\">
                            </div>

                            <input type=\"submit\" class=\"btn btn-lg btn-primary btn-block\" id=\"_submit\" name=\"_submit\" value=\"Ingresar\" />
                        </fieldset>
                    </form>
                </div>
                <div class=\"panel-footer text-center\">
                    <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_resetting_request"), "html", null, true);
        echo "</a>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_622d9968b02f5315c1718d01d777f104d3ec7ede083c8746312f294e6a6bc26a->leave($__internal_622d9968b02f5315c1718d01d777f104d3ec7ede083c8746312f294e6a6bc26a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 39,  74 => 25,  69 => 23,  55 => 12,  48 => 7,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends ":Admin:login.html.twig" %}*/
/* */
/* {% block user_content %}*/
/* {% if error %}*/
/*     <div>{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/* {% endif %}*/
/* */
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-md-8 col-md-offset-2">*/
/*             <div class="login-logo">*/
/*                 <img class="img-responsive center-block" src="{{ asset('/uploads/logo/uniAdmin.png') | imagine_filter('login_logo') }}">*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-4 col-md-offset-4">*/
/*             <div class="login-panel panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <h3 class="panel-title text-center">Ingreso de Usuarios</h3>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <form action="{{ path("user_security_check") }}" method="post">*/
/*                         <fieldset>*/
/*                             <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                             <div class="form-group">*/
/*                                 <input class="form-control text-center" id="username" placeholder="Usuario" name="_username" type="text" required="required" autofocus>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <input class="form-control text-center" id="password" placeholder="Password" name="_password" type="password" value="" required="required">*/
/*                             </div>*/
/* */
/*                             <input type="submit" class="btn btn-lg btn-primary btn-block" id="_submit" name="_submit" value="Ingresar" />*/
/*                         </fieldset>*/
/*                     </form>*/
/*                 </div>*/
/*                 <div class="panel-footer text-center">*/
/*                     <a href="{{ path('user_resetting_request') }}">{{ 'user_resetting_request'|trans }}</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock user_content %}*/
/* */
