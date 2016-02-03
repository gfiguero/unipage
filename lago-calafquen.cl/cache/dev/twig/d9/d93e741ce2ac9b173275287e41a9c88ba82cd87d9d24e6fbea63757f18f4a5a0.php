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
        $__internal_49f588aa7e1152d8359a71e4b29759e15d25a4796959184a1f8cbb84d09828c9 = $this->env->getExtension("native_profiler");
        $__internal_49f588aa7e1152d8359a71e4b29759e15d25a4796959184a1f8cbb84d09828c9->enter($__internal_49f588aa7e1152d8359a71e4b29759e15d25a4796959184a1f8cbb84d09828c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniUserBundle:Email:password_resetting.email.twig"));

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
        
        $__internal_49f588aa7e1152d8359a71e4b29759e15d25a4796959184a1f8cbb84d09828c9->leave($__internal_49f588aa7e1152d8359a71e4b29759e15d25a4796959184a1f8cbb84d09828c9_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_dba6642ae7e5c5b9272f2be9c7dad98f6cec28f6225c763860c9a598523ef226 = $this->env->getExtension("native_profiler");
        $__internal_dba6642ae7e5c5b9272f2be9c7dad98f6cec28f6225c763860c9a598523ef226->enter($__internal_dba6642ae7e5c5b9272f2be9c7dad98f6cec28f6225c763860c9a598523ef226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        echo "Reestablecer password";
        
        $__internal_dba6642ae7e5c5b9272f2be9c7dad98f6cec28f6225c763860c9a598523ef226->leave($__internal_dba6642ae7e5c5b9272f2be9c7dad98f6cec28f6225c763860c9a598523ef226_prof);

    }

    // line 3
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6d5148e21fdd47cb9331ac2aec5db7821f57ee02daebdc244e4480c554859e36 = $this->env->getExtension("native_profiler");
        $__internal_6d5148e21fdd47cb9331ac2aec5db7821f57ee02daebdc244e4480c554859e36->enter($__internal_6d5148e21fdd47cb9331ac2aec5db7821f57ee02daebdc244e4480c554859e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

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
        
        $__internal_6d5148e21fdd47cb9331ac2aec5db7821f57ee02daebdc244e4480c554859e36->leave($__internal_6d5148e21fdd47cb9331ac2aec5db7821f57ee02daebdc244e4480c554859e36_prof);

    }

    // line 14
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d6280b62524da80e628e9d23bb7c07b1c08914c42652a683c082e35bc802ff28 = $this->env->getExtension("native_profiler");
        $__internal_d6280b62524da80e628e9d23bb7c07b1c08914c42652a683c082e35bc802ff28->enter($__internal_d6280b62524da80e628e9d23bb7c07b1c08914c42652a683c082e35bc802ff28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d6280b62524da80e628e9d23bb7c07b1c08914c42652a683c082e35bc802ff28->leave($__internal_d6280b62524da80e628e9d23bb7c07b1c08914c42652a683c082e35bc802ff28_prof);

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
