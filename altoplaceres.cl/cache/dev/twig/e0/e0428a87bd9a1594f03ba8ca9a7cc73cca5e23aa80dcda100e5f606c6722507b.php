<?php

/* UniAdminBundle:ProductCategory:edit.html.twig */
class __TwigTemplate_6480d459a3c24640338af53dd0e96628d933a3c3534663cff903c60a76d5158b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:ProductCategory:edit.html.twig", 1);
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
        $__internal_31cc84775ffcbce773ab09984b646c94e902067152425bce73f6ae7dcd057342 = $this->env->getExtension("native_profiler");
        $__internal_31cc84775ffcbce773ab09984b646c94e902067152425bce73f6ae7dcd057342->enter($__internal_31cc84775ffcbce773ab09984b646c94e902067152425bce73f6ae7dcd057342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:ProductCategory:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31cc84775ffcbce773ab09984b646c94e902067152425bce73f6ae7dcd057342->leave($__internal_31cc84775ffcbce773ab09984b646c94e902067152425bce73f6ae7dcd057342_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6da768602bb706af584470c03adad978470816cd0bb7c332a426c5b0a9ccdab = $this->env->getExtension("native_profiler");
        $__internal_d6da768602bb706af584470c03adad978470816cd0bb7c332a426c5b0a9ccdab->enter($__internal_d6da768602bb706af584470c03adad978470816cd0bb7c332a426c5b0a9ccdab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_d6da768602bb706af584470c03adad978470816cd0bb7c332a426c5b0a9ccdab->leave($__internal_d6da768602bb706af584470c03adad978470816cd0bb7c332a426c5b0a9ccdab_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba0ea9fa9fc2cca5487986bef9a2ecc0eb5fa9987e321339801764c424439d0e = $this->env->getExtension("native_profiler");
        $__internal_ba0ea9fa9fc2cca5487986bef9a2ecc0eb5fa9987e321339801764c424439d0e->enter($__internal_ba0ea9fa9fc2cca5487986bef9a2ecc0eb5fa9987e321339801764c424439d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:ProductCategory:edit.html.twig", 9)->display($context);
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
        // line 18
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
        
        $__internal_ba0ea9fa9fc2cca5487986bef9a2ecc0eb5fa9987e321339801764c424439d0e->leave($__internal_ba0ea9fa9fc2cca5487986bef9a2ecc0eb5fa9987e321339801764c424439d0e_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:ProductCategory:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
