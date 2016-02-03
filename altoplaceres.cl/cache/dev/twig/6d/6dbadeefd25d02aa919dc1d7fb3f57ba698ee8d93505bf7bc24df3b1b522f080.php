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
        $__internal_a0c501f4f6bb61044cb0fae04d5066249c8d4f43276f2680a94a022ce2be24c6 = $this->env->getExtension("native_profiler");
        $__internal_a0c501f4f6bb61044cb0fae04d5066249c8d4f43276f2680a94a022ce2be24c6->enter($__internal_a0c501f4f6bb61044cb0fae04d5066249c8d4f43276f2680a94a022ce2be24c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Member:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0c501f4f6bb61044cb0fae04d5066249c8d4f43276f2680a94a022ce2be24c6->leave($__internal_a0c501f4f6bb61044cb0fae04d5066249c8d4f43276f2680a94a022ce2be24c6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fdcfa276c8e917d39fa16512cf7ae254bd3e0f89c3c736960c31de9f2b95708 = $this->env->getExtension("native_profiler");
        $__internal_0fdcfa276c8e917d39fa16512cf7ae254bd3e0f89c3c736960c31de9f2b95708->enter($__internal_0fdcfa276c8e917d39fa16512cf7ae254bd3e0f89c3c736960c31de9f2b95708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_0fdcfa276c8e917d39fa16512cf7ae254bd3e0f89c3c736960c31de9f2b95708->leave($__internal_0fdcfa276c8e917d39fa16512cf7ae254bd3e0f89c3c736960c31de9f2b95708_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_591b67187a31d2c52785953860af84aaddded797e4c2d7af697e49a30e8130d1 = $this->env->getExtension("native_profiler");
        $__internal_591b67187a31d2c52785953860af84aaddded797e4c2d7af697e49a30e8130d1->enter($__internal_591b67187a31d2c52785953860af84aaddded797e4c2d7af697e49a30e8130d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_591b67187a31d2c52785953860af84aaddded797e4c2d7af697e49a30e8130d1->leave($__internal_591b67187a31d2c52785953860af84aaddded797e4c2d7af697e49a30e8130d1_prof);

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
