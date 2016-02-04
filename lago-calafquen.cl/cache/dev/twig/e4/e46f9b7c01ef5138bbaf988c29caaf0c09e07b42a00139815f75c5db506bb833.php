<?php

/* UniAdminBundle:Service:edit.html.twig */
class __TwigTemplate_6699c58bb6729977750eed3d1078e33de0df3b0b12a8a3860960f70e9c4175e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Service:edit.html.twig", 1);
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
        $__internal_2ee2e14a5eb371f8deda3121ac6a932d1735a462a0a0129f5951cf1fb602b02e = $this->env->getExtension("native_profiler");
        $__internal_2ee2e14a5eb371f8deda3121ac6a932d1735a462a0a0129f5951cf1fb602b02e->enter($__internal_2ee2e14a5eb371f8deda3121ac6a932d1735a462a0a0129f5951cf1fb602b02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Service:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ee2e14a5eb371f8deda3121ac6a932d1735a462a0a0129f5951cf1fb602b02e->leave($__internal_2ee2e14a5eb371f8deda3121ac6a932d1735a462a0a0129f5951cf1fb602b02e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae75c0d3854e6196a49a99e58cd5942029c19be66b2bd9022583f18bbd8c345b = $this->env->getExtension("native_profiler");
        $__internal_ae75c0d3854e6196a49a99e58cd5942029c19be66b2bd9022583f18bbd8c345b->enter($__internal_ae75c0d3854e6196a49a99e58cd5942029c19be66b2bd9022583f18bbd8c345b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_ae75c0d3854e6196a49a99e58cd5942029c19be66b2bd9022583f18bbd8c345b->leave($__internal_ae75c0d3854e6196a49a99e58cd5942029c19be66b2bd9022583f18bbd8c345b_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_9145f7cbfa49d8075d444a1afdff79784fe071404d215fdbb9b18ce0c9ffd8a5 = $this->env->getExtension("native_profiler");
        $__internal_9145f7cbfa49d8075d444a1afdff79784fe071404d215fdbb9b18ce0c9ffd8a5->enter($__internal_9145f7cbfa49d8075d444a1afdff79784fe071404d215fdbb9b18ce0c9ffd8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_9145f7cbfa49d8075d444a1afdff79784fe071404d215fdbb9b18ce0c9ffd8a5->leave($__internal_9145f7cbfa49d8075d444a1afdff79784fe071404d215fdbb9b18ce0c9ffd8a5_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca95ed1dac9a304caab595373a4bc0cd6646c96a15763e0d998d10634a951bb4 = $this->env->getExtension("native_profiler");
        $__internal_ca95ed1dac9a304caab595373a4bc0cd6646c96a15763e0d998d10634a951bb4->enter($__internal_ca95ed1dac9a304caab595373a4bc0cd6646c96a15763e0d998d10634a951bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Service:edit.html.twig", 11)->display($context);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        echo " ID: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form', array("style" => "horizontal"));
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
        
        $__internal_ca95ed1dac9a304caab595373a4bc0cd6646c96a15763e0d998d10634a951bb4->leave($__internal_ca95ed1dac9a304caab595373a4bc0cd6646c96a15763e0d998d10634a951bb4_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Service:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 20,  71 => 11,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
/*                 <h1 class="page-header">{% include ':Admin:icon.html.twig' %}{{ app.request.attributes.get('_route')|trans }} ID: {{ entity.id }}</h1>*/
/*             </div>*/
/*             <!-- /.col-lg-12 -->*/
/*         </div>*/
/*         <!-- /.row -->*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-body">*/
/*                         {{ form(edit_form, { 'style': 'horizontal' }) }}*/
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
