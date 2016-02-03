<?php

/* UniAdminBundle:Frontpage:new.html.twig */
class __TwigTemplate_63f71c9190b913e73221b05337ed490492a6a444d2cfd7d08c8e521c5e08668a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Frontpage:new.html.twig", 1);
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
        $__internal_03d23654ac090178464a4f818a63497f51463bb1deb20e52316a159af3e48521 = $this->env->getExtension("native_profiler");
        $__internal_03d23654ac090178464a4f818a63497f51463bb1deb20e52316a159af3e48521->enter($__internal_03d23654ac090178464a4f818a63497f51463bb1deb20e52316a159af3e48521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Frontpage:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03d23654ac090178464a4f818a63497f51463bb1deb20e52316a159af3e48521->leave($__internal_03d23654ac090178464a4f818a63497f51463bb1deb20e52316a159af3e48521_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_987a35b6aac8a63594d5a9d8862f3821a55fc6a82995caa7d8b412e6d307a5dd = $this->env->getExtension("native_profiler");
        $__internal_987a35b6aac8a63594d5a9d8862f3821a55fc6a82995caa7d8b412e6d307a5dd->enter($__internal_987a35b6aac8a63594d5a9d8862f3821a55fc6a82995caa7d8b412e6d307a5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_987a35b6aac8a63594d5a9d8862f3821a55fc6a82995caa7d8b412e6d307a5dd->leave($__internal_987a35b6aac8a63594d5a9d8862f3821a55fc6a82995caa7d8b412e6d307a5dd_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_0f0d9afc07446e4a4d6a9f008c40a60540dc68adc528fb095f58b72a7dd4bcbf = $this->env->getExtension("native_profiler");
        $__internal_0f0d9afc07446e4a4d6a9f008c40a60540dc68adc528fb095f58b72a7dd4bcbf->enter($__internal_0f0d9afc07446e4a4d6a9f008c40a60540dc68adc528fb095f58b72a7dd4bcbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_0f0d9afc07446e4a4d6a9f008c40a60540dc68adc528fb095f58b72a7dd4bcbf->leave($__internal_0f0d9afc07446e4a4d6a9f008c40a60540dc68adc528fb095f58b72a7dd4bcbf_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef7558bb6a522444b83c4aace0f58cdda1b3439825967451c5d9329d0a9205e3 = $this->env->getExtension("native_profiler");
        $__internal_ef7558bb6a522444b83c4aace0f58cdda1b3439825967451c5d9329d0a9205e3->enter($__internal_ef7558bb6a522444b83c4aace0f58cdda1b3439825967451c5d9329d0a9205e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Frontpage:new.html.twig", 11)->display($context);
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
        
        $__internal_ef7558bb6a522444b83c4aace0f58cdda1b3439825967451c5d9329d0a9205e3->leave($__internal_ef7558bb6a522444b83c4aace0f58cdda1b3439825967451c5d9329d0a9205e3_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Frontpage:new.html.twig";
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
