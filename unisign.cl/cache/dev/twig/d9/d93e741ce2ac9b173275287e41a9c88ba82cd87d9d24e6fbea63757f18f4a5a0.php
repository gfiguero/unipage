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
        $__internal_264c10d3c52494af94c4b8f93c282f5dbbf3bb1c1146d2c0c11b5ba6fd2dca02 = $this->env->getExtension("native_profiler");
        $__internal_264c10d3c52494af94c4b8f93c282f5dbbf3bb1c1146d2c0c11b5ba6fd2dca02->enter($__internal_264c10d3c52494af94c4b8f93c282f5dbbf3bb1c1146d2c0c11b5ba6fd2dca02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniUserBundle:Email:password_resetting.email.twig"));

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
        
        $__internal_264c10d3c52494af94c4b8f93c282f5dbbf3bb1c1146d2c0c11b5ba6fd2dca02->leave($__internal_264c10d3c52494af94c4b8f93c282f5dbbf3bb1c1146d2c0c11b5ba6fd2dca02_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_86f907b4e1b7b0bb74503bbc35594ad06e4ba889248ebdfbe7efdc45d1a35c4d = $this->env->getExtension("native_profiler");
        $__internal_86f907b4e1b7b0bb74503bbc35594ad06e4ba889248ebdfbe7efdc45d1a35c4d->enter($__internal_86f907b4e1b7b0bb74503bbc35594ad06e4ba889248ebdfbe7efdc45d1a35c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        echo "Reestablecer password";
        
        $__internal_86f907b4e1b7b0bb74503bbc35594ad06e4ba889248ebdfbe7efdc45d1a35c4d->leave($__internal_86f907b4e1b7b0bb74503bbc35594ad06e4ba889248ebdfbe7efdc45d1a35c4d_prof);

    }

    // line 3
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_56b21efa2490566d0d2e627d6613126d63164f3df48588aa0c787d9d59d25dab = $this->env->getExtension("native_profiler");
        $__internal_56b21efa2490566d0d2e627d6613126d63164f3df48588aa0c787d9d59d25dab->enter($__internal_56b21efa2490566d0d2e627d6613126d63164f3df48588aa0c787d9d59d25dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

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
        
        $__internal_56b21efa2490566d0d2e627d6613126d63164f3df48588aa0c787d9d59d25dab->leave($__internal_56b21efa2490566d0d2e627d6613126d63164f3df48588aa0c787d9d59d25dab_prof);

    }

    // line 14
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c797c7e9d3ea7a00f3477b07fdbcdf64f22823746a3096cfcb08d053d53a3695 = $this->env->getExtension("native_profiler");
        $__internal_c797c7e9d3ea7a00f3477b07fdbcdf64f22823746a3096cfcb08d053d53a3695->enter($__internal_c797c7e9d3ea7a00f3477b07fdbcdf64f22823746a3096cfcb08d053d53a3695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c797c7e9d3ea7a00f3477b07fdbcdf64f22823746a3096cfcb08d053d53a3695->leave($__internal_c797c7e9d3ea7a00f3477b07fdbcdf64f22823746a3096cfcb08d053d53a3695_prof);

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
