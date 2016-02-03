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
        $__internal_f592af83e02afa9d21ce193822e177f9a4c9acfda2fa417398e0663d8e623f44 = $this->env->getExtension("native_profiler");
        $__internal_f592af83e02afa9d21ce193822e177f9a4c9acfda2fa417398e0663d8e623f44->enter($__internal_f592af83e02afa9d21ce193822e177f9a4c9acfda2fa417398e0663d8e623f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f592af83e02afa9d21ce193822e177f9a4c9acfda2fa417398e0663d8e623f44->leave($__internal_f592af83e02afa9d21ce193822e177f9a4c9acfda2fa417398e0663d8e623f44_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_74e8922ead6bc213eaf9b0f7f8065565975aad14f3c407abc38dc1e1a0a58b83 = $this->env->getExtension("native_profiler");
        $__internal_74e8922ead6bc213eaf9b0f7f8065565975aad14f3c407abc38dc1e1a0a58b83->enter($__internal_74e8922ead6bc213eaf9b0f7f8065565975aad14f3c407abc38dc1e1a0a58b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_74e8922ead6bc213eaf9b0f7f8065565975aad14f3c407abc38dc1e1a0a58b83->leave($__internal_74e8922ead6bc213eaf9b0f7f8065565975aad14f3c407abc38dc1e1a0a58b83_prof);

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
