<?php

/* UniAdminBundle:Service:edit.html.twig */
class __TwigTemplate_6699c58bb6729977750eed3d1078e33de0df3b0b12a8a3860960f70e9c4175e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Service:edit.html.twig", 1);
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
        $__internal_7a116e53794b046557136c8b18654f8359c500ba807fb0c8d998010f4b641f0d = $this->env->getExtension("native_profiler");
        $__internal_7a116e53794b046557136c8b18654f8359c500ba807fb0c8d998010f4b641f0d->enter($__internal_7a116e53794b046557136c8b18654f8359c500ba807fb0c8d998010f4b641f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Service:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a116e53794b046557136c8b18654f8359c500ba807fb0c8d998010f4b641f0d->leave($__internal_7a116e53794b046557136c8b18654f8359c500ba807fb0c8d998010f4b641f0d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4557f90059245d61f28310d37e16d27f099fe8e6e89dc1dffe090becc16bf4c = $this->env->getExtension("native_profiler");
        $__internal_a4557f90059245d61f28310d37e16d27f099fe8e6e89dc1dffe090becc16bf4c->enter($__internal_a4557f90059245d61f28310d37e16d27f099fe8e6e89dc1dffe090becc16bf4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_a4557f90059245d61f28310d37e16d27f099fe8e6e89dc1dffe090becc16bf4c->leave($__internal_a4557f90059245d61f28310d37e16d27f099fe8e6e89dc1dffe090becc16bf4c_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_73bbfa383a3c8d5aaef9b410d6d6dfefc2d17752f2eddc5e7ae2b6e6c1cf3a0a = $this->env->getExtension("native_profiler");
        $__internal_73bbfa383a3c8d5aaef9b410d6d6dfefc2d17752f2eddc5e7ae2b6e6c1cf3a0a->enter($__internal_73bbfa383a3c8d5aaef9b410d6d6dfefc2d17752f2eddc5e7ae2b6e6c1cf3a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_73bbfa383a3c8d5aaef9b410d6d6dfefc2d17752f2eddc5e7ae2b6e6c1cf3a0a->leave($__internal_73bbfa383a3c8d5aaef9b410d6d6dfefc2d17752f2eddc5e7ae2b6e6c1cf3a0a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_08d6938f3f1f15a707fd8c9d1ce7abe863fe12114321adda28666151bed08cd5 = $this->env->getExtension("native_profiler");
        $__internal_08d6938f3f1f15a707fd8c9d1ce7abe863fe12114321adda28666151bed08cd5->enter($__internal_08d6938f3f1f15a707fd8c9d1ce7abe863fe12114321adda28666151bed08cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Service:edit.html.twig", 11)->display($context);
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
        
        $__internal_08d6938f3f1f15a707fd8c9d1ce7abe863fe12114321adda28666151bed08cd5->leave($__internal_08d6938f3f1f15a707fd8c9d1ce7abe863fe12114321adda28666151bed08cd5_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Service:edit.html.twig";
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
