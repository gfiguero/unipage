<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_5082d4211482c51e746af9bc9d8f028073a97f53021053b0e8afbf01c87c8e25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_6f829aa21d2fc25a0750b46eeb3b72d8de9531cb907496b21d6b0b69ad9487fd = $this->env->getExtension("native_profiler");
        $__internal_6f829aa21d2fc25a0750b46eeb3b72d8de9531cb907496b21d6b0b69ad9487fd->enter($__internal_6f829aa21d2fc25a0750b46eeb3b72d8de9531cb907496b21d6b0b69ad9487fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f829aa21d2fc25a0750b46eeb3b72d8de9531cb907496b21d6b0b69ad9487fd->leave($__internal_6f829aa21d2fc25a0750b46eeb3b72d8de9531cb907496b21d6b0b69ad9487fd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e206dc20d11802369dd7ceb929c9d6c996fad170b851005d9494475dfc282ff = $this->env->getExtension("native_profiler");
        $__internal_5e206dc20d11802369dd7ceb929c9d6c996fad170b851005d9494475dfc282ff->enter($__internal_5e206dc20d11802369dd7ceb929c9d6c996fad170b851005d9494475dfc282ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5e206dc20d11802369dd7ceb929c9d6c996fad170b851005d9494475dfc282ff->leave($__internal_5e206dc20d11802369dd7ceb929c9d6c996fad170b851005d9494475dfc282ff_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
