<?php

/* UniAdminBundle:Document:new.html.twig */
class __TwigTemplate_fd3cc3a76f78fa3a3d71289922e28aaad609fdf685a0be6944ae75d7eee432f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Document:new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Admin:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fee9f1fb0979c4af3df3e11546a4aacf4a72f4048fa87892765d94dd1f099b9 = $this->env->getExtension("native_profiler");
        $__internal_7fee9f1fb0979c4af3df3e11546a4aacf4a72f4048fa87892765d94dd1f099b9->enter($__internal_7fee9f1fb0979c4af3df3e11546a4aacf4a72f4048fa87892765d94dd1f099b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Document:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fee9f1fb0979c4af3df3e11546a4aacf4a72f4048fa87892765d94dd1f099b9->leave($__internal_7fee9f1fb0979c4af3df3e11546a4aacf4a72f4048fa87892765d94dd1f099b9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8aed61adea80d0d797c02a1bda7835f9467dc5036ed46b272e9f683cbbf2c3b1 = $this->env->getExtension("native_profiler");
        $__internal_8aed61adea80d0d797c02a1bda7835f9467dc5036ed46b272e9f683cbbf2c3b1->enter($__internal_8aed61adea80d0d797c02a1bda7835f9467dc5036ed46b272e9f683cbbf2c3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_8aed61adea80d0d797c02a1bda7835f9467dc5036ed46b272e9f683cbbf2c3b1->leave($__internal_8aed61adea80d0d797c02a1bda7835f9467dc5036ed46b272e9f683cbbf2c3b1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5aad5fd742a721088f7ca893d50370ebce2e681259f736bbad2665dd95050672 = $this->env->getExtension("native_profiler");
        $__internal_5aad5fd742a721088f7ca893d50370ebce2e681259f736bbad2665dd95050672->enter($__internal_5aad5fd742a721088f7ca893d50370ebce2e681259f736bbad2665dd95050672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Document:new.html.twig", 9)->display($context);
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
        // line 18
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
        
        $__internal_5aad5fd742a721088f7ca893d50370ebce2e681259f736bbad2665dd95050672->leave($__internal_5aad5fd742a721088f7ca893d50370ebce2e681259f736bbad2665dd95050672_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Document:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ':Admin:base.html.twig' %}*/
/* */
/* {% block title %}{{ app.request.attributes.get('_route')|trans }}{% endblock %}*/
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