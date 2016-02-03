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
        $__internal_379a53dae6b3ff8147e9a998ed244e10d18555ee96dd339934c10090a43d1c81 = $this->env->getExtension("native_profiler");
        $__internal_379a53dae6b3ff8147e9a998ed244e10d18555ee96dd339934c10090a43d1c81->enter($__internal_379a53dae6b3ff8147e9a998ed244e10d18555ee96dd339934c10090a43d1c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_379a53dae6b3ff8147e9a998ed244e10d18555ee96dd339934c10090a43d1c81->leave($__internal_379a53dae6b3ff8147e9a998ed244e10d18555ee96dd339934c10090a43d1c81_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2407dc15ab9ba62614eddd871950a38b74350bec34a7e2088585bf0917ed1305 = $this->env->getExtension("native_profiler");
        $__internal_2407dc15ab9ba62614eddd871950a38b74350bec34a7e2088585bf0917ed1305->enter($__internal_2407dc15ab9ba62614eddd871950a38b74350bec34a7e2088585bf0917ed1305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_2407dc15ab9ba62614eddd871950a38b74350bec34a7e2088585bf0917ed1305->leave($__internal_2407dc15ab9ba62614eddd871950a38b74350bec34a7e2088585bf0917ed1305_prof);

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
