<?php

/* UniAdminBundle:MemberRole:edit.html.twig */
class __TwigTemplate_2fb72f6a511eb8218bd0e99ec29755e300855196fe6e878cb24595837d5801ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:MemberRole:edit.html.twig", 1);
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
        $__internal_ad1d0266743a97f4160555243ac6b398cda9c3259a7b8d9c4b62bca86a9a25f6 = $this->env->getExtension("native_profiler");
        $__internal_ad1d0266743a97f4160555243ac6b398cda9c3259a7b8d9c4b62bca86a9a25f6->enter($__internal_ad1d0266743a97f4160555243ac6b398cda9c3259a7b8d9c4b62bca86a9a25f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:MemberRole:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad1d0266743a97f4160555243ac6b398cda9c3259a7b8d9c4b62bca86a9a25f6->leave($__internal_ad1d0266743a97f4160555243ac6b398cda9c3259a7b8d9c4b62bca86a9a25f6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4bb88fb3eb10c73b55dcea50201f5011ec18f20f86aeb859538878c2e501f910 = $this->env->getExtension("native_profiler");
        $__internal_4bb88fb3eb10c73b55dcea50201f5011ec18f20f86aeb859538878c2e501f910->enter($__internal_4bb88fb3eb10c73b55dcea50201f5011ec18f20f86aeb859538878c2e501f910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_4bb88fb3eb10c73b55dcea50201f5011ec18f20f86aeb859538878c2e501f910->leave($__internal_4bb88fb3eb10c73b55dcea50201f5011ec18f20f86aeb859538878c2e501f910_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_484f0fc001b7d9eda305c140cb8484ec8004f9ab3ca8114d988eb45095142998 = $this->env->getExtension("native_profiler");
        $__internal_484f0fc001b7d9eda305c140cb8484ec8004f9ab3ca8114d988eb45095142998->enter($__internal_484f0fc001b7d9eda305c140cb8484ec8004f9ab3ca8114d988eb45095142998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:MemberRole:edit.html.twig", 9)->display($context);
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
        
        $__internal_484f0fc001b7d9eda305c140cb8484ec8004f9ab3ca8114d988eb45095142998->leave($__internal_484f0fc001b7d9eda305c140cb8484ec8004f9ab3ca8114d988eb45095142998_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:MemberRole:edit.html.twig";
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
