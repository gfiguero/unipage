<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_5c5b6d4cedcc6461abd5054cbf293cfa79e1717567d934ed257456da111391e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:login.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_b3566dbaf17604c817f9ce348d002ef68d5aba03710dd35854cb23797957454c = $this->env->getExtension("native_profiler");
        $__internal_b3566dbaf17604c817f9ce348d002ef68d5aba03710dd35854cb23797957454c->enter($__internal_b3566dbaf17604c817f9ce348d002ef68d5aba03710dd35854cb23797957454c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3566dbaf17604c817f9ce348d002ef68d5aba03710dd35854cb23797957454c->leave($__internal_b3566dbaf17604c817f9ce348d002ef68d5aba03710dd35854cb23797957454c_prof);

    }

    // line 3
    public function block_user_content($context, array $blocks = array())
    {
        $__internal_c762397efec34fcd5ccceb0bb3470f198fa6967b53665f9600ce6ded8c53eaea = $this->env->getExtension("native_profiler");
        $__internal_c762397efec34fcd5ccceb0bb3470f198fa6967b53665f9600ce6ded8c53eaea->enter($__internal_c762397efec34fcd5ccceb0bb3470f198fa6967b53665f9600ce6ded8c53eaea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_content"));

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
                    ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "
                </div>
                <div class=\"panel-footer\">
                    <a type=\"button\" class=\"btn btn-primary btn-block\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("user_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_security_login"), "html", null, true);
        echo "</a>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_c762397efec34fcd5ccceb0bb3470f198fa6967b53665f9600ce6ded8c53eaea->leave($__internal_c762397efec34fcd5ccceb0bb3470f198fa6967b53665f9600ce6ded8c53eaea_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 23,  61 => 20,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     {{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}*/
/*                 </div>*/
/*                 <div class="panel-footer">*/
/*                     <a type="button" class="btn btn-primary btn-block" href="{{ path('user_security_login') }}">{{ 'user_security_login'|trans }}</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock user_content %}*/
/* */
