<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_5f7a581113cbe8635aa84d1f6973f284a2e9223edf04cce250a1f879f830b168 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:login.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_ce6c63d5068bc5c63ea97e9cc62601b8b290c742445bf32da772d3cf343f969f = $this->env->getExtension("native_profiler");
        $__internal_ce6c63d5068bc5c63ea97e9cc62601b8b290c742445bf32da772d3cf343f969f->enter($__internal_ce6c63d5068bc5c63ea97e9cc62601b8b290c742445bf32da772d3cf343f969f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce6c63d5068bc5c63ea97e9cc62601b8b290c742445bf32da772d3cf343f969f->leave($__internal_ce6c63d5068bc5c63ea97e9cc62601b8b290c742445bf32da772d3cf343f969f_prof);

    }

    // line 3
    public function block_user_content($context, array $blocks = array())
    {
        $__internal_8423198602e53ba0f36d1f1537ef7174af12e3ce93bc6e7485ffbf020fb6103a = $this->env->getExtension("native_profiler");
        $__internal_8423198602e53ba0f36d1f1537ef7174af12e3ce93bc6e7485ffbf020fb6103a->enter($__internal_8423198602e53ba0f36d1f1537ef7174af12e3ce93bc6e7485ffbf020fb6103a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_content"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"post\">
                        <fieldset>
                            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                            <input type=\"submit\" class=\"btn btn-lg btn-primary btn-block\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


";
        
        $__internal_8423198602e53ba0f36d1f1537ef7174af12e3ce93bc6e7485ffbf020fb6103a->leave($__internal_8423198602e53ba0f36d1f1537ef7174af12e3ce93bc6e7485ffbf020fb6103a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  68 => 22,  61 => 20,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     <form action="{{ path('user_resetting_reset', {'token': token}) }}" {{ form_enctype(form) }} method="post">*/
/*                         <fieldset>*/
/*                             {{ form_widget(form) }}*/
/*                             <input type="submit" class="btn btn-lg btn-primary btn-block" value="{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }}" />*/
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
