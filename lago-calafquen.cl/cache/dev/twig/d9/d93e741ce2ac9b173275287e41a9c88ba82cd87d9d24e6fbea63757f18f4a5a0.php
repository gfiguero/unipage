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
        $__internal_e0c0e981e5ba26e3b226fa61164ceda4eeab4da799fee39b7532c8ffcb87fa5e = $this->env->getExtension("native_profiler");
        $__internal_e0c0e981e5ba26e3b226fa61164ceda4eeab4da799fee39b7532c8ffcb87fa5e->enter($__internal_e0c0e981e5ba26e3b226fa61164ceda4eeab4da799fee39b7532c8ffcb87fa5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniUserBundle:Email:password_resetting.email.twig"));

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
        
        $__internal_e0c0e981e5ba26e3b226fa61164ceda4eeab4da799fee39b7532c8ffcb87fa5e->leave($__internal_e0c0e981e5ba26e3b226fa61164ceda4eeab4da799fee39b7532c8ffcb87fa5e_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d6e39cd530916ccee879c9769ab230ab1f89835410b32ae7e5dd40611f268aee = $this->env->getExtension("native_profiler");
        $__internal_d6e39cd530916ccee879c9769ab230ab1f89835410b32ae7e5dd40611f268aee->enter($__internal_d6e39cd530916ccee879c9769ab230ab1f89835410b32ae7e5dd40611f268aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        echo "Reestablecer password";
        
        $__internal_d6e39cd530916ccee879c9769ab230ab1f89835410b32ae7e5dd40611f268aee->leave($__internal_d6e39cd530916ccee879c9769ab230ab1f89835410b32ae7e5dd40611f268aee_prof);

    }

    // line 3
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5347ef579ebef44e1c0253082a7d838ad96a5e403ed701bc151432977a3d6d4b = $this->env->getExtension("native_profiler");
        $__internal_5347ef579ebef44e1c0253082a7d838ad96a5e403ed701bc151432977a3d6d4b->enter($__internal_5347ef579ebef44e1c0253082a7d838ad96a5e403ed701bc151432977a3d6d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

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
        
        $__internal_5347ef579ebef44e1c0253082a7d838ad96a5e403ed701bc151432977a3d6d4b->leave($__internal_5347ef579ebef44e1c0253082a7d838ad96a5e403ed701bc151432977a3d6d4b_prof);

    }

    // line 14
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_71a53e978eed586e585eb8e09ab738276fe66bc57943989911e7264e9bfed600 = $this->env->getExtension("native_profiler");
        $__internal_71a53e978eed586e585eb8e09ab738276fe66bc57943989911e7264e9bfed600->enter($__internal_71a53e978eed586e585eb8e09ab738276fe66bc57943989911e7264e9bfed600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_71a53e978eed586e585eb8e09ab738276fe66bc57943989911e7264e9bfed600->leave($__internal_71a53e978eed586e585eb8e09ab738276fe66bc57943989911e7264e9bfed600_prof);

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
