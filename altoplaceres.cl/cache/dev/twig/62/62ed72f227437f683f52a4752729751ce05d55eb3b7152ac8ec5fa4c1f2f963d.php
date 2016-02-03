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
        $__internal_c0f073b4e1205652d59dfb493f113de5a9f715debe2b3cf92131ceffa1c687be = $this->env->getExtension("native_profiler");
        $__internal_c0f073b4e1205652d59dfb493f113de5a9f715debe2b3cf92131ceffa1c687be->enter($__internal_c0f073b4e1205652d59dfb493f113de5a9f715debe2b3cf92131ceffa1c687be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Camera:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0f073b4e1205652d59dfb493f113de5a9f715debe2b3cf92131ceffa1c687be->leave($__internal_c0f073b4e1205652d59dfb493f113de5a9f715debe2b3cf92131ceffa1c687be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_13223964d6adaae4d56782b248951641126a879c4104dc00c903efcee5777e20 = $this->env->getExtension("native_profiler");
        $__internal_13223964d6adaae4d56782b248951641126a879c4104dc00c903efcee5777e20->enter($__internal_13223964d6adaae4d56782b248951641126a879c4104dc00c903efcee5777e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_13223964d6adaae4d56782b248951641126a879c4104dc00c903efcee5777e20->leave($__internal_13223964d6adaae4d56782b248951641126a879c4104dc00c903efcee5777e20_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c39e590dbf8a08b00ab38eb6069e90831a4af736584821bd79bbb569b1c30ae9 = $this->env->getExtension("native_profiler");
        $__internal_c39e590dbf8a08b00ab38eb6069e90831a4af736584821bd79bbb569b1c30ae9->enter($__internal_c39e590dbf8a08b00ab38eb6069e90831a4af736584821bd79bbb569b1c30ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c39e590dbf8a08b00ab38eb6069e90831a4af736584821bd79bbb569b1c30ae9->leave($__internal_c39e590dbf8a08b00ab38eb6069e90831a4af736584821bd79bbb569b1c30ae9_prof);

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
