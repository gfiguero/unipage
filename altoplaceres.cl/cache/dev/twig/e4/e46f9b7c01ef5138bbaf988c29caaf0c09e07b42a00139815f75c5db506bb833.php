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
        $__internal_1cf01d17f392d8e98c966c808e4e028d2368172168b722a9801f543b614c10ff = $this->env->getExtension("native_profiler");
        $__internal_1cf01d17f392d8e98c966c808e4e028d2368172168b722a9801f543b614c10ff->enter($__internal_1cf01d17f392d8e98c966c808e4e028d2368172168b722a9801f543b614c10ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Service:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cf01d17f392d8e98c966c808e4e028d2368172168b722a9801f543b614c10ff->leave($__internal_1cf01d17f392d8e98c966c808e4e028d2368172168b722a9801f543b614c10ff_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd7a08d8db793d0f4c97d226b14608fb53c9718ca929c7e5767a8551d28cae8a = $this->env->getExtension("native_profiler");
        $__internal_bd7a08d8db793d0f4c97d226b14608fb53c9718ca929c7e5767a8551d28cae8a->enter($__internal_bd7a08d8db793d0f4c97d226b14608fb53c9718ca929c7e5767a8551d28cae8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_bd7a08d8db793d0f4c97d226b14608fb53c9718ca929c7e5767a8551d28cae8a->leave($__internal_bd7a08d8db793d0f4c97d226b14608fb53c9718ca929c7e5767a8551d28cae8a_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_b420eba36ec7769a8ed8893c25fcc93f5dab4ed3a6ae2557c2fb848a66c06d00 = $this->env->getExtension("native_profiler");
        $__internal_b420eba36ec7769a8ed8893c25fcc93f5dab4ed3a6ae2557c2fb848a66c06d00->enter($__internal_b420eba36ec7769a8ed8893c25fcc93f5dab4ed3a6ae2557c2fb848a66c06d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_b420eba36ec7769a8ed8893c25fcc93f5dab4ed3a6ae2557c2fb848a66c06d00->leave($__internal_b420eba36ec7769a8ed8893c25fcc93f5dab4ed3a6ae2557c2fb848a66c06d00_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7878850ae041296f7374b8f6e0dd8de6f3543218c96dafc8693d7e2729eb0677 = $this->env->getExtension("native_profiler");
        $__internal_7878850ae041296f7374b8f6e0dd8de6f3543218c96dafc8693d7e2729eb0677->enter($__internal_7878850ae041296f7374b8f6e0dd8de6f3543218c96dafc8693d7e2729eb0677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7878850ae041296f7374b8f6e0dd8de6f3543218c96dafc8693d7e2729eb0677->leave($__internal_7878850ae041296f7374b8f6e0dd8de6f3543218c96dafc8693d7e2729eb0677_prof);

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
