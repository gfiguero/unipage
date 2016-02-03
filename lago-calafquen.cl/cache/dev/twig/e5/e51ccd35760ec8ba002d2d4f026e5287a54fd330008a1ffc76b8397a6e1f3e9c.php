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
        $__internal_8d4d3ed5b73aa1e206accf867f06c39c1cef2832075be35fdc2b40ff212a7ddc = $this->env->getExtension("native_profiler");
        $__internal_8d4d3ed5b73aa1e206accf867f06c39c1cef2832075be35fdc2b40ff212a7ddc->enter($__internal_8d4d3ed5b73aa1e206accf867f06c39c1cef2832075be35fdc2b40ff212a7ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8d4d3ed5b73aa1e206accf867f06c39c1cef2832075be35fdc2b40ff212a7ddc->leave($__internal_8d4d3ed5b73aa1e206accf867f06c39c1cef2832075be35fdc2b40ff212a7ddc_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_99a50fb2806713cd16a3cc5fd361b53833d134b0e7d50d0be48b69d605fb9b35 = $this->env->getExtension("native_profiler");
        $__internal_99a50fb2806713cd16a3cc5fd361b53833d134b0e7d50d0be48b69d605fb9b35->enter($__internal_99a50fb2806713cd16a3cc5fd361b53833d134b0e7d50d0be48b69d605fb9b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_99a50fb2806713cd16a3cc5fd361b53833d134b0e7d50d0be48b69d605fb9b35->leave($__internal_99a50fb2806713cd16a3cc5fd361b53833d134b0e7d50d0be48b69d605fb9b35_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7ee859d71f284b4e86666bc7db7a7948f4669ea535928879608aab7c3d742c16 = $this->env->getExtension("native_profiler");
        $__internal_7ee859d71f284b4e86666bc7db7a7948f4669ea535928879608aab7c3d742c16->enter($__internal_7ee859d71f284b4e86666bc7db7a7948f4669ea535928879608aab7c3d742c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7ee859d71f284b4e86666bc7db7a7948f4669ea535928879608aab7c3d742c16->leave($__internal_7ee859d71f284b4e86666bc7db7a7948f4669ea535928879608aab7c3d742c16_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_55258215d065c5a258ef88561f16a79860a44744022c518ebae9e907836c81fe = $this->env->getExtension("native_profiler");
        $__internal_55258215d065c5a258ef88561f16a79860a44744022c518ebae9e907836c81fe->enter($__internal_55258215d065c5a258ef88561f16a79860a44744022c518ebae9e907836c81fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_55258215d065c5a258ef88561f16a79860a44744022c518ebae9e907836c81fe->leave($__internal_55258215d065c5a258ef88561f16a79860a44744022c518ebae9e907836c81fe_prof);

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
