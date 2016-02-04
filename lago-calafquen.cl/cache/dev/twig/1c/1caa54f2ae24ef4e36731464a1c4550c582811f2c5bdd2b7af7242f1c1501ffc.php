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
        $__internal_806dbac3effb4317fdbd7d99c5741951b9e1f8cdfbb46d4dd3f2d4cc1482ae84 = $this->env->getExtension("native_profiler");
        $__internal_806dbac3effb4317fdbd7d99c5741951b9e1f8cdfbb46d4dd3f2d4cc1482ae84->enter($__internal_806dbac3effb4317fdbd7d99c5741951b9e1f8cdfbb46d4dd3f2d4cc1482ae84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_806dbac3effb4317fdbd7d99c5741951b9e1f8cdfbb46d4dd3f2d4cc1482ae84->leave($__internal_806dbac3effb4317fdbd7d99c5741951b9e1f8cdfbb46d4dd3f2d4cc1482ae84_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_17265f5e30b5c1811f29223990b88c7a8f8adc09961bde25eefc1c6a3246d5bf = $this->env->getExtension("native_profiler");
        $__internal_17265f5e30b5c1811f29223990b88c7a8f8adc09961bde25eefc1c6a3246d5bf->enter($__internal_17265f5e30b5c1811f29223990b88c7a8f8adc09961bde25eefc1c6a3246d5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_17265f5e30b5c1811f29223990b88c7a8f8adc09961bde25eefc1c6a3246d5bf->leave($__internal_17265f5e30b5c1811f29223990b88c7a8f8adc09961bde25eefc1c6a3246d5bf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ca774d2528417b7a795ebdc78ec5f5223f9c9a7305f7b4e3c1e38ca654486cb = $this->env->getExtension("native_profiler");
        $__internal_2ca774d2528417b7a795ebdc78ec5f5223f9c9a7305f7b4e3c1e38ca654486cb->enter($__internal_2ca774d2528417b7a795ebdc78ec5f5223f9c9a7305f7b4e3c1e38ca654486cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2ca774d2528417b7a795ebdc78ec5f5223f9c9a7305f7b4e3c1e38ca654486cb->leave($__internal_2ca774d2528417b7a795ebdc78ec5f5223f9c9a7305f7b4e3c1e38ca654486cb_prof);

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
