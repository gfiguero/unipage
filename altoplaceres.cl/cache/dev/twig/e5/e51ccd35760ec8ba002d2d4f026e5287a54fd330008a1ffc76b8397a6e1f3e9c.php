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
        $__internal_f9525eca09eb3785b4e81d7dff27132b261a5f3d2e7e92a9400455e308fcd0a2 = $this->env->getExtension("native_profiler");
        $__internal_f9525eca09eb3785b4e81d7dff27132b261a5f3d2e7e92a9400455e308fcd0a2->enter($__internal_f9525eca09eb3785b4e81d7dff27132b261a5f3d2e7e92a9400455e308fcd0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f9525eca09eb3785b4e81d7dff27132b261a5f3d2e7e92a9400455e308fcd0a2->leave($__internal_f9525eca09eb3785b4e81d7dff27132b261a5f3d2e7e92a9400455e308fcd0a2_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f6c5ef1e6a7aaaae3319ffbcba15688883c036f3eb7b16f01736d5275a943078 = $this->env->getExtension("native_profiler");
        $__internal_f6c5ef1e6a7aaaae3319ffbcba15688883c036f3eb7b16f01736d5275a943078->enter($__internal_f6c5ef1e6a7aaaae3319ffbcba15688883c036f3eb7b16f01736d5275a943078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f6c5ef1e6a7aaaae3319ffbcba15688883c036f3eb7b16f01736d5275a943078->leave($__internal_f6c5ef1e6a7aaaae3319ffbcba15688883c036f3eb7b16f01736d5275a943078_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9bf2bfd62ba5b844f05b11696c9acd797cd496f1dd2e611be00a1c76bdc90a7d = $this->env->getExtension("native_profiler");
        $__internal_9bf2bfd62ba5b844f05b11696c9acd797cd496f1dd2e611be00a1c76bdc90a7d->enter($__internal_9bf2bfd62ba5b844f05b11696c9acd797cd496f1dd2e611be00a1c76bdc90a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9bf2bfd62ba5b844f05b11696c9acd797cd496f1dd2e611be00a1c76bdc90a7d->leave($__internal_9bf2bfd62ba5b844f05b11696c9acd797cd496f1dd2e611be00a1c76bdc90a7d_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7b72b6945472dd1d1418e9bd5ce6cf82c57b2f3590e8a4d8c2d6b9f0023fe75a = $this->env->getExtension("native_profiler");
        $__internal_7b72b6945472dd1d1418e9bd5ce6cf82c57b2f3590e8a4d8c2d6b9f0023fe75a->enter($__internal_7b72b6945472dd1d1418e9bd5ce6cf82c57b2f3590e8a4d8c2d6b9f0023fe75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7b72b6945472dd1d1418e9bd5ce6cf82c57b2f3590e8a4d8c2d6b9f0023fe75a->leave($__internal_7b72b6945472dd1d1418e9bd5ce6cf82c57b2f3590e8a4d8c2d6b9f0023fe75a_prof);

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
