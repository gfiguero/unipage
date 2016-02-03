<?php

/* UniAdminBundle:History:new.html.twig */
class __TwigTemplate_ecba1611c6d9e238c0d7e9deae98e8d281984312ac58e9c52708da229f88184f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:History:new.html.twig", 1);
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
        $__internal_b31aa27204f5c462ea002838abd860617d4debc5be47b54a8fbd0328babf0022 = $this->env->getExtension("native_profiler");
        $__internal_b31aa27204f5c462ea002838abd860617d4debc5be47b54a8fbd0328babf0022->enter($__internal_b31aa27204f5c462ea002838abd860617d4debc5be47b54a8fbd0328babf0022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:History:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b31aa27204f5c462ea002838abd860617d4debc5be47b54a8fbd0328babf0022->leave($__internal_b31aa27204f5c462ea002838abd860617d4debc5be47b54a8fbd0328babf0022_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f0f078647a7613bc10ff4abb5019dd20dbe9a629cbf9b5c0bcff7a08690cef9 = $this->env->getExtension("native_profiler");
        $__internal_7f0f078647a7613bc10ff4abb5019dd20dbe9a629cbf9b5c0bcff7a08690cef9->enter($__internal_7f0f078647a7613bc10ff4abb5019dd20dbe9a629cbf9b5c0bcff7a08690cef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_7f0f078647a7613bc10ff4abb5019dd20dbe9a629cbf9b5c0bcff7a08690cef9->leave($__internal_7f0f078647a7613bc10ff4abb5019dd20dbe9a629cbf9b5c0bcff7a08690cef9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e2110cf84de92fae08b38b93657a044da5e1692fd3a5bf9587dcece2448fc99 = $this->env->getExtension("native_profiler");
        $__internal_6e2110cf84de92fae08b38b93657a044da5e1692fd3a5bf9587dcece2448fc99->enter($__internal_6e2110cf84de92fae08b38b93657a044da5e1692fd3a5bf9587dcece2448fc99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:History:new.html.twig", 9)->display($context);
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
        
        $__internal_6e2110cf84de92fae08b38b93657a044da5e1692fd3a5bf9587dcece2448fc99->leave($__internal_6e2110cf84de92fae08b38b93657a044da5e1692fd3a5bf9587dcece2448fc99_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:History:new.html.twig";
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
