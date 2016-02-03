<?php

/* UniAdminBundle:Notice:new.html.twig */
class __TwigTemplate_92aec3fb5ed06f7ea2d8b856f06600ce74836607b2c30f8e2a673233db439a3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Notice:new.html.twig", 1);
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
        $__internal_fc957025bb727acacf256ef0814e45048f23f976e3b12cc9835e0739a6c655f4 = $this->env->getExtension("native_profiler");
        $__internal_fc957025bb727acacf256ef0814e45048f23f976e3b12cc9835e0739a6c655f4->enter($__internal_fc957025bb727acacf256ef0814e45048f23f976e3b12cc9835e0739a6c655f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Notice:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc957025bb727acacf256ef0814e45048f23f976e3b12cc9835e0739a6c655f4->leave($__internal_fc957025bb727acacf256ef0814e45048f23f976e3b12cc9835e0739a6c655f4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd5fda5903f10dd6936c9afd09c08e7a0dd855506995f641f5ebf4ef55068a6e = $this->env->getExtension("native_profiler");
        $__internal_dd5fda5903f10dd6936c9afd09c08e7a0dd855506995f641f5ebf4ef55068a6e->enter($__internal_dd5fda5903f10dd6936c9afd09c08e7a0dd855506995f641f5ebf4ef55068a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_dd5fda5903f10dd6936c9afd09c08e7a0dd855506995f641f5ebf4ef55068a6e->leave($__internal_dd5fda5903f10dd6936c9afd09c08e7a0dd855506995f641f5ebf4ef55068a6e_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_6af2a1f5f281927866562bb8443cff8e5cfe360a4c0d2f358b4ab3c6a812a12c = $this->env->getExtension("native_profiler");
        $__internal_6af2a1f5f281927866562bb8443cff8e5cfe360a4c0d2f358b4ab3c6a812a12c->enter($__internal_6af2a1f5f281927866562bb8443cff8e5cfe360a4c0d2f358b4ab3c6a812a12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_6af2a1f5f281927866562bb8443cff8e5cfe360a4c0d2f358b4ab3c6a812a12c->leave($__internal_6af2a1f5f281927866562bb8443cff8e5cfe360a4c0d2f358b4ab3c6a812a12c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8f393196f1ee9f1e39b4f2228f0aa5d0ed7e51076937f63363e8eb66809200a = $this->env->getExtension("native_profiler");
        $__internal_c8f393196f1ee9f1e39b4f2228f0aa5d0ed7e51076937f63363e8eb66809200a->enter($__internal_c8f393196f1ee9f1e39b4f2228f0aa5d0ed7e51076937f63363e8eb66809200a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Notice:new.html.twig", 11)->display($context);
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
        // line 20
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
        
        $__internal_c8f393196f1ee9f1e39b4f2228f0aa5d0ed7e51076937f63363e8eb66809200a->leave($__internal_c8f393196f1ee9f1e39b4f2228f0aa5d0ed7e51076937f63363e8eb66809200a_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Notice:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  71 => 11,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
