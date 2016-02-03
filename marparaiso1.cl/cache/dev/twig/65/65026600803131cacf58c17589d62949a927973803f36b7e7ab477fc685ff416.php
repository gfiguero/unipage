<?php

/* UniAdminBundle:ProductCategory:new.html.twig */
class __TwigTemplate_ec14681923e6f6c60ad1fcbc780c958b9d48cd3bf656d16ab6d77c39f0e7cc10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:ProductCategory:new.html.twig", 1);
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
        $__internal_cffce6947d0651de10c5f42928debf5c09c1950437196d84f5433aa97b8b1f2b = $this->env->getExtension("native_profiler");
        $__internal_cffce6947d0651de10c5f42928debf5c09c1950437196d84f5433aa97b8b1f2b->enter($__internal_cffce6947d0651de10c5f42928debf5c09c1950437196d84f5433aa97b8b1f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:ProductCategory:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cffce6947d0651de10c5f42928debf5c09c1950437196d84f5433aa97b8b1f2b->leave($__internal_cffce6947d0651de10c5f42928debf5c09c1950437196d84f5433aa97b8b1f2b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0cabd0c8ae3439e43833deb3e30f83c9032cb80f9f5483595a92ad850f85197 = $this->env->getExtension("native_profiler");
        $__internal_e0cabd0c8ae3439e43833deb3e30f83c9032cb80f9f5483595a92ad850f85197->enter($__internal_e0cabd0c8ae3439e43833deb3e30f83c9032cb80f9f5483595a92ad850f85197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_e0cabd0c8ae3439e43833deb3e30f83c9032cb80f9f5483595a92ad850f85197->leave($__internal_e0cabd0c8ae3439e43833deb3e30f83c9032cb80f9f5483595a92ad850f85197_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_16d76b2e48be750d1c83da7555cb86dd815b0617832bbbe073bed1869d0437eb = $this->env->getExtension("native_profiler");
        $__internal_16d76b2e48be750d1c83da7555cb86dd815b0617832bbbe073bed1869d0437eb->enter($__internal_16d76b2e48be750d1c83da7555cb86dd815b0617832bbbe073bed1869d0437eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:ProductCategory:new.html.twig", 9)->display($context);
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
        
        $__internal_16d76b2e48be750d1c83da7555cb86dd815b0617832bbbe073bed1869d0437eb->leave($__internal_16d76b2e48be750d1c83da7555cb86dd815b0617832bbbe073bed1869d0437eb_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:ProductCategory:new.html.twig";
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
