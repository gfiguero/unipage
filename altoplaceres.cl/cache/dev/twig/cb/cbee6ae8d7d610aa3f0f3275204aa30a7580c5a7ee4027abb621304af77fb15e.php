<?php

/* UniAdminBundle:MemberCourse:edit.html.twig */
class __TwigTemplate_68a7b1fd82052e17e9b6652e870daccb13629dc5188ef6ec78a9f05c10576fb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:MemberCourse:edit.html.twig", 1);
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
        $__internal_386955891bd4c4abde1acb9e1c51ded906e17623c5bf8ea652ba5ecbfca0183c = $this->env->getExtension("native_profiler");
        $__internal_386955891bd4c4abde1acb9e1c51ded906e17623c5bf8ea652ba5ecbfca0183c->enter($__internal_386955891bd4c4abde1acb9e1c51ded906e17623c5bf8ea652ba5ecbfca0183c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:MemberCourse:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_386955891bd4c4abde1acb9e1c51ded906e17623c5bf8ea652ba5ecbfca0183c->leave($__internal_386955891bd4c4abde1acb9e1c51ded906e17623c5bf8ea652ba5ecbfca0183c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_af731d39215adebf2933213da133215418a8c99b6d8c8fd24c233e184739b5fb = $this->env->getExtension("native_profiler");
        $__internal_af731d39215adebf2933213da133215418a8c99b6d8c8fd24c233e184739b5fb->enter($__internal_af731d39215adebf2933213da133215418a8c99b6d8c8fd24c233e184739b5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_af731d39215adebf2933213da133215418a8c99b6d8c8fd24c233e184739b5fb->leave($__internal_af731d39215adebf2933213da133215418a8c99b6d8c8fd24c233e184739b5fb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1f9a471cacba35d8e190ce67f6780e9b58069aa17f835853118fb77935fed03 = $this->env->getExtension("native_profiler");
        $__internal_f1f9a471cacba35d8e190ce67f6780e9b58069aa17f835853118fb77935fed03->enter($__internal_f1f9a471cacba35d8e190ce67f6780e9b58069aa17f835853118fb77935fed03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:MemberCourse:edit.html.twig", 9)->display($context);
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
        
        $__internal_f1f9a471cacba35d8e190ce67f6780e9b58069aa17f835853118fb77935fed03->leave($__internal_f1f9a471cacba35d8e190ce67f6780e9b58069aa17f835853118fb77935fed03_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:MemberCourse:edit.html.twig";
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
