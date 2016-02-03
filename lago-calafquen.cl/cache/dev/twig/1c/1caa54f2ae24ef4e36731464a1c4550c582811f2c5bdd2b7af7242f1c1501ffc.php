<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_a7256c58bb4a6f285574b9bc0bc7363c85ff29fa4ebd60661c2fdcb673e3436d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_abf0f3209d9f7055e54aa84bbce56d6c56ae77e65ce73c9058df3ce2d92df1bf = $this->env->getExtension("native_profiler");
        $__internal_abf0f3209d9f7055e54aa84bbce56d6c56ae77e65ce73c9058df3ce2d92df1bf->enter($__internal_abf0f3209d9f7055e54aa84bbce56d6c56ae77e65ce73c9058df3ce2d92df1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abf0f3209d9f7055e54aa84bbce56d6c56ae77e65ce73c9058df3ce2d92df1bf->leave($__internal_abf0f3209d9f7055e54aa84bbce56d6c56ae77e65ce73c9058df3ce2d92df1bf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d9b1a72100142691c06ee929b6392ee8699b6ce0181ab811ee37b0e54f39076 = $this->env->getExtension("native_profiler");
        $__internal_5d9b1a72100142691c06ee929b6392ee8699b6ce0181ab811ee37b0e54f39076->enter($__internal_5d9b1a72100142691c06ee929b6392ee8699b6ce0181ab811ee37b0e54f39076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_5d9b1a72100142691c06ee929b6392ee8699b6ce0181ab811ee37b0e54f39076->leave($__internal_5d9b1a72100142691c06ee929b6392ee8699b6ce0181ab811ee37b0e54f39076_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b6e5d1e809cd1adda76fe76451a2447fddac559e89f2efafe0d4721aefdc915 = $this->env->getExtension("native_profiler");
        $__internal_9b6e5d1e809cd1adda76fe76451a2447fddac559e89f2efafe0d4721aefdc915->enter($__internal_9b6e5d1e809cd1adda76fe76451a2447fddac559e89f2efafe0d4721aefdc915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "FOSUserBundle:Profile:edit.html.twig", 9)->display($context);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        echo "</h1>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("style" => "horizontal"));
        echo "
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
";
        
        $__internal_9b6e5d1e809cd1adda76fe76451a2447fddac559e89f2efafe0d4721aefdc915->leave($__internal_9b6e5d1e809cd1adda76fe76451a2447fddac559e89f2efafe0d4721aefdc915_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ':Admin:base.html.twig' %}*/
/* */
/* {% block title %}{{ app.request.attributes.get('_route')|trans }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div id="page-wrapper">*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <h1 class="page-header">{% include ':Admin:icon.html.twig' %}{{ app.request.attributes.get('_route')|trans }}</h1>*/
/*             </div>*/
/*         </div>*/
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
/* {% endblock body %}*/
/* */
/* */
