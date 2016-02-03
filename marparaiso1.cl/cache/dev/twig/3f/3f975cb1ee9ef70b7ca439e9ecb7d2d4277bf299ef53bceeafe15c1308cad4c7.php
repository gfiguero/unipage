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
        $__internal_d78810f6adef8bf9350484abefbf74a04ddceaa8224fd715bf30ec09eeb57ab1 = $this->env->getExtension("native_profiler");
        $__internal_d78810f6adef8bf9350484abefbf74a04ddceaa8224fd715bf30ec09eeb57ab1->enter($__internal_d78810f6adef8bf9350484abefbf74a04ddceaa8224fd715bf30ec09eeb57ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:MemberRole:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d78810f6adef8bf9350484abefbf74a04ddceaa8224fd715bf30ec09eeb57ab1->leave($__internal_d78810f6adef8bf9350484abefbf74a04ddceaa8224fd715bf30ec09eeb57ab1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_88a77afe04873e85be381389c21ad789b84914881e7c40b7bfab9af761694c67 = $this->env->getExtension("native_profiler");
        $__internal_88a77afe04873e85be381389c21ad789b84914881e7c40b7bfab9af761694c67->enter($__internal_88a77afe04873e85be381389c21ad789b84914881e7c40b7bfab9af761694c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_88a77afe04873e85be381389c21ad789b84914881e7c40b7bfab9af761694c67->leave($__internal_88a77afe04873e85be381389c21ad789b84914881e7c40b7bfab9af761694c67_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a3da34b1720947f985191e2da2f287f941961ad7dcc06950d73e27125be5b37 = $this->env->getExtension("native_profiler");
        $__internal_4a3da34b1720947f985191e2da2f287f941961ad7dcc06950d73e27125be5b37->enter($__internal_4a3da34b1720947f985191e2da2f287f941961ad7dcc06950d73e27125be5b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4a3da34b1720947f985191e2da2f287f941961ad7dcc06950d73e27125be5b37->leave($__internal_4a3da34b1720947f985191e2da2f287f941961ad7dcc06950d73e27125be5b37_prof);

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
