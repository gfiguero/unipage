<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_7cd9345e0e2c644548a61d6f13abd5d7ea90a4890fcebb9951bf8d35094ef884 extends Twig_Template
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
        $__internal_88b1f8d34722b32aefa7a1ed4bc23207eb4cf118ee6c452a1ea6500b14517972 = $this->env->getExtension("native_profiler");
        $__internal_88b1f8d34722b32aefa7a1ed4bc23207eb4cf118ee6c452a1ea6500b14517972->enter($__internal_88b1f8d34722b32aefa7a1ed4bc23207eb4cf118ee6c452a1ea6500b14517972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_88b1f8d34722b32aefa7a1ed4bc23207eb4cf118ee6c452a1ea6500b14517972->leave($__internal_88b1f8d34722b32aefa7a1ed4bc23207eb4cf118ee6c452a1ea6500b14517972_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d0210e75849075685ef5345b6271ef1307eba2927b4402729fb7e3eab909351c = $this->env->getExtension("native_profiler");
        $__internal_d0210e75849075685ef5345b6271ef1307eba2927b4402729fb7e3eab909351c->enter($__internal_d0210e75849075685ef5345b6271ef1307eba2927b4402729fb7e3eab909351c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d0210e75849075685ef5345b6271ef1307eba2927b4402729fb7e3eab909351c->leave($__internal_d0210e75849075685ef5345b6271ef1307eba2927b4402729fb7e3eab909351c_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_eec9bff2e4c1cbe0f4d25c2d0c09cbdce822d3de2d355cde484800c3f8432d0c = $this->env->getExtension("native_profiler");
        $__internal_eec9bff2e4c1cbe0f4d25c2d0c09cbdce822d3de2d355cde484800c3f8432d0c->enter($__internal_eec9bff2e4c1cbe0f4d25c2d0c09cbdce822d3de2d355cde484800c3f8432d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_eec9bff2e4c1cbe0f4d25c2d0c09cbdce822d3de2d355cde484800c3f8432d0c->leave($__internal_eec9bff2e4c1cbe0f4d25c2d0c09cbdce822d3de2d355cde484800c3f8432d0c_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a01b32a2fb0103e7510eafd5f8ad1bb9ea7bdefa4294b6e3a91ffe7d7c280b49 = $this->env->getExtension("native_profiler");
        $__internal_a01b32a2fb0103e7510eafd5f8ad1bb9ea7bdefa4294b6e3a91ffe7d7c280b49->enter($__internal_a01b32a2fb0103e7510eafd5f8ad1bb9ea7bdefa4294b6e3a91ffe7d7c280b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a01b32a2fb0103e7510eafd5f8ad1bb9ea7bdefa4294b6e3a91ffe7d7c280b49->leave($__internal_a01b32a2fb0103e7510eafd5f8ad1bb9ea7bdefa4294b6e3a91ffe7d7c280b49_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
