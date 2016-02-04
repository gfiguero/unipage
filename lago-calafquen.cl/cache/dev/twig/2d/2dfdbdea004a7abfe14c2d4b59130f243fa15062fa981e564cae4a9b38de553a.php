<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_d7f2cb186f2e9a42affc7808bfe6d63e8c923bc5cf92b5d83bd707639f24d80f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_b13fbb63797e2fd547dc3d1f956f8301e5caafffffe6eabcb23a0600860054c3 = $this->env->getExtension("native_profiler");
        $__internal_b13fbb63797e2fd547dc3d1f956f8301e5caafffffe6eabcb23a0600860054c3->enter($__internal_b13fbb63797e2fd547dc3d1f956f8301e5caafffffe6eabcb23a0600860054c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b13fbb63797e2fd547dc3d1f956f8301e5caafffffe6eabcb23a0600860054c3->leave($__internal_b13fbb63797e2fd547dc3d1f956f8301e5caafffffe6eabcb23a0600860054c3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cbeaa800209cc873b6f134adc442f3079f8cd3502667ebf4158658aceead2609 = $this->env->getExtension("native_profiler");
        $__internal_cbeaa800209cc873b6f134adc442f3079f8cd3502667ebf4158658aceead2609->enter($__internal_cbeaa800209cc873b6f134adc442f3079f8cd3502667ebf4158658aceead2609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_cbeaa800209cc873b6f134adc442f3079f8cd3502667ebf4158658aceead2609->leave($__internal_cbeaa800209cc873b6f134adc442f3079f8cd3502667ebf4158658aceead2609_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
