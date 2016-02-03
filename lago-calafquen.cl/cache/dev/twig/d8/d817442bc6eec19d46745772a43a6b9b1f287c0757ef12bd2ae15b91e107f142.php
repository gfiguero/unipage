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
        $__internal_7a3d4615544c4b381b189a00e16bb9449571d36d65f9b01a365bb60e8c58366c = $this->env->getExtension("native_profiler");
        $__internal_7a3d4615544c4b381b189a00e16bb9449571d36d65f9b01a365bb60e8c58366c->enter($__internal_7a3d4615544c4b381b189a00e16bb9449571d36d65f9b01a365bb60e8c58366c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a3d4615544c4b381b189a00e16bb9449571d36d65f9b01a365bb60e8c58366c->leave($__internal_7a3d4615544c4b381b189a00e16bb9449571d36d65f9b01a365bb60e8c58366c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0c6e2018c9b86d5ae05df26daa3423e866a847214c0670ba44e6fb2be5a901d6 = $this->env->getExtension("native_profiler");
        $__internal_0c6e2018c9b86d5ae05df26daa3423e866a847214c0670ba44e6fb2be5a901d6->enter($__internal_0c6e2018c9b86d5ae05df26daa3423e866a847214c0670ba44e6fb2be5a901d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0c6e2018c9b86d5ae05df26daa3423e866a847214c0670ba44e6fb2be5a901d6->leave($__internal_0c6e2018c9b86d5ae05df26daa3423e866a847214c0670ba44e6fb2be5a901d6_prof);

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
