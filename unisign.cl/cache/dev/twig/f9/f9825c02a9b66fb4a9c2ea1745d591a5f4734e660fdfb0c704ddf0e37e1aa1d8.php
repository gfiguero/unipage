<?php

/* UniAdminBundle:Camera:edit.html.twig */
class __TwigTemplate_a16299a3e7567c50fc3ec3ad7f09579aa28a32c12baaf3bbe1d3a103cfeccd8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Camera:edit.html.twig", 1);
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
        $__internal_0c31130574977d8988b520e9f55a648de52c98855f0c83d99cca4fbaf312f20c = $this->env->getExtension("native_profiler");
        $__internal_0c31130574977d8988b520e9f55a648de52c98855f0c83d99cca4fbaf312f20c->enter($__internal_0c31130574977d8988b520e9f55a648de52c98855f0c83d99cca4fbaf312f20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Camera:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c31130574977d8988b520e9f55a648de52c98855f0c83d99cca4fbaf312f20c->leave($__internal_0c31130574977d8988b520e9f55a648de52c98855f0c83d99cca4fbaf312f20c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_78a13ebbe8c470c1e9d8ca3ccdbfe8f0b104232ee0fa950f5aaddb9a8e2815f6 = $this->env->getExtension("native_profiler");
        $__internal_78a13ebbe8c470c1e9d8ca3ccdbfe8f0b104232ee0fa950f5aaddb9a8e2815f6->enter($__internal_78a13ebbe8c470c1e9d8ca3ccdbfe8f0b104232ee0fa950f5aaddb9a8e2815f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_78a13ebbe8c470c1e9d8ca3ccdbfe8f0b104232ee0fa950f5aaddb9a8e2815f6->leave($__internal_78a13ebbe8c470c1e9d8ca3ccdbfe8f0b104232ee0fa950f5aaddb9a8e2815f6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_022432d7c3b2d10dc8555c2bb57febac908132ae2e5487e0fe62829a3e07de53 = $this->env->getExtension("native_profiler");
        $__internal_022432d7c3b2d10dc8555c2bb57febac908132ae2e5487e0fe62829a3e07de53->enter($__internal_022432d7c3b2d10dc8555c2bb57febac908132ae2e5487e0fe62829a3e07de53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Camera:edit.html.twig", 9)->display($context);
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
        
        $__internal_022432d7c3b2d10dc8555c2bb57febac908132ae2e5487e0fe62829a3e07de53->leave($__internal_022432d7c3b2d10dc8555c2bb57febac908132ae2e5487e0fe62829a3e07de53_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Camera:edit.html.twig";
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
