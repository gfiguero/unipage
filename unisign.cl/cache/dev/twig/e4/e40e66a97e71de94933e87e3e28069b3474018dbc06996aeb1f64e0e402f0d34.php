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
        $__internal_7d8e088408fb2947b4754db028f16573c57ff8589f3f0d9974c3224884476e37 = $this->env->getExtension("native_profiler");
        $__internal_7d8e088408fb2947b4754db028f16573c57ff8589f3f0d9974c3224884476e37->enter($__internal_7d8e088408fb2947b4754db028f16573c57ff8589f3f0d9974c3224884476e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d8e088408fb2947b4754db028f16573c57ff8589f3f0d9974c3224884476e37->leave($__internal_7d8e088408fb2947b4754db028f16573c57ff8589f3f0d9974c3224884476e37_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d9319f3d6be5b9b3d356257c6ca89b9d39c186f0704f04c030f73b3a36fe1eef = $this->env->getExtension("native_profiler");
        $__internal_d9319f3d6be5b9b3d356257c6ca89b9d39c186f0704f04c030f73b3a36fe1eef->enter($__internal_d9319f3d6be5b9b3d356257c6ca89b9d39c186f0704f04c030f73b3a36fe1eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d9319f3d6be5b9b3d356257c6ca89b9d39c186f0704f04c030f73b3a36fe1eef->leave($__internal_d9319f3d6be5b9b3d356257c6ca89b9d39c186f0704f04c030f73b3a36fe1eef_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b0028bae06db54cd5335cf82b9e36243468faf927d294e5d7c94ac22f6a9413 = $this->env->getExtension("native_profiler");
        $__internal_2b0028bae06db54cd5335cf82b9e36243468faf927d294e5d7c94ac22f6a9413->enter($__internal_2b0028bae06db54cd5335cf82b9e36243468faf927d294e5d7c94ac22f6a9413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_2b0028bae06db54cd5335cf82b9e36243468faf927d294e5d7c94ac22f6a9413->leave($__internal_2b0028bae06db54cd5335cf82b9e36243468faf927d294e5d7c94ac22f6a9413_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfb9afa8b377dabb8bca5f693ce9c50f6396f40b73eea8e908aa57d2a67ae798 = $this->env->getExtension("native_profiler");
        $__internal_dfb9afa8b377dabb8bca5f693ce9c50f6396f40b73eea8e908aa57d2a67ae798->enter($__internal_dfb9afa8b377dabb8bca5f693ce9c50f6396f40b73eea8e908aa57d2a67ae798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dfb9afa8b377dabb8bca5f693ce9c50f6396f40b73eea8e908aa57d2a67ae798->leave($__internal_dfb9afa8b377dabb8bca5f693ce9c50f6396f40b73eea8e908aa57d2a67ae798_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_08c8270cb046da3e31a776445a087aba0312e0413d8693095b8cdabb246f61f1 = $this->env->getExtension("native_profiler");
        $__internal_08c8270cb046da3e31a776445a087aba0312e0413d8693095b8cdabb246f61f1->enter($__internal_08c8270cb046da3e31a776445a087aba0312e0413d8693095b8cdabb246f61f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_08c8270cb046da3e31a776445a087aba0312e0413d8693095b8cdabb246f61f1->leave($__internal_08c8270cb046da3e31a776445a087aba0312e0413d8693095b8cdabb246f61f1_prof);

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
