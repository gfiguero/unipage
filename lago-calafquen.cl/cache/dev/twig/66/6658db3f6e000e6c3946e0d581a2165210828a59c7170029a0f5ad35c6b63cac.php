<?php

/* UniAdminBundle:History:edit.html.twig */
class __TwigTemplate_6f2a46e9d6e9cb81f12325a22a1342f6bca4a41ab3b2afda7cf69bb1fd0cbe92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:History:edit.html.twig", 1);
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
        $__internal_b0cfcec4e3f91327569fc03a952c8dadb59c94578b7d2cc96d95f3abb1eaf1d8 = $this->env->getExtension("native_profiler");
        $__internal_b0cfcec4e3f91327569fc03a952c8dadb59c94578b7d2cc96d95f3abb1eaf1d8->enter($__internal_b0cfcec4e3f91327569fc03a952c8dadb59c94578b7d2cc96d95f3abb1eaf1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:History:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0cfcec4e3f91327569fc03a952c8dadb59c94578b7d2cc96d95f3abb1eaf1d8->leave($__internal_b0cfcec4e3f91327569fc03a952c8dadb59c94578b7d2cc96d95f3abb1eaf1d8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d673fefabbe53c2e2534a2e225a2527e92da0a0708b6cddef4503ccb7cb2f76 = $this->env->getExtension("native_profiler");
        $__internal_6d673fefabbe53c2e2534a2e225a2527e92da0a0708b6cddef4503ccb7cb2f76->enter($__internal_6d673fefabbe53c2e2534a2e225a2527e92da0a0708b6cddef4503ccb7cb2f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_6d673fefabbe53c2e2534a2e225a2527e92da0a0708b6cddef4503ccb7cb2f76->leave($__internal_6d673fefabbe53c2e2534a2e225a2527e92da0a0708b6cddef4503ccb7cb2f76_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d80abb0ec7eafb43ef9e7e11e4bb4f076c703a559a8f4c9b3875c7b2162cd057 = $this->env->getExtension("native_profiler");
        $__internal_d80abb0ec7eafb43ef9e7e11e4bb4f076c703a559a8f4c9b3875c7b2162cd057->enter($__internal_d80abb0ec7eafb43ef9e7e11e4bb4f076c703a559a8f4c9b3875c7b2162cd057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:History:edit.html.twig", 9)->display($context);
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
        
        $__internal_d80abb0ec7eafb43ef9e7e11e4bb4f076c703a559a8f4c9b3875c7b2162cd057->leave($__internal_d80abb0ec7eafb43ef9e7e11e4bb4f076c703a559a8f4c9b3875c7b2162cd057_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:History:edit.html.twig";
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
