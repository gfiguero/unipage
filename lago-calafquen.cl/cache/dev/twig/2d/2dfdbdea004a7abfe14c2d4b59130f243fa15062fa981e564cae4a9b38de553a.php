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
        $__internal_e48903c45850b90bd7baa6d4551b6ce74257351471242b428945a7d31156c9ec = $this->env->getExtension("native_profiler");
        $__internal_e48903c45850b90bd7baa6d4551b6ce74257351471242b428945a7d31156c9ec->enter($__internal_e48903c45850b90bd7baa6d4551b6ce74257351471242b428945a7d31156c9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e48903c45850b90bd7baa6d4551b6ce74257351471242b428945a7d31156c9ec->leave($__internal_e48903c45850b90bd7baa6d4551b6ce74257351471242b428945a7d31156c9ec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_333ba1d2bb898b805e7e7e99a4d519f73076cbfd326e4860689dec7f63a87667 = $this->env->getExtension("native_profiler");
        $__internal_333ba1d2bb898b805e7e7e99a4d519f73076cbfd326e4860689dec7f63a87667->enter($__internal_333ba1d2bb898b805e7e7e99a4d519f73076cbfd326e4860689dec7f63a87667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_333ba1d2bb898b805e7e7e99a4d519f73076cbfd326e4860689dec7f63a87667->leave($__internal_333ba1d2bb898b805e7e7e99a4d519f73076cbfd326e4860689dec7f63a87667_prof);

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
