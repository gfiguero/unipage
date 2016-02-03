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
        $__internal_4b10c698a7790e88eb29d09c97843efd9a7dc8f0961d32651dad57bc44621941 = $this->env->getExtension("native_profiler");
        $__internal_4b10c698a7790e88eb29d09c97843efd9a7dc8f0961d32651dad57bc44621941->enter($__internal_4b10c698a7790e88eb29d09c97843efd9a7dc8f0961d32651dad57bc44621941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Notice:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b10c698a7790e88eb29d09c97843efd9a7dc8f0961d32651dad57bc44621941->leave($__internal_4b10c698a7790e88eb29d09c97843efd9a7dc8f0961d32651dad57bc44621941_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8f440f9b58303765a82cef69dd7c5302b82e76da77ddb4ddef3d0394e20778b = $this->env->getExtension("native_profiler");
        $__internal_f8f440f9b58303765a82cef69dd7c5302b82e76da77ddb4ddef3d0394e20778b->enter($__internal_f8f440f9b58303765a82cef69dd7c5302b82e76da77ddb4ddef3d0394e20778b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_f8f440f9b58303765a82cef69dd7c5302b82e76da77ddb4ddef3d0394e20778b->leave($__internal_f8f440f9b58303765a82cef69dd7c5302b82e76da77ddb4ddef3d0394e20778b_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_d28bc0a32d8143bb67fc3a21f3c2cd8cd51ba1c3f892096f47316b86dd95a209 = $this->env->getExtension("native_profiler");
        $__internal_d28bc0a32d8143bb67fc3a21f3c2cd8cd51ba1c3f892096f47316b86dd95a209->enter($__internal_d28bc0a32d8143bb67fc3a21f3c2cd8cd51ba1c3f892096f47316b86dd95a209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_d28bc0a32d8143bb67fc3a21f3c2cd8cd51ba1c3f892096f47316b86dd95a209->leave($__internal_d28bc0a32d8143bb67fc3a21f3c2cd8cd51ba1c3f892096f47316b86dd95a209_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0965254e9d8bd785055b27ddadefca387d2544fa14d318e72e052d2ed63c6dc4 = $this->env->getExtension("native_profiler");
        $__internal_0965254e9d8bd785055b27ddadefca387d2544fa14d318e72e052d2ed63c6dc4->enter($__internal_0965254e9d8bd785055b27ddadefca387d2544fa14d318e72e052d2ed63c6dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0965254e9d8bd785055b27ddadefca387d2544fa14d318e72e052d2ed63c6dc4->leave($__internal_0965254e9d8bd785055b27ddadefca387d2544fa14d318e72e052d2ed63c6dc4_prof);

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
