<?php

/* UniAdminBundle:Link:edit.html.twig */
class __TwigTemplate_1a433084c5c9e3885f917dfe8b4420fda5d48fb4bb5d47d19ecf21c4561828be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Link:edit.html.twig", 1);
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
        $__internal_18866d7827c64debfb0339b513f6553651ce8934f566415404058a7669e8f639 = $this->env->getExtension("native_profiler");
        $__internal_18866d7827c64debfb0339b513f6553651ce8934f566415404058a7669e8f639->enter($__internal_18866d7827c64debfb0339b513f6553651ce8934f566415404058a7669e8f639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Link:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18866d7827c64debfb0339b513f6553651ce8934f566415404058a7669e8f639->leave($__internal_18866d7827c64debfb0339b513f6553651ce8934f566415404058a7669e8f639_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_657221f3b940ffff940cb93a343c420169af533206a4a5b69686966ee1233bf0 = $this->env->getExtension("native_profiler");
        $__internal_657221f3b940ffff940cb93a343c420169af533206a4a5b69686966ee1233bf0->enter($__internal_657221f3b940ffff940cb93a343c420169af533206a4a5b69686966ee1233bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_657221f3b940ffff940cb93a343c420169af533206a4a5b69686966ee1233bf0->leave($__internal_657221f3b940ffff940cb93a343c420169af533206a4a5b69686966ee1233bf0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_51b92b2e7221372b77d1d3e24cdf2a09044b0caeb02724dea731d1e3ff3493c6 = $this->env->getExtension("native_profiler");
        $__internal_51b92b2e7221372b77d1d3e24cdf2a09044b0caeb02724dea731d1e3ff3493c6->enter($__internal_51b92b2e7221372b77d1d3e24cdf2a09044b0caeb02724dea731d1e3ff3493c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Link:edit.html.twig", 9)->display($context);
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
        
        $__internal_51b92b2e7221372b77d1d3e24cdf2a09044b0caeb02724dea731d1e3ff3493c6->leave($__internal_51b92b2e7221372b77d1d3e24cdf2a09044b0caeb02724dea731d1e3ff3493c6_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Link:edit.html.twig";
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
