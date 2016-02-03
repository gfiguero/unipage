<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_8e7177aaa91018727edf991c9ae75688315176a543360e90f7cacb29e5d5a456 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_dfbe779d6dbc51f9b441cbf7e9b1b35df0b24f7e3f6d4fc7c55a32404362a3a8 = $this->env->getExtension("native_profiler");
        $__internal_dfbe779d6dbc51f9b441cbf7e9b1b35df0b24f7e3f6d4fc7c55a32404362a3a8->enter($__internal_dfbe779d6dbc51f9b441cbf7e9b1b35df0b24f7e3f6d4fc7c55a32404362a3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfbe779d6dbc51f9b441cbf7e9b1b35df0b24f7e3f6d4fc7c55a32404362a3a8->leave($__internal_dfbe779d6dbc51f9b441cbf7e9b1b35df0b24f7e3f6d4fc7c55a32404362a3a8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_086e8d5855dd22644ac37e26dff6afac5e56893439c3bb63130f1f178b94992d = $this->env->getExtension("native_profiler");
        $__internal_086e8d5855dd22644ac37e26dff6afac5e56893439c3bb63130f1f178b94992d->enter($__internal_086e8d5855dd22644ac37e26dff6afac5e56893439c3bb63130f1f178b94992d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_086e8d5855dd22644ac37e26dff6afac5e56893439c3bb63130f1f178b94992d->leave($__internal_086e8d5855dd22644ac37e26dff6afac5e56893439c3bb63130f1f178b94992d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
