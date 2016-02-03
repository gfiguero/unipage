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
        $__internal_d6aa39a6adeaa7e6d8aeccfa7466e580b3afdab90edc2681e4ea9ebbde9f5f2f = $this->env->getExtension("native_profiler");
        $__internal_d6aa39a6adeaa7e6d8aeccfa7466e580b3afdab90edc2681e4ea9ebbde9f5f2f->enter($__internal_d6aa39a6adeaa7e6d8aeccfa7466e580b3afdab90edc2681e4ea9ebbde9f5f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Report:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6aa39a6adeaa7e6d8aeccfa7466e580b3afdab90edc2681e4ea9ebbde9f5f2f->leave($__internal_d6aa39a6adeaa7e6d8aeccfa7466e580b3afdab90edc2681e4ea9ebbde9f5f2f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_344d8a798cc7278867d6606d4edf0ff139fe50ae371d76920e01741198480155 = $this->env->getExtension("native_profiler");
        $__internal_344d8a798cc7278867d6606d4edf0ff139fe50ae371d76920e01741198480155->enter($__internal_344d8a798cc7278867d6606d4edf0ff139fe50ae371d76920e01741198480155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_344d8a798cc7278867d6606d4edf0ff139fe50ae371d76920e01741198480155->leave($__internal_344d8a798cc7278867d6606d4edf0ff139fe50ae371d76920e01741198480155_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_d92b88e233447cd4decad8848b7ee9382d2f6bbafc4789097c1b6c004bcc9fd5 = $this->env->getExtension("native_profiler");
        $__internal_d92b88e233447cd4decad8848b7ee9382d2f6bbafc4789097c1b6c004bcc9fd5->enter($__internal_d92b88e233447cd4decad8848b7ee9382d2f6bbafc4789097c1b6c004bcc9fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_d92b88e233447cd4decad8848b7ee9382d2f6bbafc4789097c1b6c004bcc9fd5->leave($__internal_d92b88e233447cd4decad8848b7ee9382d2f6bbafc4789097c1b6c004bcc9fd5_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cfc5ca92ce078397db03f18a375047beba8c3581a8ae1337ee745a6592b994a = $this->env->getExtension("native_profiler");
        $__internal_4cfc5ca92ce078397db03f18a375047beba8c3581a8ae1337ee745a6592b994a->enter($__internal_4cfc5ca92ce078397db03f18a375047beba8c3581a8ae1337ee745a6592b994a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4cfc5ca92ce078397db03f18a375047beba8c3581a8ae1337ee745a6592b994a->leave($__internal_4cfc5ca92ce078397db03f18a375047beba8c3581a8ae1337ee745a6592b994a_prof);

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
