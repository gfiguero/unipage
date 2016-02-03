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
        $__internal_5c7db4fc61fc6b84fbc94f10194d560d5872fa4e9a1d00482b311fd8c36900f6 = $this->env->getExtension("native_profiler");
        $__internal_5c7db4fc61fc6b84fbc94f10194d560d5872fa4e9a1d00482b311fd8c36900f6->enter($__internal_5c7db4fc61fc6b84fbc94f10194d560d5872fa4e9a1d00482b311fd8c36900f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c7db4fc61fc6b84fbc94f10194d560d5872fa4e9a1d00482b311fd8c36900f6->leave($__internal_5c7db4fc61fc6b84fbc94f10194d560d5872fa4e9a1d00482b311fd8c36900f6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c6353fddd99c04497c164ccaad3c6fe70b4d3b271be5ce81d412a8c24d36060e = $this->env->getExtension("native_profiler");
        $__internal_c6353fddd99c04497c164ccaad3c6fe70b4d3b271be5ce81d412a8c24d36060e->enter($__internal_c6353fddd99c04497c164ccaad3c6fe70b4d3b271be5ce81d412a8c24d36060e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_c6353fddd99c04497c164ccaad3c6fe70b4d3b271be5ce81d412a8c24d36060e->leave($__internal_c6353fddd99c04497c164ccaad3c6fe70b4d3b271be5ce81d412a8c24d36060e_prof);

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
