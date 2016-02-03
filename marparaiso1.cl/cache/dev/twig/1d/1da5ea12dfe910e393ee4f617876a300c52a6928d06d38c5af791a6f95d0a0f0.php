<?php

/* UniAdminBundle:Publication:edit.html.twig */
class __TwigTemplate_dfb12e495c18589e2e7b2e0d7850b64999799682ee94d617999e03553b97cd8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Publication:edit.html.twig", 1);
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
        $__internal_28bb77657033cd3b241217c06874bcd39cae55fa3488341f4d354408e4791b44 = $this->env->getExtension("native_profiler");
        $__internal_28bb77657033cd3b241217c06874bcd39cae55fa3488341f4d354408e4791b44->enter($__internal_28bb77657033cd3b241217c06874bcd39cae55fa3488341f4d354408e4791b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Publication:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28bb77657033cd3b241217c06874bcd39cae55fa3488341f4d354408e4791b44->leave($__internal_28bb77657033cd3b241217c06874bcd39cae55fa3488341f4d354408e4791b44_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb5d41f460a149eda1546840a97070c1a11890a4bcb911ad725100b617d3c472 = $this->env->getExtension("native_profiler");
        $__internal_fb5d41f460a149eda1546840a97070c1a11890a4bcb911ad725100b617d3c472->enter($__internal_fb5d41f460a149eda1546840a97070c1a11890a4bcb911ad725100b617d3c472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_fb5d41f460a149eda1546840a97070c1a11890a4bcb911ad725100b617d3c472->leave($__internal_fb5d41f460a149eda1546840a97070c1a11890a4bcb911ad725100b617d3c472_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_bff44f50a1fad9ebe4bd5a66fc2bf88c09b370121be74352586fea7707f1fc00 = $this->env->getExtension("native_profiler");
        $__internal_bff44f50a1fad9ebe4bd5a66fc2bf88c09b370121be74352586fea7707f1fc00->enter($__internal_bff44f50a1fad9ebe4bd5a66fc2bf88c09b370121be74352586fea7707f1fc00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_bff44f50a1fad9ebe4bd5a66fc2bf88c09b370121be74352586fea7707f1fc00->leave($__internal_bff44f50a1fad9ebe4bd5a66fc2bf88c09b370121be74352586fea7707f1fc00_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_327cc8827ae92139a0190919287501050e1323910514e7bc374ce2c568c70f82 = $this->env->getExtension("native_profiler");
        $__internal_327cc8827ae92139a0190919287501050e1323910514e7bc374ce2c568c70f82->enter($__internal_327cc8827ae92139a0190919287501050e1323910514e7bc374ce2c568c70f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Publication:edit.html.twig", 11)->display($context);
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
        
        $__internal_327cc8827ae92139a0190919287501050e1323910514e7bc374ce2c568c70f82->leave($__internal_327cc8827ae92139a0190919287501050e1323910514e7bc374ce2c568c70f82_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Publication:edit.html.twig";
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
