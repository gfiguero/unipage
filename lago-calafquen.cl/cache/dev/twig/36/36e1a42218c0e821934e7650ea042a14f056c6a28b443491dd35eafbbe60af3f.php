<?php

/* UniAdminBundle:Report:new.html.twig */
class __TwigTemplate_3670048da38d6ee0b8309c038588b3e60932fff68629f97f7dd6686b72e1841c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Report:new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascript' => array($this, 'block_javascript'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Admin:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3976400ecfbe5845dfa5687a1857e6d4659f73d9903a5c8a535f2c59112118d = $this->env->getExtension("native_profiler");
        $__internal_b3976400ecfbe5845dfa5687a1857e6d4659f73d9903a5c8a535f2c59112118d->enter($__internal_b3976400ecfbe5845dfa5687a1857e6d4659f73d9903a5c8a535f2c59112118d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Report:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3976400ecfbe5845dfa5687a1857e6d4659f73d9903a5c8a535f2c59112118d->leave($__internal_b3976400ecfbe5845dfa5687a1857e6d4659f73d9903a5c8a535f2c59112118d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7578ba0506a5dc0e4937857165956db9cfe17eaf46d7098b7ad25c44f3432d6a = $this->env->getExtension("native_profiler");
        $__internal_7578ba0506a5dc0e4937857165956db9cfe17eaf46d7098b7ad25c44f3432d6a->enter($__internal_7578ba0506a5dc0e4937857165956db9cfe17eaf46d7098b7ad25c44f3432d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_7578ba0506a5dc0e4937857165956db9cfe17eaf46d7098b7ad25c44f3432d6a->leave($__internal_7578ba0506a5dc0e4937857165956db9cfe17eaf46d7098b7ad25c44f3432d6a_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_53067214d363cc3082568efa77b2e62ad8c1dacf79fe0575ca2280980548a3d4 = $this->env->getExtension("native_profiler");
        $__internal_53067214d363cc3082568efa77b2e62ad8c1dacf79fe0575ca2280980548a3d4->enter($__internal_53067214d363cc3082568efa77b2e62ad8c1dacf79fe0575ca2280980548a3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_53067214d363cc3082568efa77b2e62ad8c1dacf79fe0575ca2280980548a3d4->leave($__internal_53067214d363cc3082568efa77b2e62ad8c1dacf79fe0575ca2280980548a3d4_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c64b09bce3ab0de819c87d604be47c72fc0cbefaa30debdf086d2c27b4d0f286 = $this->env->getExtension("native_profiler");
        $__internal_c64b09bce3ab0de819c87d604be47c72fc0cbefaa30debdf086d2c27b4d0f286->enter($__internal_c64b09bce3ab0de819c87d604be47c72fc0cbefaa30debdf086d2c27b4d0f286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Report:new.html.twig", 11)->display($context);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        echo "</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("style" => "horizontal"));
        echo "
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
";
        
        $__internal_c64b09bce3ab0de819c87d604be47c72fc0cbefaa30debdf086d2c27b4d0f286->leave($__internal_c64b09bce3ab0de819c87d604be47c72fc0cbefaa30debdf086d2c27b4d0f286_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Report:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  71 => 11,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends ':Admin:base.html.twig' %}*/
/* */
/* {% block title %}{{ app.request.attributes.get('_route')|trans }}{% endblock %}*/
/* */
/* {% block javascript %}{{ tinymce_init() }}{% endblock %}*/
/* */
/* {% block body -%}*/
/*     <div id="page-wrapper">*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <h1 class="page-header">{% include ':Admin:icon.html.twig' %}{{ app.request.attributes.get('_route')|trans }}</h1>*/
/*             </div>*/
/*             <!-- /.col-lg-12 -->*/
/*         </div>*/
/*         <!-- /.row -->*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-body">*/
/*                         {{ form(form, { 'style': 'horizontal' }) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- /.col-lg-12 -->*/
/*         </div>*/
/*         <!-- /.row -->*/
/*     </div>*/
/*     <!-- /#page-wrapper -->*/
/* {% endblock %}*/
/* */
