<?php

/* UniAdminBundle:Document:new.html.twig */
class __TwigTemplate_fd3cc3a76f78fa3a3d71289922e28aaad609fdf685a0be6944ae75d7eee432f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Document:new.html.twig", 1);
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
        $__internal_581a6a47e2c33fc4eda8a89a901c0d092a507a737e04cab86c9b14b505b26cd1 = $this->env->getExtension("native_profiler");
        $__internal_581a6a47e2c33fc4eda8a89a901c0d092a507a737e04cab86c9b14b505b26cd1->enter($__internal_581a6a47e2c33fc4eda8a89a901c0d092a507a737e04cab86c9b14b505b26cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Document:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_581a6a47e2c33fc4eda8a89a901c0d092a507a737e04cab86c9b14b505b26cd1->leave($__internal_581a6a47e2c33fc4eda8a89a901c0d092a507a737e04cab86c9b14b505b26cd1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_90419072d74669351dc76fe3436bf80da7939825f2c18600c891e00a5e5cafa3 = $this->env->getExtension("native_profiler");
        $__internal_90419072d74669351dc76fe3436bf80da7939825f2c18600c891e00a5e5cafa3->enter($__internal_90419072d74669351dc76fe3436bf80da7939825f2c18600c891e00a5e5cafa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_90419072d74669351dc76fe3436bf80da7939825f2c18600c891e00a5e5cafa3->leave($__internal_90419072d74669351dc76fe3436bf80da7939825f2c18600c891e00a5e5cafa3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d06d951bd5669a05cb0cc835f0c429b394d9c0b0bf936621a7df2b02e6d3d0cd = $this->env->getExtension("native_profiler");
        $__internal_d06d951bd5669a05cb0cc835f0c429b394d9c0b0bf936621a7df2b02e6d3d0cd->enter($__internal_d06d951bd5669a05cb0cc835f0c429b394d9c0b0bf936621a7df2b02e6d3d0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Document:new.html.twig", 9)->display($context);
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
        // line 18
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
        
        $__internal_d06d951bd5669a05cb0cc835f0c429b394d9c0b0bf936621a7df2b02e6d3d0cd->leave($__internal_d06d951bd5669a05cb0cc835f0c429b394d9c0b0bf936621a7df2b02e6d3d0cd_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Document:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
