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
        $__internal_a662b4cd1ec4d56a22c38c6c2d62a83303e550e3e07e9f86394183f3a1872e4d = $this->env->getExtension("native_profiler");
        $__internal_a662b4cd1ec4d56a22c38c6c2d62a83303e550e3e07e9f86394183f3a1872e4d->enter($__internal_a662b4cd1ec4d56a22c38c6c2d62a83303e550e3e07e9f86394183f3a1872e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a662b4cd1ec4d56a22c38c6c2d62a83303e550e3e07e9f86394183f3a1872e4d->leave($__internal_a662b4cd1ec4d56a22c38c6c2d62a83303e550e3e07e9f86394183f3a1872e4d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f6a05a307a21a187cbab0b195174be852386ba6ba9e4be7c40ca702a2203a531 = $this->env->getExtension("native_profiler");
        $__internal_f6a05a307a21a187cbab0b195174be852386ba6ba9e4be7c40ca702a2203a531->enter($__internal_f6a05a307a21a187cbab0b195174be852386ba6ba9e4be7c40ca702a2203a531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_f6a05a307a21a187cbab0b195174be852386ba6ba9e4be7c40ca702a2203a531->leave($__internal_f6a05a307a21a187cbab0b195174be852386ba6ba9e4be7c40ca702a2203a531_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5b09fef78fbc3ab0be2e1ecf8b0f1cbebd380b62a01bdc695b79d2153440431 = $this->env->getExtension("native_profiler");
        $__internal_c5b09fef78fbc3ab0be2e1ecf8b0f1cbebd380b62a01bdc695b79d2153440431->enter($__internal_c5b09fef78fbc3ab0be2e1ecf8b0f1cbebd380b62a01bdc695b79d2153440431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_c5b09fef78fbc3ab0be2e1ecf8b0f1cbebd380b62a01bdc695b79d2153440431->leave($__internal_c5b09fef78fbc3ab0be2e1ecf8b0f1cbebd380b62a01bdc695b79d2153440431_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca4d7db99ad5adeae68cdeea0d496b4a7127dc74e1dc936ed54a1388a64af994 = $this->env->getExtension("native_profiler");
        $__internal_ca4d7db99ad5adeae68cdeea0d496b4a7127dc74e1dc936ed54a1388a64af994->enter($__internal_ca4d7db99ad5adeae68cdeea0d496b4a7127dc74e1dc936ed54a1388a64af994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ca4d7db99ad5adeae68cdeea0d496b4a7127dc74e1dc936ed54a1388a64af994->leave($__internal_ca4d7db99ad5adeae68cdeea0d496b4a7127dc74e1dc936ed54a1388a64af994_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_9be95e3311ee2d94a4aae92376a5f91c9121d040b6ae997535dbb5855af9739d = $this->env->getExtension("native_profiler");
        $__internal_9be95e3311ee2d94a4aae92376a5f91c9121d040b6ae997535dbb5855af9739d->enter($__internal_9be95e3311ee2d94a4aae92376a5f91c9121d040b6ae997535dbb5855af9739d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_9be95e3311ee2d94a4aae92376a5f91c9121d040b6ae997535dbb5855af9739d->leave($__internal_9be95e3311ee2d94a4aae92376a5f91c9121d040b6ae997535dbb5855af9739d_prof);

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
