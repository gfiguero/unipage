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
        $__internal_2f7dd5df3778542602efb9596d557e4db49462915ac2d25c41fe72ce1e03c46b = $this->env->getExtension("native_profiler");
        $__internal_2f7dd5df3778542602efb9596d557e4db49462915ac2d25c41fe72ce1e03c46b->enter($__internal_2f7dd5df3778542602efb9596d557e4db49462915ac2d25c41fe72ce1e03c46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f7dd5df3778542602efb9596d557e4db49462915ac2d25c41fe72ce1e03c46b->leave($__internal_2f7dd5df3778542602efb9596d557e4db49462915ac2d25c41fe72ce1e03c46b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5bef774b2a88aa2e7e400d330fae60bd1928c5f5d11d53898919f33e59bd6a42 = $this->env->getExtension("native_profiler");
        $__internal_5bef774b2a88aa2e7e400d330fae60bd1928c5f5d11d53898919f33e59bd6a42->enter($__internal_5bef774b2a88aa2e7e400d330fae60bd1928c5f5d11d53898919f33e59bd6a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5bef774b2a88aa2e7e400d330fae60bd1928c5f5d11d53898919f33e59bd6a42->leave($__internal_5bef774b2a88aa2e7e400d330fae60bd1928c5f5d11d53898919f33e59bd6a42_prof);

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
