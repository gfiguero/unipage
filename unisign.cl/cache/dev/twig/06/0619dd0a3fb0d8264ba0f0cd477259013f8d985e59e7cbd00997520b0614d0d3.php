<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_565fa663d15458de9af278544a3bf07b1c82c25796d4a11356f986cf4a839059 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa16024ad7aacc56c50db8a6aa6e05be03ce42f50679082e07633ef494a8b2af = $this->env->getExtension("native_profiler");
        $__internal_aa16024ad7aacc56c50db8a6aa6e05be03ce42f50679082e07633ef494a8b2af->enter($__internal_aa16024ad7aacc56c50db8a6aa6e05be03ce42f50679082e07633ef494a8b2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa16024ad7aacc56c50db8a6aa6e05be03ce42f50679082e07633ef494a8b2af->leave($__internal_aa16024ad7aacc56c50db8a6aa6e05be03ce42f50679082e07633ef494a8b2af_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_32add8ba47ffdd62eec536c520420c2521974166f3004775a45d6b81a61c7882 = $this->env->getExtension("native_profiler");
        $__internal_32add8ba47ffdd62eec536c520420c2521974166f3004775a45d6b81a61c7882->enter($__internal_32add8ba47ffdd62eec536c520420c2521974166f3004775a45d6b81a61c7882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_32add8ba47ffdd62eec536c520420c2521974166f3004775a45d6b81a61c7882->leave($__internal_32add8ba47ffdd62eec536c520420c2521974166f3004775a45d6b81a61c7882_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
