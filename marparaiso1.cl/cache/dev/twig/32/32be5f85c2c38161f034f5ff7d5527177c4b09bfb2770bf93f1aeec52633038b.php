<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_5576fb7e6ef50b499ba0c1787e88aff94c16fa09ae8eb16dea868889a7fe9084 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:login.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_b4dfc1313f924d75c56bbe9d44a2ad3cfcdd238d8d7137c1ed0258c30227542c = $this->env->getExtension("native_profiler");
        $__internal_b4dfc1313f924d75c56bbe9d44a2ad3cfcdd238d8d7137c1ed0258c30227542c->enter($__internal_b4dfc1313f924d75c56bbe9d44a2ad3cfcdd238d8d7137c1ed0258c30227542c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4dfc1313f924d75c56bbe9d44a2ad3cfcdd238d8d7137c1ed0258c30227542c->leave($__internal_b4dfc1313f924d75c56bbe9d44a2ad3cfcdd238d8d7137c1ed0258c30227542c_prof);

    }

    // line 3
    public function block_user_content($context, array $blocks = array())
    {
        $__internal_e8e5f6fdcab2a6db2803a0871115b9006d789071e8328e7875def4fcca5a138f = $this->env->getExtension("native_profiler");
        $__internal_e8e5f6fdcab2a6db2803a0871115b9006d789071e8328e7875def4fcca5a138f->enter($__internal_e8e5f6fdcab2a6db2803a0871115b9006d789071e8328e7875def4fcca5a138f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_content"));

        // line 4
        echo "
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-2\">
            <div class=\"login-logo\">
                <img class=\"img-responsive center-block\" src=\"";
        // line 9
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
        // line 20
        echo $this->env->getExtension('routing')->getPath("user_resetting_send_email");
        echo "\" method=\"post\">
                        <fieldset>
                            <div class=\"form-group\">
                                ";
        // line 23
        if (array_key_exists("invalid_username", $context)) {
            // line 24
            echo "                                    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
                                ";
        }
        // line 26
        echo "                                <input class=\"form-control text-center\" id=\"username\" placeholder=\"Usuario\" name=\"username\" type=\"text\" required=\"required\" autofocus>
                            </div>

                            <input type=\"submit\" class=\"btn btn-lg btn-primary btn-block\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


";
        
        $__internal_e8e5f6fdcab2a6db2803a0871115b9006d789071e8328e7875def4fcca5a138f->leave($__internal_e8e5f6fdcab2a6db2803a0871115b9006d789071e8328e7875def4fcca5a138f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 29,  75 => 26,  69 => 24,  67 => 23,  61 => 20,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends ":Admin:login.html.twig" %}*/
/* */
/* {% block user_content %}*/
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
/*                     <form action="{{ path('user_resetting_send_email') }}" method="post">*/
/*                         <fieldset>*/
/*                             <div class="form-group">*/
/*                                 {% if invalid_username is defined %}*/
/*                                     <p>{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}, 'FOSUserBundle') }}</p>*/
/*                                 {% endif %}*/
/*                                 <input class="form-control text-center" id="username" placeholder="Usuario" name="username" type="text" required="required" autofocus>*/
/*                             </div>*/
/* */
/*                             <input type="submit" class="btn btn-lg btn-primary btn-block" value="{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*                         </fieldset>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
