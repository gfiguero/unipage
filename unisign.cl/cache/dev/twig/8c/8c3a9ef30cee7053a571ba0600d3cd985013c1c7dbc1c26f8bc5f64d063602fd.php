<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_cbc5ad577ee83e8166895c2cc18540236749df6b4a85fa77669f20d0af2c6a4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_1e3b5706a78a4fbb917872d659ebf46d74f6d5af519b53e3f8f7ff3b552523ec = $this->env->getExtension("native_profiler");
        $__internal_1e3b5706a78a4fbb917872d659ebf46d74f6d5af519b53e3f8f7ff3b552523ec->enter($__internal_1e3b5706a78a4fbb917872d659ebf46d74f6d5af519b53e3f8f7ff3b552523ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e3b5706a78a4fbb917872d659ebf46d74f6d5af519b53e3f8f7ff3b552523ec->leave($__internal_1e3b5706a78a4fbb917872d659ebf46d74f6d5af519b53e3f8f7ff3b552523ec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ffba2230c3817065530db8fc1b60828f58e9f4272c982d0cc6edb7ce6dc450c0 = $this->env->getExtension("native_profiler");
        $__internal_ffba2230c3817065530db8fc1b60828f58e9f4272c982d0cc6edb7ce6dc450c0->enter($__internal_ffba2230c3817065530db8fc1b60828f58e9f4272c982d0cc6edb7ce6dc450c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_ffba2230c3817065530db8fc1b60828f58e9f4272c982d0cc6edb7ce6dc450c0->leave($__internal_ffba2230c3817065530db8fc1b60828f58e9f4272c982d0cc6edb7ce6dc450c0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
