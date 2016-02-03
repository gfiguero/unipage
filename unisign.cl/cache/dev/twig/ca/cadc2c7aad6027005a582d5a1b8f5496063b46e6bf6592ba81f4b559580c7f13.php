<?php

/* UniAdminBundle:Report:edit.html.twig */
class __TwigTemplate_b33c9e88c038596eb2543b038f5e3506b5cdd3a671574a3b9a31c95262cfbd08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Report:edit.html.twig", 1);
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
        $__internal_7f69190a53e8bc851f47260d15ee47972c458deec8226f1a151b0efed11cf336 = $this->env->getExtension("native_profiler");
        $__internal_7f69190a53e8bc851f47260d15ee47972c458deec8226f1a151b0efed11cf336->enter($__internal_7f69190a53e8bc851f47260d15ee47972c458deec8226f1a151b0efed11cf336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Report:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f69190a53e8bc851f47260d15ee47972c458deec8226f1a151b0efed11cf336->leave($__internal_7f69190a53e8bc851f47260d15ee47972c458deec8226f1a151b0efed11cf336_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7cf5e35a40c0e040feea318ea022a43d8d8bff5e4875162d06ca8aed591c1e4 = $this->env->getExtension("native_profiler");
        $__internal_c7cf5e35a40c0e040feea318ea022a43d8d8bff5e4875162d06ca8aed591c1e4->enter($__internal_c7cf5e35a40c0e040feea318ea022a43d8d8bff5e4875162d06ca8aed591c1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_c7cf5e35a40c0e040feea318ea022a43d8d8bff5e4875162d06ca8aed591c1e4->leave($__internal_c7cf5e35a40c0e040feea318ea022a43d8d8bff5e4875162d06ca8aed591c1e4_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_cc4b24e0e13f5880f5ef8098ba9bd4635b4d665badd0752fcd07dd505eada3ac = $this->env->getExtension("native_profiler");
        $__internal_cc4b24e0e13f5880f5ef8098ba9bd4635b4d665badd0752fcd07dd505eada3ac->enter($__internal_cc4b24e0e13f5880f5ef8098ba9bd4635b4d665badd0752fcd07dd505eada3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_cc4b24e0e13f5880f5ef8098ba9bd4635b4d665badd0752fcd07dd505eada3ac->leave($__internal_cc4b24e0e13f5880f5ef8098ba9bd4635b4d665badd0752fcd07dd505eada3ac_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_011bd0b1fa140ed293956c82a7f390bbe42fa20d678294cef9e661a5da0736c3 = $this->env->getExtension("native_profiler");
        $__internal_011bd0b1fa140ed293956c82a7f390bbe42fa20d678294cef9e661a5da0736c3->enter($__internal_011bd0b1fa140ed293956c82a7f390bbe42fa20d678294cef9e661a5da0736c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Report:edit.html.twig", 11)->display($context);
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
        // line 20
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
        
        $__internal_011bd0b1fa140ed293956c82a7f390bbe42fa20d678294cef9e661a5da0736c3->leave($__internal_011bd0b1fa140ed293956c82a7f390bbe42fa20d678294cef9e661a5da0736c3_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Report:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 20,  71 => 11,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
