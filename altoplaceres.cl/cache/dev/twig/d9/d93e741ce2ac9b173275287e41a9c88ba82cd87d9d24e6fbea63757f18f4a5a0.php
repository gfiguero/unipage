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
        $__internal_9875f04b9307225a1636d477a10e97c139e0e819f5e37ed9332e1027356a22c8 = $this->env->getExtension("native_profiler");
        $__internal_9875f04b9307225a1636d477a10e97c139e0e819f5e37ed9332e1027356a22c8->enter($__internal_9875f04b9307225a1636d477a10e97c139e0e819f5e37ed9332e1027356a22c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniUserBundle:Email:password_resetting.email.twig"));

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
        
        $__internal_9875f04b9307225a1636d477a10e97c139e0e819f5e37ed9332e1027356a22c8->leave($__internal_9875f04b9307225a1636d477a10e97c139e0e819f5e37ed9332e1027356a22c8_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0721494dad24bf9fd76716d2ac1884865700a02d7882b1b8d279e95e8e10bfaf = $this->env->getExtension("native_profiler");
        $__internal_0721494dad24bf9fd76716d2ac1884865700a02d7882b1b8d279e95e8e10bfaf->enter($__internal_0721494dad24bf9fd76716d2ac1884865700a02d7882b1b8d279e95e8e10bfaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        echo "Reestablecer password";
        
        $__internal_0721494dad24bf9fd76716d2ac1884865700a02d7882b1b8d279e95e8e10bfaf->leave($__internal_0721494dad24bf9fd76716d2ac1884865700a02d7882b1b8d279e95e8e10bfaf_prof);

    }

    // line 3
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a373e633936d31275b026cb478a619788a1e5b5c21f7df820d2eab777ccfe35e = $this->env->getExtension("native_profiler");
        $__internal_a373e633936d31275b026cb478a619788a1e5b5c21f7df820d2eab777ccfe35e->enter($__internal_a373e633936d31275b026cb478a619788a1e5b5c21f7df820d2eab777ccfe35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

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
        
        $__internal_a373e633936d31275b026cb478a619788a1e5b5c21f7df820d2eab777ccfe35e->leave($__internal_a373e633936d31275b026cb478a619788a1e5b5c21f7df820d2eab777ccfe35e_prof);

    }

    // line 14
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d4ebc9df6face66fbd2a1ca708993c6a4330c113bfbd77633702e47c48db671c = $this->env->getExtension("native_profiler");
        $__internal_d4ebc9df6face66fbd2a1ca708993c6a4330c113bfbd77633702e47c48db671c->enter($__internal_d4ebc9df6face66fbd2a1ca708993c6a4330c113bfbd77633702e47c48db671c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d4ebc9df6face66fbd2a1ca708993c6a4330c113bfbd77633702e47c48db671c->leave($__internal_d4ebc9df6face66fbd2a1ca708993c6a4330c113bfbd77633702e47c48db671c_prof);

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
