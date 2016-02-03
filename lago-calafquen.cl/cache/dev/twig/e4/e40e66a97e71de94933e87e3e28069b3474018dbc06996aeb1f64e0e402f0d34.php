<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_acd8be0366a8440484d28882547be4f6c00612323e6e3890f5e75b1451a65329 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1d3ea582618387d6e5c7bc236269f485c056adf0476898f85182a3a09a3eed5 = $this->env->getExtension("native_profiler");
        $__internal_c1d3ea582618387d6e5c7bc236269f485c056adf0476898f85182a3a09a3eed5->enter($__internal_c1d3ea582618387d6e5c7bc236269f485c056adf0476898f85182a3a09a3eed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1d3ea582618387d6e5c7bc236269f485c056adf0476898f85182a3a09a3eed5->leave($__internal_c1d3ea582618387d6e5c7bc236269f485c056adf0476898f85182a3a09a3eed5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_77413c5c6f91ce4defd7415cf05cdb0bfaaf3e070971968dc51409f8bf7425e1 = $this->env->getExtension("native_profiler");
        $__internal_77413c5c6f91ce4defd7415cf05cdb0bfaaf3e070971968dc51409f8bf7425e1->enter($__internal_77413c5c6f91ce4defd7415cf05cdb0bfaaf3e070971968dc51409f8bf7425e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_77413c5c6f91ce4defd7415cf05cdb0bfaaf3e070971968dc51409f8bf7425e1->leave($__internal_77413c5c6f91ce4defd7415cf05cdb0bfaaf3e070971968dc51409f8bf7425e1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_693ae6be69eb9e9962aa2f9cd50e993c8b21c95005e8549ef4e209e0aa43d98f = $this->env->getExtension("native_profiler");
        $__internal_693ae6be69eb9e9962aa2f9cd50e993c8b21c95005e8549ef4e209e0aa43d98f->enter($__internal_693ae6be69eb9e9962aa2f9cd50e993c8b21c95005e8549ef4e209e0aa43d98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_693ae6be69eb9e9962aa2f9cd50e993c8b21c95005e8549ef4e209e0aa43d98f->leave($__internal_693ae6be69eb9e9962aa2f9cd50e993c8b21c95005e8549ef4e209e0aa43d98f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_11ad7628de512817605834a9a828ad334ce38957664b08132dedc2852d783268 = $this->env->getExtension("native_profiler");
        $__internal_11ad7628de512817605834a9a828ad334ce38957664b08132dedc2852d783268->enter($__internal_11ad7628de512817605834a9a828ad334ce38957664b08132dedc2852d783268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_11ad7628de512817605834a9a828ad334ce38957664b08132dedc2852d783268->leave($__internal_11ad7628de512817605834a9a828ad334ce38957664b08132dedc2852d783268_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_8528a639c50c1b4d05c475fee80bd453fd04fe992147e32899762ac153a4fca7 = $this->env->getExtension("native_profiler");
        $__internal_8528a639c50c1b4d05c475fee80bd453fd04fe992147e32899762ac153a4fca7->enter($__internal_8528a639c50c1b4d05c475fee80bd453fd04fe992147e32899762ac153a4fca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_8528a639c50c1b4d05c475fee80bd453fd04fe992147e32899762ac153a4fca7->leave($__internal_8528a639c50c1b4d05c475fee80bd453fd04fe992147e32899762ac153a4fca7_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
