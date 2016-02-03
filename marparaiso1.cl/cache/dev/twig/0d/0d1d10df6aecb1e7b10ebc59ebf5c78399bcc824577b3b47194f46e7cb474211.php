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
        $__internal_2db174aac227ca0be561813cb2c5261d5ae41c7e1b3edc895507ebc910a3facf = $this->env->getExtension("native_profiler");
        $__internal_2db174aac227ca0be561813cb2c5261d5ae41c7e1b3edc895507ebc910a3facf->enter($__internal_2db174aac227ca0be561813cb2c5261d5ae41c7e1b3edc895507ebc910a3facf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2db174aac227ca0be561813cb2c5261d5ae41c7e1b3edc895507ebc910a3facf->leave($__internal_2db174aac227ca0be561813cb2c5261d5ae41c7e1b3edc895507ebc910a3facf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_21a51d0d422964c36abf3296af318c424be96f836c2a34f2e225bc9c10718e98 = $this->env->getExtension("native_profiler");
        $__internal_21a51d0d422964c36abf3296af318c424be96f836c2a34f2e225bc9c10718e98->enter($__internal_21a51d0d422964c36abf3296af318c424be96f836c2a34f2e225bc9c10718e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_21a51d0d422964c36abf3296af318c424be96f836c2a34f2e225bc9c10718e98->leave($__internal_21a51d0d422964c36abf3296af318c424be96f836c2a34f2e225bc9c10718e98_prof);

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
