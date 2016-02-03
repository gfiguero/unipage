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
        $__internal_f3844e3ab52d4ef973559a69ceccce60d35ecd9ec13531aacf42e9a15f04efe4 = $this->env->getExtension("native_profiler");
        $__internal_f3844e3ab52d4ef973559a69ceccce60d35ecd9ec13531aacf42e9a15f04efe4->enter($__internal_f3844e3ab52d4ef973559a69ceccce60d35ecd9ec13531aacf42e9a15f04efe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f3844e3ab52d4ef973559a69ceccce60d35ecd9ec13531aacf42e9a15f04efe4->leave($__internal_f3844e3ab52d4ef973559a69ceccce60d35ecd9ec13531aacf42e9a15f04efe4_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3b2047b9c7445436a833c648152bb689576e4ccd03d12b9f553e843c32b95d36 = $this->env->getExtension("native_profiler");
        $__internal_3b2047b9c7445436a833c648152bb689576e4ccd03d12b9f553e843c32b95d36->enter($__internal_3b2047b9c7445436a833c648152bb689576e4ccd03d12b9f553e843c32b95d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3b2047b9c7445436a833c648152bb689576e4ccd03d12b9f553e843c32b95d36->leave($__internal_3b2047b9c7445436a833c648152bb689576e4ccd03d12b9f553e843c32b95d36_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_caa853def8025ff2d73ba23dac375a133b4e8a09c28fc5ac50cf2bd9a8f22336 = $this->env->getExtension("native_profiler");
        $__internal_caa853def8025ff2d73ba23dac375a133b4e8a09c28fc5ac50cf2bd9a8f22336->enter($__internal_caa853def8025ff2d73ba23dac375a133b4e8a09c28fc5ac50cf2bd9a8f22336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_caa853def8025ff2d73ba23dac375a133b4e8a09c28fc5ac50cf2bd9a8f22336->leave($__internal_caa853def8025ff2d73ba23dac375a133b4e8a09c28fc5ac50cf2bd9a8f22336_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9bac3aabff7fd7fc5d70997bcdcb4569f0f2b15fc835a034868bc7e0c8037d3a = $this->env->getExtension("native_profiler");
        $__internal_9bac3aabff7fd7fc5d70997bcdcb4569f0f2b15fc835a034868bc7e0c8037d3a->enter($__internal_9bac3aabff7fd7fc5d70997bcdcb4569f0f2b15fc835a034868bc7e0c8037d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9bac3aabff7fd7fc5d70997bcdcb4569f0f2b15fc835a034868bc7e0c8037d3a->leave($__internal_9bac3aabff7fd7fc5d70997bcdcb4569f0f2b15fc835a034868bc7e0c8037d3a_prof);

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
