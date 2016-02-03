<?php

/* UniAdminBundle:Camera:new.html.twig */
class __TwigTemplate_f1786bf1672c03ddf39ed4373f2d6057ba830fba92aee47633fc4bfb0c2c05fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Camera:new.html.twig", 1);
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
        $__internal_a80bfb7923b90b653c2fb59b2e751b00a8843caf18d2eb0c1c095757130ece75 = $this->env->getExtension("native_profiler");
        $__internal_a80bfb7923b90b653c2fb59b2e751b00a8843caf18d2eb0c1c095757130ece75->enter($__internal_a80bfb7923b90b653c2fb59b2e751b00a8843caf18d2eb0c1c095757130ece75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Camera:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a80bfb7923b90b653c2fb59b2e751b00a8843caf18d2eb0c1c095757130ece75->leave($__internal_a80bfb7923b90b653c2fb59b2e751b00a8843caf18d2eb0c1c095757130ece75_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_25b1f3642b15e3ce3100b891eb2e04f9ed1e24dee4c819e9c2c8cb0302b49669 = $this->env->getExtension("native_profiler");
        $__internal_25b1f3642b15e3ce3100b891eb2e04f9ed1e24dee4c819e9c2c8cb0302b49669->enter($__internal_25b1f3642b15e3ce3100b891eb2e04f9ed1e24dee4c819e9c2c8cb0302b49669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_25b1f3642b15e3ce3100b891eb2e04f9ed1e24dee4c819e9c2c8cb0302b49669->leave($__internal_25b1f3642b15e3ce3100b891eb2e04f9ed1e24dee4c819e9c2c8cb0302b49669_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fafd40a7e57a3243eb51f79705fd69b37905f0a5267275ac812f5b4955a84eb = $this->env->getExtension("native_profiler");
        $__internal_0fafd40a7e57a3243eb51f79705fd69b37905f0a5267275ac812f5b4955a84eb->enter($__internal_0fafd40a7e57a3243eb51f79705fd69b37905f0a5267275ac812f5b4955a84eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Camera:new.html.twig", 9)->display($context);
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
        
        $__internal_0fafd40a7e57a3243eb51f79705fd69b37905f0a5267275ac812f5b4955a84eb->leave($__internal_0fafd40a7e57a3243eb51f79705fd69b37905f0a5267275ac812f5b4955a84eb_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Camera:new.html.twig";
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
