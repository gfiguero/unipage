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
        $__internal_9916b6b850dc15f38d49efe15eba4ab4641ea92118e870559d23658bdcde4351 = $this->env->getExtension("native_profiler");
        $__internal_9916b6b850dc15f38d49efe15eba4ab4641ea92118e870559d23658bdcde4351->enter($__internal_9916b6b850dc15f38d49efe15eba4ab4641ea92118e870559d23658bdcde4351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9916b6b850dc15f38d49efe15eba4ab4641ea92118e870559d23658bdcde4351->leave($__internal_9916b6b850dc15f38d49efe15eba4ab4641ea92118e870559d23658bdcde4351_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_92959a2258a023cf4f14ad4178fe1c75108fffdf6cf6adb6ae9216cf93950729 = $this->env->getExtension("native_profiler");
        $__internal_92959a2258a023cf4f14ad4178fe1c75108fffdf6cf6adb6ae9216cf93950729->enter($__internal_92959a2258a023cf4f14ad4178fe1c75108fffdf6cf6adb6ae9216cf93950729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_92959a2258a023cf4f14ad4178fe1c75108fffdf6cf6adb6ae9216cf93950729->leave($__internal_92959a2258a023cf4f14ad4178fe1c75108fffdf6cf6adb6ae9216cf93950729_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_377a6796e2c3d3832cba7cc55fe0461d119fc15b667be77f9339d27517a67863 = $this->env->getExtension("native_profiler");
        $__internal_377a6796e2c3d3832cba7cc55fe0461d119fc15b667be77f9339d27517a67863->enter($__internal_377a6796e2c3d3832cba7cc55fe0461d119fc15b667be77f9339d27517a67863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_377a6796e2c3d3832cba7cc55fe0461d119fc15b667be77f9339d27517a67863->leave($__internal_377a6796e2c3d3832cba7cc55fe0461d119fc15b667be77f9339d27517a67863_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_30e7888886ddbc4c5f50cb25c9a84404257ee032448c27c19812fb7a3618f493 = $this->env->getExtension("native_profiler");
        $__internal_30e7888886ddbc4c5f50cb25c9a84404257ee032448c27c19812fb7a3618f493->enter($__internal_30e7888886ddbc4c5f50cb25c9a84404257ee032448c27c19812fb7a3618f493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_30e7888886ddbc4c5f50cb25c9a84404257ee032448c27c19812fb7a3618f493->leave($__internal_30e7888886ddbc4c5f50cb25c9a84404257ee032448c27c19812fb7a3618f493_prof);

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
