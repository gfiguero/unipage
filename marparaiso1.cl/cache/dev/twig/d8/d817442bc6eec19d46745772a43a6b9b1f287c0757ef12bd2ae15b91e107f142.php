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
        $__internal_009868532684746020a03182f3a96dac57183d165e533d640804bf4213079b8b = $this->env->getExtension("native_profiler");
        $__internal_009868532684746020a03182f3a96dac57183d165e533d640804bf4213079b8b->enter($__internal_009868532684746020a03182f3a96dac57183d165e533d640804bf4213079b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_009868532684746020a03182f3a96dac57183d165e533d640804bf4213079b8b->leave($__internal_009868532684746020a03182f3a96dac57183d165e533d640804bf4213079b8b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c5497642a2212c2f2348763e0a1f68e09b54148fa46f3b424bed857204af34d9 = $this->env->getExtension("native_profiler");
        $__internal_c5497642a2212c2f2348763e0a1f68e09b54148fa46f3b424bed857204af34d9->enter($__internal_c5497642a2212c2f2348763e0a1f68e09b54148fa46f3b424bed857204af34d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c5497642a2212c2f2348763e0a1f68e09b54148fa46f3b424bed857204af34d9->leave($__internal_c5497642a2212c2f2348763e0a1f68e09b54148fa46f3b424bed857204af34d9_prof);

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
