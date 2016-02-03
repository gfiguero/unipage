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
        $__internal_76a11f069054bba42f4050fa8b2694467c32210d09eb77eb040ef457fc5ce200 = $this->env->getExtension("native_profiler");
        $__internal_76a11f069054bba42f4050fa8b2694467c32210d09eb77eb040ef457fc5ce200->enter($__internal_76a11f069054bba42f4050fa8b2694467c32210d09eb77eb040ef457fc5ce200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_76a11f069054bba42f4050fa8b2694467c32210d09eb77eb040ef457fc5ce200->leave($__internal_76a11f069054bba42f4050fa8b2694467c32210d09eb77eb040ef457fc5ce200_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f0a7359ea91d721f4d11d0a42dd0e1f579251a987a3196253d207ec776810498 = $this->env->getExtension("native_profiler");
        $__internal_f0a7359ea91d721f4d11d0a42dd0e1f579251a987a3196253d207ec776810498->enter($__internal_f0a7359ea91d721f4d11d0a42dd0e1f579251a987a3196253d207ec776810498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f0a7359ea91d721f4d11d0a42dd0e1f579251a987a3196253d207ec776810498->leave($__internal_f0a7359ea91d721f4d11d0a42dd0e1f579251a987a3196253d207ec776810498_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_67ffd08c768164b63f85cc2fdb0553809a404398fa83b3ca8c609ff56d525390 = $this->env->getExtension("native_profiler");
        $__internal_67ffd08c768164b63f85cc2fdb0553809a404398fa83b3ca8c609ff56d525390->enter($__internal_67ffd08c768164b63f85cc2fdb0553809a404398fa83b3ca8c609ff56d525390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_67ffd08c768164b63f85cc2fdb0553809a404398fa83b3ca8c609ff56d525390->leave($__internal_67ffd08c768164b63f85cc2fdb0553809a404398fa83b3ca8c609ff56d525390_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_85e36f72b33243f94a4ab461c7590b7070f606de33796925b90cc0712ca7f207 = $this->env->getExtension("native_profiler");
        $__internal_85e36f72b33243f94a4ab461c7590b7070f606de33796925b90cc0712ca7f207->enter($__internal_85e36f72b33243f94a4ab461c7590b7070f606de33796925b90cc0712ca7f207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_85e36f72b33243f94a4ab461c7590b7070f606de33796925b90cc0712ca7f207->leave($__internal_85e36f72b33243f94a4ab461c7590b7070f606de33796925b90cc0712ca7f207_prof);

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
