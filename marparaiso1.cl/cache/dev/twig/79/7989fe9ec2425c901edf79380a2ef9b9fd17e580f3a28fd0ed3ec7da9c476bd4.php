<?php

/* UniAdminBundle:Link:new.html.twig */
class __TwigTemplate_750649c2fcb65873f0b61a27767e16c050102179b753daa2353fb1f72d3a89ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Link:new.html.twig", 1);
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
        $__internal_77925934f705f25575bce34465806d4741f43b9e73386f2c9121e790bc8416bc = $this->env->getExtension("native_profiler");
        $__internal_77925934f705f25575bce34465806d4741f43b9e73386f2c9121e790bc8416bc->enter($__internal_77925934f705f25575bce34465806d4741f43b9e73386f2c9121e790bc8416bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Link:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77925934f705f25575bce34465806d4741f43b9e73386f2c9121e790bc8416bc->leave($__internal_77925934f705f25575bce34465806d4741f43b9e73386f2c9121e790bc8416bc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_17950f98fd6ba4c21e240856f2f622db6dcf822d5beeaa7f026337f5baf4795a = $this->env->getExtension("native_profiler");
        $__internal_17950f98fd6ba4c21e240856f2f622db6dcf822d5beeaa7f026337f5baf4795a->enter($__internal_17950f98fd6ba4c21e240856f2f622db6dcf822d5beeaa7f026337f5baf4795a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_17950f98fd6ba4c21e240856f2f622db6dcf822d5beeaa7f026337f5baf4795a->leave($__internal_17950f98fd6ba4c21e240856f2f622db6dcf822d5beeaa7f026337f5baf4795a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7933b626b58c141ea3e1e1167e9ee5f9978f03c3b138d55ff1e4f233735088ab = $this->env->getExtension("native_profiler");
        $__internal_7933b626b58c141ea3e1e1167e9ee5f9978f03c3b138d55ff1e4f233735088ab->enter($__internal_7933b626b58c141ea3e1e1167e9ee5f9978f03c3b138d55ff1e4f233735088ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Link:new.html.twig", 9)->display($context);
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
        
        $__internal_7933b626b58c141ea3e1e1167e9ee5f9978f03c3b138d55ff1e4f233735088ab->leave($__internal_7933b626b58c141ea3e1e1167e9ee5f9978f03c3b138d55ff1e4f233735088ab_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Link:new.html.twig";
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
