<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_b2e35ab42306f57e3a249b0545bd852bf77defc33ec5d4580b7169b2777a8ed0 extends Twig_Template
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
        $__internal_fc13ff9050fbf1a9bfdb946b23551f641c2bf7d3d186c6bb94bfa730cab4a472 = $this->env->getExtension("native_profiler");
        $__internal_fc13ff9050fbf1a9bfdb946b23551f641c2bf7d3d186c6bb94bfa730cab4a472->enter($__internal_fc13ff9050fbf1a9bfdb946b23551f641c2bf7d3d186c6bb94bfa730cab4a472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fc13ff9050fbf1a9bfdb946b23551f641c2bf7d3d186c6bb94bfa730cab4a472->leave($__internal_fc13ff9050fbf1a9bfdb946b23551f641c2bf7d3d186c6bb94bfa730cab4a472_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_936841742b27ef5c6f81f8b1df47625869058a39a780777ac13d3ee8b5d27686 = $this->env->getExtension("native_profiler");
        $__internal_936841742b27ef5c6f81f8b1df47625869058a39a780777ac13d3ee8b5d27686->enter($__internal_936841742b27ef5c6f81f8b1df47625869058a39a780777ac13d3ee8b5d27686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_936841742b27ef5c6f81f8b1df47625869058a39a780777ac13d3ee8b5d27686->leave($__internal_936841742b27ef5c6f81f8b1df47625869058a39a780777ac13d3ee8b5d27686_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_325cbc8c859fc31354ff0b64bc6403cb3621eb9c752fcc24b1b86cf5cd88a023 = $this->env->getExtension("native_profiler");
        $__internal_325cbc8c859fc31354ff0b64bc6403cb3621eb9c752fcc24b1b86cf5cd88a023->enter($__internal_325cbc8c859fc31354ff0b64bc6403cb3621eb9c752fcc24b1b86cf5cd88a023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_325cbc8c859fc31354ff0b64bc6403cb3621eb9c752fcc24b1b86cf5cd88a023->leave($__internal_325cbc8c859fc31354ff0b64bc6403cb3621eb9c752fcc24b1b86cf5cd88a023_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e9eecf6f78811419757875d440fdce02f969168c4117ef28e7b6c3836000a111 = $this->env->getExtension("native_profiler");
        $__internal_e9eecf6f78811419757875d440fdce02f969168c4117ef28e7b6c3836000a111->enter($__internal_e9eecf6f78811419757875d440fdce02f969168c4117ef28e7b6c3836000a111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e9eecf6f78811419757875d440fdce02f969168c4117ef28e7b6c3836000a111->leave($__internal_e9eecf6f78811419757875d440fdce02f969168c4117ef28e7b6c3836000a111_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
