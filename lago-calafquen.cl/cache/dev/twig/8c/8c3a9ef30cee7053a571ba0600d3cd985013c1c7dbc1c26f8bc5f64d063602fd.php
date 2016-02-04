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
        $__internal_8837b3fb5010ab2e85b7a10188bbd488a028a07ef88f357060921d7020020e80 = $this->env->getExtension("native_profiler");
        $__internal_8837b3fb5010ab2e85b7a10188bbd488a028a07ef88f357060921d7020020e80->enter($__internal_8837b3fb5010ab2e85b7a10188bbd488a028a07ef88f357060921d7020020e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8837b3fb5010ab2e85b7a10188bbd488a028a07ef88f357060921d7020020e80->leave($__internal_8837b3fb5010ab2e85b7a10188bbd488a028a07ef88f357060921d7020020e80_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_faa808cb52ce2e7c6564c4ac99dde735c88a48e92b88d74d4784f8549c60a546 = $this->env->getExtension("native_profiler");
        $__internal_faa808cb52ce2e7c6564c4ac99dde735c88a48e92b88d74d4784f8549c60a546->enter($__internal_faa808cb52ce2e7c6564c4ac99dde735c88a48e92b88d74d4784f8549c60a546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_faa808cb52ce2e7c6564c4ac99dde735c88a48e92b88d74d4784f8549c60a546->leave($__internal_faa808cb52ce2e7c6564c4ac99dde735c88a48e92b88d74d4784f8549c60a546_prof);

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
