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
        $__internal_c2dc88e7eeea97daba20dd39103c54202125551b6c246ffee3b40bee11263d4e = $this->env->getExtension("native_profiler");
        $__internal_c2dc88e7eeea97daba20dd39103c54202125551b6c246ffee3b40bee11263d4e->enter($__internal_c2dc88e7eeea97daba20dd39103c54202125551b6c246ffee3b40bee11263d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2dc88e7eeea97daba20dd39103c54202125551b6c246ffee3b40bee11263d4e->leave($__internal_c2dc88e7eeea97daba20dd39103c54202125551b6c246ffee3b40bee11263d4e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c5b48b77355a90eed3340d5af132240a80adbe6cbac9eba6d920eecaf4b0e07 = $this->env->getExtension("native_profiler");
        $__internal_3c5b48b77355a90eed3340d5af132240a80adbe6cbac9eba6d920eecaf4b0e07->enter($__internal_3c5b48b77355a90eed3340d5af132240a80adbe6cbac9eba6d920eecaf4b0e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_3c5b48b77355a90eed3340d5af132240a80adbe6cbac9eba6d920eecaf4b0e07->leave($__internal_3c5b48b77355a90eed3340d5af132240a80adbe6cbac9eba6d920eecaf4b0e07_prof);

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
