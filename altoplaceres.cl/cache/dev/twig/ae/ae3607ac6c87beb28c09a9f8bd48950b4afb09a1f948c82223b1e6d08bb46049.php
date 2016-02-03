<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a24dc55e62e2e296bea4ea0e298228e1e55e45a2e94947c9f05aff62ebc04c26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_b9e04541f97c1c3749258e79c5f81a52b347157e810a2d694eded2fce55f26d0 = $this->env->getExtension("native_profiler");
        $__internal_b9e04541f97c1c3749258e79c5f81a52b347157e810a2d694eded2fce55f26d0->enter($__internal_b9e04541f97c1c3749258e79c5f81a52b347157e810a2d694eded2fce55f26d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9e04541f97c1c3749258e79c5f81a52b347157e810a2d694eded2fce55f26d0->leave($__internal_b9e04541f97c1c3749258e79c5f81a52b347157e810a2d694eded2fce55f26d0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_31ee8e2b929c277dcb4c5eda68df9919d4f0a64636a0c9bc844b93686c90ef0d = $this->env->getExtension("native_profiler");
        $__internal_31ee8e2b929c277dcb4c5eda68df9919d4f0a64636a0c9bc844b93686c90ef0d->enter($__internal_31ee8e2b929c277dcb4c5eda68df9919d4f0a64636a0c9bc844b93686c90ef0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_31ee8e2b929c277dcb4c5eda68df9919d4f0a64636a0c9bc844b93686c90ef0d->leave($__internal_31ee8e2b929c277dcb4c5eda68df9919d4f0a64636a0c9bc844b93686c90ef0d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_adcff5f23446124c5c67c4e4d5e25cc0eacf277f99fa2c7780929492e8881d24 = $this->env->getExtension("native_profiler");
        $__internal_adcff5f23446124c5c67c4e4d5e25cc0eacf277f99fa2c7780929492e8881d24->enter($__internal_adcff5f23446124c5c67c4e4d5e25cc0eacf277f99fa2c7780929492e8881d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "FOSUserBundle:Registration:register.html.twig", 9)->display($context);
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
        
        $__internal_adcff5f23446124c5c67c4e4d5e25cc0eacf277f99fa2c7780929492e8881d24->leave($__internal_adcff5f23446124c5c67c4e4d5e25cc0eacf277f99fa2c7780929492e8881d24_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% extends ":Admin:base.html.twig" %}*/
/* */
/* {% block title %}{{ app.request.attributes.get('_route')|trans }}{% endblock %}*/
/* */
/* {% block body %}*/
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
/* {% endblock body %}*/
/* */
