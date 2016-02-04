<?php

/* UniAdminBundle:Process:new.html.twig */
class __TwigTemplate_7692ebe79c47a116c4d5db942e61a8be19d841fb8d72f83ef6a2a5d0869d5e14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Process:new.html.twig", 1);
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
        $__internal_68f3051e3dde8c794c06c5d82457833878b26059505b7592a654d93a804bd42b = $this->env->getExtension("native_profiler");
        $__internal_68f3051e3dde8c794c06c5d82457833878b26059505b7592a654d93a804bd42b->enter($__internal_68f3051e3dde8c794c06c5d82457833878b26059505b7592a654d93a804bd42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Process:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68f3051e3dde8c794c06c5d82457833878b26059505b7592a654d93a804bd42b->leave($__internal_68f3051e3dde8c794c06c5d82457833878b26059505b7592a654d93a804bd42b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_402d471b5aa4444e9c633a099c718c6dc4bfdd8832ba4e5ee7f08d3897068c57 = $this->env->getExtension("native_profiler");
        $__internal_402d471b5aa4444e9c633a099c718c6dc4bfdd8832ba4e5ee7f08d3897068c57->enter($__internal_402d471b5aa4444e9c633a099c718c6dc4bfdd8832ba4e5ee7f08d3897068c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_402d471b5aa4444e9c633a099c718c6dc4bfdd8832ba4e5ee7f08d3897068c57->leave($__internal_402d471b5aa4444e9c633a099c718c6dc4bfdd8832ba4e5ee7f08d3897068c57_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_713dbe11f32c326d0af7f460b94420c99dc6a1868de4d4aed5c58ea5969e97f8 = $this->env->getExtension("native_profiler");
        $__internal_713dbe11f32c326d0af7f460b94420c99dc6a1868de4d4aed5c58ea5969e97f8->enter($__internal_713dbe11f32c326d0af7f460b94420c99dc6a1868de4d4aed5c58ea5969e97f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_713dbe11f32c326d0af7f460b94420c99dc6a1868de4d4aed5c58ea5969e97f8->leave($__internal_713dbe11f32c326d0af7f460b94420c99dc6a1868de4d4aed5c58ea5969e97f8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_aaaab9e2f7c9eb6ec60ccb2ce53e16fbae4dd736e8d6fd5ba87ddc6faf52f0ce = $this->env->getExtension("native_profiler");
        $__internal_aaaab9e2f7c9eb6ec60ccb2ce53e16fbae4dd736e8d6fd5ba87ddc6faf52f0ce->enter($__internal_aaaab9e2f7c9eb6ec60ccb2ce53e16fbae4dd736e8d6fd5ba87ddc6faf52f0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Process:new.html.twig", 11)->display($context);
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
        
        $__internal_aaaab9e2f7c9eb6ec60ccb2ce53e16fbae4dd736e8d6fd5ba87ddc6faf52f0ce->leave($__internal_aaaab9e2f7c9eb6ec60ccb2ce53e16fbae4dd736e8d6fd5ba87ddc6faf52f0ce_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Process:new.html.twig";
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
