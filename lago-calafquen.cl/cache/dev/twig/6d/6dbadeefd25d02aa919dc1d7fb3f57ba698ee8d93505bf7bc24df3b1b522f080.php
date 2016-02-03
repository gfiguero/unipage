<?php

/* UniAdminBundle:Member:new.html.twig */
class __TwigTemplate_b30dc9f9dc4bf9dcbca054545303ff965275122095fd04e72cf168529dd2ee89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Member:new.html.twig", 1);
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
        $__internal_3749463f943167b4cab88b78fa310ee21bc54e4449312bda5479e7e460df760a = $this->env->getExtension("native_profiler");
        $__internal_3749463f943167b4cab88b78fa310ee21bc54e4449312bda5479e7e460df760a->enter($__internal_3749463f943167b4cab88b78fa310ee21bc54e4449312bda5479e7e460df760a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Member:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3749463f943167b4cab88b78fa310ee21bc54e4449312bda5479e7e460df760a->leave($__internal_3749463f943167b4cab88b78fa310ee21bc54e4449312bda5479e7e460df760a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_700d37c91792a9effb4498a4a6055978ab0bc4f8b2af960cffba759c67512107 = $this->env->getExtension("native_profiler");
        $__internal_700d37c91792a9effb4498a4a6055978ab0bc4f8b2af960cffba759c67512107->enter($__internal_700d37c91792a9effb4498a4a6055978ab0bc4f8b2af960cffba759c67512107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_700d37c91792a9effb4498a4a6055978ab0bc4f8b2af960cffba759c67512107->leave($__internal_700d37c91792a9effb4498a4a6055978ab0bc4f8b2af960cffba759c67512107_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f28060980e05b513182e9c06e1316d3c95c1ba956bc425139e5c81828da5d49 = $this->env->getExtension("native_profiler");
        $__internal_8f28060980e05b513182e9c06e1316d3c95c1ba956bc425139e5c81828da5d49->enter($__internal_8f28060980e05b513182e9c06e1316d3c95c1ba956bc425139e5c81828da5d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Member:new.html.twig", 9)->display($context);
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
        
        $__internal_8f28060980e05b513182e9c06e1316d3c95c1ba956bc425139e5c81828da5d49->leave($__internal_8f28060980e05b513182e9c06e1316d3c95c1ba956bc425139e5c81828da5d49_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Member:new.html.twig";
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
