<?php

/* UniAdminBundle:Service:new.html.twig */
class __TwigTemplate_8e8751f1a911375e9f233d3fe499ea84f5411352b2d3bc700b7639aea99468ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Service:new.html.twig", 1);
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
        $__internal_e294d15f25edba4d4b99871bea4add54060b576ca0b50cdcfecbfbf152a80fee = $this->env->getExtension("native_profiler");
        $__internal_e294d15f25edba4d4b99871bea4add54060b576ca0b50cdcfecbfbf152a80fee->enter($__internal_e294d15f25edba4d4b99871bea4add54060b576ca0b50cdcfecbfbf152a80fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Service:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e294d15f25edba4d4b99871bea4add54060b576ca0b50cdcfecbfbf152a80fee->leave($__internal_e294d15f25edba4d4b99871bea4add54060b576ca0b50cdcfecbfbf152a80fee_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e69eec1e31bfdd63786e357970e1cee657930772c2917f179e55bcd8cd530e5b = $this->env->getExtension("native_profiler");
        $__internal_e69eec1e31bfdd63786e357970e1cee657930772c2917f179e55bcd8cd530e5b->enter($__internal_e69eec1e31bfdd63786e357970e1cee657930772c2917f179e55bcd8cd530e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_e69eec1e31bfdd63786e357970e1cee657930772c2917f179e55bcd8cd530e5b->leave($__internal_e69eec1e31bfdd63786e357970e1cee657930772c2917f179e55bcd8cd530e5b_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_3443cbe9f7463c43e52c58ff97440f7322a9e27afd93bc9072eff1d3d483e1d0 = $this->env->getExtension("native_profiler");
        $__internal_3443cbe9f7463c43e52c58ff97440f7322a9e27afd93bc9072eff1d3d483e1d0->enter($__internal_3443cbe9f7463c43e52c58ff97440f7322a9e27afd93bc9072eff1d3d483e1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_3443cbe9f7463c43e52c58ff97440f7322a9e27afd93bc9072eff1d3d483e1d0->leave($__internal_3443cbe9f7463c43e52c58ff97440f7322a9e27afd93bc9072eff1d3d483e1d0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_81a80bb0a9827e6fac84b54e69bea5f134e0862c9f7016827a6c99ba9626ead2 = $this->env->getExtension("native_profiler");
        $__internal_81a80bb0a9827e6fac84b54e69bea5f134e0862c9f7016827a6c99ba9626ead2->enter($__internal_81a80bb0a9827e6fac84b54e69bea5f134e0862c9f7016827a6c99ba9626ead2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Service:new.html.twig", 11)->display($context);
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
        
        $__internal_81a80bb0a9827e6fac84b54e69bea5f134e0862c9f7016827a6c99ba9626ead2->leave($__internal_81a80bb0a9827e6fac84b54e69bea5f134e0862c9f7016827a6c99ba9626ead2_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Service:new.html.twig";
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
