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
        $__internal_56a70f86ee1700d1c30bcdee8bdf1d764f5f5ecb71ce8a59664d39c0dd679661 = $this->env->getExtension("native_profiler");
        $__internal_56a70f86ee1700d1c30bcdee8bdf1d764f5f5ecb71ce8a59664d39c0dd679661->enter($__internal_56a70f86ee1700d1c30bcdee8bdf1d764f5f5ecb71ce8a59664d39c0dd679661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56a70f86ee1700d1c30bcdee8bdf1d764f5f5ecb71ce8a59664d39c0dd679661->leave($__internal_56a70f86ee1700d1c30bcdee8bdf1d764f5f5ecb71ce8a59664d39c0dd679661_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_31b8e38ec30f640e331d5340e5507f7e5b9ac575887a3643d165ff23863b2112 = $this->env->getExtension("native_profiler");
        $__internal_31b8e38ec30f640e331d5340e5507f7e5b9ac575887a3643d165ff23863b2112->enter($__internal_31b8e38ec30f640e331d5340e5507f7e5b9ac575887a3643d165ff23863b2112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_31b8e38ec30f640e331d5340e5507f7e5b9ac575887a3643d165ff23863b2112->leave($__internal_31b8e38ec30f640e331d5340e5507f7e5b9ac575887a3643d165ff23863b2112_prof);

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
