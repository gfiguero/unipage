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
        $__internal_a9111741399a9ec65cb36317558441440444cc59a9652700fb7c58cb6e7ad4c4 = $this->env->getExtension("native_profiler");
        $__internal_a9111741399a9ec65cb36317558441440444cc59a9652700fb7c58cb6e7ad4c4->enter($__internal_a9111741399a9ec65cb36317558441440444cc59a9652700fb7c58cb6e7ad4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9111741399a9ec65cb36317558441440444cc59a9652700fb7c58cb6e7ad4c4->leave($__internal_a9111741399a9ec65cb36317558441440444cc59a9652700fb7c58cb6e7ad4c4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae222560e70a56eca53ff7919c37173e6d41dccb6625577afd7c83fa1c9225f9 = $this->env->getExtension("native_profiler");
        $__internal_ae222560e70a56eca53ff7919c37173e6d41dccb6625577afd7c83fa1c9225f9->enter($__internal_ae222560e70a56eca53ff7919c37173e6d41dccb6625577afd7c83fa1c9225f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_ae222560e70a56eca53ff7919c37173e6d41dccb6625577afd7c83fa1c9225f9->leave($__internal_ae222560e70a56eca53ff7919c37173e6d41dccb6625577afd7c83fa1c9225f9_prof);

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
