<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_9917085c8857ad8f94b8cf7cba88ea680d08c0c86adbfe062855f8b633281d65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:login.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_8b78d87c51a8bf7edcb51f456e307816bc263e6ddeda4a5e4d91ad6f88d42189 = $this->env->getExtension("native_profiler");
        $__internal_8b78d87c51a8bf7edcb51f456e307816bc263e6ddeda4a5e4d91ad6f88d42189->enter($__internal_8b78d87c51a8bf7edcb51f456e307816bc263e6ddeda4a5e4d91ad6f88d42189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b78d87c51a8bf7edcb51f456e307816bc263e6ddeda4a5e4d91ad6f88d42189->leave($__internal_8b78d87c51a8bf7edcb51f456e307816bc263e6ddeda4a5e4d91ad6f88d42189_prof);

    }

    // line 3
    public function block_user_content($context, array $blocks = array())
    {
        $__internal_a6accb367430d62cf8d5e913fed92d4d83cafadbbdaeb70ab91970d654180f15 = $this->env->getExtension("native_profiler");
        $__internal_a6accb367430d62cf8d5e913fed92d4d83cafadbbdaeb70ab91970d654180f15->enter($__internal_a6accb367430d62cf8d5e913fed92d4d83cafadbbdaeb70ab91970d654180f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_content"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_a6accb367430d62cf8d5e913fed92d4d83cafadbbdaeb70ab91970d654180f15->leave($__internal_a6accb367430d62cf8d5e913fed92d4d83cafadbbdaeb70ab91970d654180f15_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 20,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     {{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock user_content %}*/
