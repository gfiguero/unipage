<?php

/* UniAdminBundle:Report:new.html.twig */
class __TwigTemplate_3670048da38d6ee0b8309c038588b3e60932fff68629f97f7dd6686b72e1841c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Report:new.html.twig", 1);
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
        $__internal_f1c4e4cc83b4849016adb11b192cccef6094282f6eb89fdd2f5e37db13df9ec1 = $this->env->getExtension("native_profiler");
        $__internal_f1c4e4cc83b4849016adb11b192cccef6094282f6eb89fdd2f5e37db13df9ec1->enter($__internal_f1c4e4cc83b4849016adb11b192cccef6094282f6eb89fdd2f5e37db13df9ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Report:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1c4e4cc83b4849016adb11b192cccef6094282f6eb89fdd2f5e37db13df9ec1->leave($__internal_f1c4e4cc83b4849016adb11b192cccef6094282f6eb89fdd2f5e37db13df9ec1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_82d1a2145cc188c30c1a78983df24fdd569bb37355c922dc9c0d864ef3be505e = $this->env->getExtension("native_profiler");
        $__internal_82d1a2145cc188c30c1a78983df24fdd569bb37355c922dc9c0d864ef3be505e->enter($__internal_82d1a2145cc188c30c1a78983df24fdd569bb37355c922dc9c0d864ef3be505e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_82d1a2145cc188c30c1a78983df24fdd569bb37355c922dc9c0d864ef3be505e->leave($__internal_82d1a2145cc188c30c1a78983df24fdd569bb37355c922dc9c0d864ef3be505e_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_56979e4c9aaab762a3bf3d01196de3dd5022bfc86f9049810a4331259784a667 = $this->env->getExtension("native_profiler");
        $__internal_56979e4c9aaab762a3bf3d01196de3dd5022bfc86f9049810a4331259784a667->enter($__internal_56979e4c9aaab762a3bf3d01196de3dd5022bfc86f9049810a4331259784a667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_56979e4c9aaab762a3bf3d01196de3dd5022bfc86f9049810a4331259784a667->leave($__internal_56979e4c9aaab762a3bf3d01196de3dd5022bfc86f9049810a4331259784a667_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_017ef79c081d6e42b0c09b5efab153fcf1ef752d4a68169fd47b569cb0bb9bce = $this->env->getExtension("native_profiler");
        $__internal_017ef79c081d6e42b0c09b5efab153fcf1ef752d4a68169fd47b569cb0bb9bce->enter($__internal_017ef79c081d6e42b0c09b5efab153fcf1ef752d4a68169fd47b569cb0bb9bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Report:new.html.twig", 11)->display($context);
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
        
        $__internal_017ef79c081d6e42b0c09b5efab153fcf1ef752d4a68169fd47b569cb0bb9bce->leave($__internal_017ef79c081d6e42b0c09b5efab153fcf1ef752d4a68169fd47b569cb0bb9bce_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Report:new.html.twig";
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
