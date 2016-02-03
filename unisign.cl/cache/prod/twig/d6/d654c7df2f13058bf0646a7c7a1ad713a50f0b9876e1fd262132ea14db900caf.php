<?php

/* UniUserBundle:Email:password_resetting.email.twig */
class __TwigTemplate_01345aa32c4090fa404dcb6d125624d35a0023d6366a883f6d968f118fccfa61 extends Twig_Template
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
    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        echo "Reestablecer password";
    }

    // line 3
    public function block_body_text($context, array $blocks = array())
    {
        // line 5
        echo "Hola ";
        echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array());
        echo " !

Puedes reestablecer tu password accediendo a ";
        // line 7
        echo (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : null);
        echo "

Saludos,
el equipo de uniSign.
";
    }

    // line 14
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "UniUserBundle:Email:password_resetting.email.twig";
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  51 => 7,  45 => 5,  42 => 3,  36 => 1,  32 => 14,  29 => 13,  27 => 3,  24 => 2,  22 => 1,);
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
