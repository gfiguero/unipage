<?php

/* UniUserBundle:Email:password_resetting.email.twig */
class __TwigTemplate_8998f77634ad8dbffacef523626a047291cb9f82f232a4913341734f232c19cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3bc02f557ffddd689d70b13754df0be7a173f6c5f901e0bb06dc423f95a8f87b = $this->env->getExtension("native_profiler");
        $__internal_3bc02f557ffddd689d70b13754df0be7a173f6c5f901e0bb06dc423f95a8f87b->enter($__internal_3bc02f557ffddd689d70b13754df0be7a173f6c5f901e0bb06dc423f95a8f87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniUserBundle:Email:password_resetting.email.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3bc02f557ffddd689d70b13754df0be7a173f6c5f901e0bb06dc423f95a8f87b->leave($__internal_3bc02f557ffddd689d70b13754df0be7a173f6c5f901e0bb06dc423f95a8f87b_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5d9a078db3e1ba631bf4030cf67dec2e570fc7bd328e9dc54d6e1574d4a90bed = $this->env->getExtension("native_profiler");
        $__internal_5d9a078db3e1ba631bf4030cf67dec2e570fc7bd328e9dc54d6e1574d4a90bed->enter($__internal_5d9a078db3e1ba631bf4030cf67dec2e570fc7bd328e9dc54d6e1574d4a90bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        echo "Reestablecer password";
        
        $__internal_5d9a078db3e1ba631bf4030cf67dec2e570fc7bd328e9dc54d6e1574d4a90bed->leave($__internal_5d9a078db3e1ba631bf4030cf67dec2e570fc7bd328e9dc54d6e1574d4a90bed_prof);

    }

    // line 3
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a8537b7ced12fd3683099dcff94e1d6763cc11f78da7e55c65fca37b2c9a62b7 = $this->env->getExtension("native_profiler");
        $__internal_a8537b7ced12fd3683099dcff94e1d6763cc11f78da7e55c65fca37b2c9a62b7->enter($__internal_a8537b7ced12fd3683099dcff94e1d6763cc11f78da7e55c65fca37b2c9a62b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 5
        echo "Hola ";
        echo $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array());
        echo " !

Puedes reestablecer tu password accediendo a ";
        // line 7
        echo (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"));
        echo "

Saludos,
el equipo de uniSign.
";
        
        $__internal_a8537b7ced12fd3683099dcff94e1d6763cc11f78da7e55c65fca37b2c9a62b7->leave($__internal_a8537b7ced12fd3683099dcff94e1d6763cc11f78da7e55c65fca37b2c9a62b7_prof);

    }

    // line 14
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_569b7a3506cd41cf18e5db724156170b43b6e82c9615673543a783430f4fd1de = $this->env->getExtension("native_profiler");
        $__internal_569b7a3506cd41cf18e5db724156170b43b6e82c9615673543a783430f4fd1de->enter($__internal_569b7a3506cd41cf18e5db724156170b43b6e82c9615673543a783430f4fd1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_569b7a3506cd41cf18e5db724156170b43b6e82c9615673543a783430f4fd1de->leave($__internal_569b7a3506cd41cf18e5db724156170b43b6e82c9615673543a783430f4fd1de_prof);

    }

    public function getTemplateName()
    {
        return "UniUserBundle:Email:password_resetting.email.twig";
    }

    public function getDebugInfo()
    {
        return array (  78 => 14,  66 => 7,  60 => 5,  54 => 3,  42 => 1,  35 => 14,  32 => 13,  30 => 3,  27 => 2,  25 => 1,);
    }
}
/* {% block subject %}Reestablecer password{% endblock %}*/
/* */
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* Hola {{ user.username }} !*/
/* */
/* Puedes reestablecer tu password accediendo a {{ confirmationUrl }}*/
/* */
/* Saludos,*/
/* el equipo de uniSign.*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* */
/* {% block body_html %}*/
/* {% endblock %}*/
