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
        $__internal_2b7c72b905c4f14321983fe4089aa3aec3e435f8e2415e87898226745dd288b6 = $this->env->getExtension("native_profiler");
        $__internal_2b7c72b905c4f14321983fe4089aa3aec3e435f8e2415e87898226745dd288b6->enter($__internal_2b7c72b905c4f14321983fe4089aa3aec3e435f8e2415e87898226745dd288b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b7c72b905c4f14321983fe4089aa3aec3e435f8e2415e87898226745dd288b6->leave($__internal_2b7c72b905c4f14321983fe4089aa3aec3e435f8e2415e87898226745dd288b6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f6920c395a8e49b4336e4a370f7395d576c1da0347bfcd720a2dac17a6c8f510 = $this->env->getExtension("native_profiler");
        $__internal_f6920c395a8e49b4336e4a370f7395d576c1da0347bfcd720a2dac17a6c8f510->enter($__internal_f6920c395a8e49b4336e4a370f7395d576c1da0347bfcd720a2dac17a6c8f510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_f6920c395a8e49b4336e4a370f7395d576c1da0347bfcd720a2dac17a6c8f510->leave($__internal_f6920c395a8e49b4336e4a370f7395d576c1da0347bfcd720a2dac17a6c8f510_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1face93fb8692d65c5aba88252b6084e9c5218fc5ad34d314c3779d892b3350f = $this->env->getExtension("native_profiler");
        $__internal_1face93fb8692d65c5aba88252b6084e9c5218fc5ad34d314c3779d892b3350f->enter($__internal_1face93fb8692d65c5aba88252b6084e9c5218fc5ad34d314c3779d892b3350f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_1face93fb8692d65c5aba88252b6084e9c5218fc5ad34d314c3779d892b3350f->leave($__internal_1face93fb8692d65c5aba88252b6084e9c5218fc5ad34d314c3779d892b3350f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e69ddeeb318e7c7b2703ec2430c0499722b1dc397c2026d2c6a604c853454d1 = $this->env->getExtension("native_profiler");
        $__internal_4e69ddeeb318e7c7b2703ec2430c0499722b1dc397c2026d2c6a604c853454d1->enter($__internal_4e69ddeeb318e7c7b2703ec2430c0499722b1dc397c2026d2c6a604c853454d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4e69ddeeb318e7c7b2703ec2430c0499722b1dc397c2026d2c6a604c853454d1->leave($__internal_4e69ddeeb318e7c7b2703ec2430c0499722b1dc397c2026d2c6a604c853454d1_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_ec060fc7bd42b7e3e9a02d945ed5928f436e011c451ce4d99568daddba66ffa0 = $this->env->getExtension("native_profiler");
        $__internal_ec060fc7bd42b7e3e9a02d945ed5928f436e011c451ce4d99568daddba66ffa0->enter($__internal_ec060fc7bd42b7e3e9a02d945ed5928f436e011c451ce4d99568daddba66ffa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ec060fc7bd42b7e3e9a02d945ed5928f436e011c451ce4d99568daddba66ffa0->leave($__internal_ec060fc7bd42b7e3e9a02d945ed5928f436e011c451ce4d99568daddba66ffa0_prof);

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
