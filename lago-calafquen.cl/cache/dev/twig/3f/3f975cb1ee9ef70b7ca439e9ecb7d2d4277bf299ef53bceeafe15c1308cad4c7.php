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
        $__internal_b633ebf303bbcec8089f7b3f1c3cb8ac4d3df2fb52c5ac9604f36a94cddf8344 = $this->env->getExtension("native_profiler");
        $__internal_b633ebf303bbcec8089f7b3f1c3cb8ac4d3df2fb52c5ac9604f36a94cddf8344->enter($__internal_b633ebf303bbcec8089f7b3f1c3cb8ac4d3df2fb52c5ac9604f36a94cddf8344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:MemberRole:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b633ebf303bbcec8089f7b3f1c3cb8ac4d3df2fb52c5ac9604f36a94cddf8344->leave($__internal_b633ebf303bbcec8089f7b3f1c3cb8ac4d3df2fb52c5ac9604f36a94cddf8344_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_314f8196eb10257583cbb4367a99da85a49b120d500379714979add229e4d3a5 = $this->env->getExtension("native_profiler");
        $__internal_314f8196eb10257583cbb4367a99da85a49b120d500379714979add229e4d3a5->enter($__internal_314f8196eb10257583cbb4367a99da85a49b120d500379714979add229e4d3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_314f8196eb10257583cbb4367a99da85a49b120d500379714979add229e4d3a5->leave($__internal_314f8196eb10257583cbb4367a99da85a49b120d500379714979add229e4d3a5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_61912b705fe551b4ac8834eb3cdb9f4a7d0ba38bc29cf87ca590a45692486ac6 = $this->env->getExtension("native_profiler");
        $__internal_61912b705fe551b4ac8834eb3cdb9f4a7d0ba38bc29cf87ca590a45692486ac6->enter($__internal_61912b705fe551b4ac8834eb3cdb9f4a7d0ba38bc29cf87ca590a45692486ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_61912b705fe551b4ac8834eb3cdb9f4a7d0ba38bc29cf87ca590a45692486ac6->leave($__internal_61912b705fe551b4ac8834eb3cdb9f4a7d0ba38bc29cf87ca590a45692486ac6_prof);

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
