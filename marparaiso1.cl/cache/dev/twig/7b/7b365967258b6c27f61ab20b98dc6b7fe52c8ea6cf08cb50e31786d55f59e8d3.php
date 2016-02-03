<?php

/* UniAdminBundle:Notice:new.html.twig */
class __TwigTemplate_92aec3fb5ed06f7ea2d8b856f06600ce74836607b2c30f8e2a673233db439a3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Notice:new.html.twig", 1);
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
        $__internal_40b6cbbb845ce35f54218151f0e01e37b0885e3bc0b6b66578c6a3bab648482f = $this->env->getExtension("native_profiler");
        $__internal_40b6cbbb845ce35f54218151f0e01e37b0885e3bc0b6b66578c6a3bab648482f->enter($__internal_40b6cbbb845ce35f54218151f0e01e37b0885e3bc0b6b66578c6a3bab648482f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Notice:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40b6cbbb845ce35f54218151f0e01e37b0885e3bc0b6b66578c6a3bab648482f->leave($__internal_40b6cbbb845ce35f54218151f0e01e37b0885e3bc0b6b66578c6a3bab648482f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a448e377506c2d0d2d9928d212d7fc64e4dd9786f9e4d891c7a08de19961860e = $this->env->getExtension("native_profiler");
        $__internal_a448e377506c2d0d2d9928d212d7fc64e4dd9786f9e4d891c7a08de19961860e->enter($__internal_a448e377506c2d0d2d9928d212d7fc64e4dd9786f9e4d891c7a08de19961860e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_a448e377506c2d0d2d9928d212d7fc64e4dd9786f9e4d891c7a08de19961860e->leave($__internal_a448e377506c2d0d2d9928d212d7fc64e4dd9786f9e4d891c7a08de19961860e_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_e18d32cb0029d118ee4d5c4c4687f1a64f22db84e26826bbe5c09f457301eec9 = $this->env->getExtension("native_profiler");
        $__internal_e18d32cb0029d118ee4d5c4c4687f1a64f22db84e26826bbe5c09f457301eec9->enter($__internal_e18d32cb0029d118ee4d5c4c4687f1a64f22db84e26826bbe5c09f457301eec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_e18d32cb0029d118ee4d5c4c4687f1a64f22db84e26826bbe5c09f457301eec9->leave($__internal_e18d32cb0029d118ee4d5c4c4687f1a64f22db84e26826bbe5c09f457301eec9_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfa00c195c1fc2d4095814afcd9f7c46e5ee53d50b4e9bdf1e2e9a90bfe63535 = $this->env->getExtension("native_profiler");
        $__internal_bfa00c195c1fc2d4095814afcd9f7c46e5ee53d50b4e9bdf1e2e9a90bfe63535->enter($__internal_bfa00c195c1fc2d4095814afcd9f7c46e5ee53d50b4e9bdf1e2e9a90bfe63535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Notice:new.html.twig", 11)->display($context);
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
        
        $__internal_bfa00c195c1fc2d4095814afcd9f7c46e5ee53d50b4e9bdf1e2e9a90bfe63535->leave($__internal_bfa00c195c1fc2d4095814afcd9f7c46e5ee53d50b4e9bdf1e2e9a90bfe63535_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Notice:new.html.twig";
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
