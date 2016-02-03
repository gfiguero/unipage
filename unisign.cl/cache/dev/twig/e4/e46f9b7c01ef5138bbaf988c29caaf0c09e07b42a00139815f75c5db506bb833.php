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
        $__internal_73aa4553f1c9a1a27115aae16aedcfd9f3080beb1d2c8f4ce48fa43891c74655 = $this->env->getExtension("native_profiler");
        $__internal_73aa4553f1c9a1a27115aae16aedcfd9f3080beb1d2c8f4ce48fa43891c74655->enter($__internal_73aa4553f1c9a1a27115aae16aedcfd9f3080beb1d2c8f4ce48fa43891c74655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Service:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73aa4553f1c9a1a27115aae16aedcfd9f3080beb1d2c8f4ce48fa43891c74655->leave($__internal_73aa4553f1c9a1a27115aae16aedcfd9f3080beb1d2c8f4ce48fa43891c74655_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b1a18b6d8ee97360af1da1864fc3b29b05a6e0ccf085c8f5b6f4148c4a709df = $this->env->getExtension("native_profiler");
        $__internal_3b1a18b6d8ee97360af1da1864fc3b29b05a6e0ccf085c8f5b6f4148c4a709df->enter($__internal_3b1a18b6d8ee97360af1da1864fc3b29b05a6e0ccf085c8f5b6f4148c4a709df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_3b1a18b6d8ee97360af1da1864fc3b29b05a6e0ccf085c8f5b6f4148c4a709df->leave($__internal_3b1a18b6d8ee97360af1da1864fc3b29b05a6e0ccf085c8f5b6f4148c4a709df_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_16af53fdfd263e4ff3fee0c8977b9639d15c36b4667072b8e7dd16ba4426605a = $this->env->getExtension("native_profiler");
        $__internal_16af53fdfd263e4ff3fee0c8977b9639d15c36b4667072b8e7dd16ba4426605a->enter($__internal_16af53fdfd263e4ff3fee0c8977b9639d15c36b4667072b8e7dd16ba4426605a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_16af53fdfd263e4ff3fee0c8977b9639d15c36b4667072b8e7dd16ba4426605a->leave($__internal_16af53fdfd263e4ff3fee0c8977b9639d15c36b4667072b8e7dd16ba4426605a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_be2a0dd1ebfe054989fe5e7a920948383dc415b7b42c97fc765d305f81813258 = $this->env->getExtension("native_profiler");
        $__internal_be2a0dd1ebfe054989fe5e7a920948383dc415b7b42c97fc765d305f81813258->enter($__internal_be2a0dd1ebfe054989fe5e7a920948383dc415b7b42c97fc765d305f81813258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_be2a0dd1ebfe054989fe5e7a920948383dc415b7b42c97fc765d305f81813258->leave($__internal_be2a0dd1ebfe054989fe5e7a920948383dc415b7b42c97fc765d305f81813258_prof);

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
