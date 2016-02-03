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
        $__internal_d25a3fa141859b5f09336cc0842c224e298b7de7497a41cf7b611687655570da = $this->env->getExtension("native_profiler");
        $__internal_d25a3fa141859b5f09336cc0842c224e298b7de7497a41cf7b611687655570da->enter($__internal_d25a3fa141859b5f09336cc0842c224e298b7de7497a41cf7b611687655570da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d25a3fa141859b5f09336cc0842c224e298b7de7497a41cf7b611687655570da->leave($__internal_d25a3fa141859b5f09336cc0842c224e298b7de7497a41cf7b611687655570da_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_92391323c32334750ced459c5ccf9fc63211f9e74104bc40227d9f648b1e0501 = $this->env->getExtension("native_profiler");
        $__internal_92391323c32334750ced459c5ccf9fc63211f9e74104bc40227d9f648b1e0501->enter($__internal_92391323c32334750ced459c5ccf9fc63211f9e74104bc40227d9f648b1e0501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_92391323c32334750ced459c5ccf9fc63211f9e74104bc40227d9f648b1e0501->leave($__internal_92391323c32334750ced459c5ccf9fc63211f9e74104bc40227d9f648b1e0501_prof);

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
