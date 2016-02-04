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
        $__internal_b5283ffdaab8861d1ab7f6abfb0b3422103a4c636a77e86fcfe7a46a142e11f3 = $this->env->getExtension("native_profiler");
        $__internal_b5283ffdaab8861d1ab7f6abfb0b3422103a4c636a77e86fcfe7a46a142e11f3->enter($__internal_b5283ffdaab8861d1ab7f6abfb0b3422103a4c636a77e86fcfe7a46a142e11f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Service:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5283ffdaab8861d1ab7f6abfb0b3422103a4c636a77e86fcfe7a46a142e11f3->leave($__internal_b5283ffdaab8861d1ab7f6abfb0b3422103a4c636a77e86fcfe7a46a142e11f3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_44d650c1417edd96291c49d69710535a6d49956a24bb35826f52c055d1fff51d = $this->env->getExtension("native_profiler");
        $__internal_44d650c1417edd96291c49d69710535a6d49956a24bb35826f52c055d1fff51d->enter($__internal_44d650c1417edd96291c49d69710535a6d49956a24bb35826f52c055d1fff51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_44d650c1417edd96291c49d69710535a6d49956a24bb35826f52c055d1fff51d->leave($__internal_44d650c1417edd96291c49d69710535a6d49956a24bb35826f52c055d1fff51d_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_6b3188a0b621371e5aba11847839e3221b72abba132cf373b4dd7ae7c15b5f97 = $this->env->getExtension("native_profiler");
        $__internal_6b3188a0b621371e5aba11847839e3221b72abba132cf373b4dd7ae7c15b5f97->enter($__internal_6b3188a0b621371e5aba11847839e3221b72abba132cf373b4dd7ae7c15b5f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_6b3188a0b621371e5aba11847839e3221b72abba132cf373b4dd7ae7c15b5f97->leave($__internal_6b3188a0b621371e5aba11847839e3221b72abba132cf373b4dd7ae7c15b5f97_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1eea32702c58e15937a1fd0de1dde3d12e9cf6a0bda47e2a6fdf975b41fc15e = $this->env->getExtension("native_profiler");
        $__internal_f1eea32702c58e15937a1fd0de1dde3d12e9cf6a0bda47e2a6fdf975b41fc15e->enter($__internal_f1eea32702c58e15937a1fd0de1dde3d12e9cf6a0bda47e2a6fdf975b41fc15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f1eea32702c58e15937a1fd0de1dde3d12e9cf6a0bda47e2a6fdf975b41fc15e->leave($__internal_f1eea32702c58e15937a1fd0de1dde3d12e9cf6a0bda47e2a6fdf975b41fc15e_prof);

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
