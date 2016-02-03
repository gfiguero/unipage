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
        $__internal_d5d3918f3dec8682e08d6c01fa292090a24d46a1413dd77eca265dce44cb4f6f = $this->env->getExtension("native_profiler");
        $__internal_d5d3918f3dec8682e08d6c01fa292090a24d46a1413dd77eca265dce44cb4f6f->enter($__internal_d5d3918f3dec8682e08d6c01fa292090a24d46a1413dd77eca265dce44cb4f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5d3918f3dec8682e08d6c01fa292090a24d46a1413dd77eca265dce44cb4f6f->leave($__internal_d5d3918f3dec8682e08d6c01fa292090a24d46a1413dd77eca265dce44cb4f6f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_23f7edd674e3f8ed05b7827bdca3fd1608610de724f23e9a55cd532d3e058bed = $this->env->getExtension("native_profiler");
        $__internal_23f7edd674e3f8ed05b7827bdca3fd1608610de724f23e9a55cd532d3e058bed->enter($__internal_23f7edd674e3f8ed05b7827bdca3fd1608610de724f23e9a55cd532d3e058bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_23f7edd674e3f8ed05b7827bdca3fd1608610de724f23e9a55cd532d3e058bed->leave($__internal_23f7edd674e3f8ed05b7827bdca3fd1608610de724f23e9a55cd532d3e058bed_prof);

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
