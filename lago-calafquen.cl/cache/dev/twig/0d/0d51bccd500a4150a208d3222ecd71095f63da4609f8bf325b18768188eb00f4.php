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
        $__internal_42e06fd87c5401eb11c058764579b95a7f203ec918cf0def36495d1bed351505 = $this->env->getExtension("native_profiler");
        $__internal_42e06fd87c5401eb11c058764579b95a7f203ec918cf0def36495d1bed351505->enter($__internal_42e06fd87c5401eb11c058764579b95a7f203ec918cf0def36495d1bed351505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_42e06fd87c5401eb11c058764579b95a7f203ec918cf0def36495d1bed351505->leave($__internal_42e06fd87c5401eb11c058764579b95a7f203ec918cf0def36495d1bed351505_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_802a2ab31c3b6d7fa3595d4e1a5cc99e93e73093fb0c17488959688a9a57744d = $this->env->getExtension("native_profiler");
        $__internal_802a2ab31c3b6d7fa3595d4e1a5cc99e93e73093fb0c17488959688a9a57744d->enter($__internal_802a2ab31c3b6d7fa3595d4e1a5cc99e93e73093fb0c17488959688a9a57744d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_802a2ab31c3b6d7fa3595d4e1a5cc99e93e73093fb0c17488959688a9a57744d->leave($__internal_802a2ab31c3b6d7fa3595d4e1a5cc99e93e73093fb0c17488959688a9a57744d_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b63a5adc325898ffcfbb275c6d2f5b9ee6396aea5bc8785ed89c0fcd321cd1eb = $this->env->getExtension("native_profiler");
        $__internal_b63a5adc325898ffcfbb275c6d2f5b9ee6396aea5bc8785ed89c0fcd321cd1eb->enter($__internal_b63a5adc325898ffcfbb275c6d2f5b9ee6396aea5bc8785ed89c0fcd321cd1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b63a5adc325898ffcfbb275c6d2f5b9ee6396aea5bc8785ed89c0fcd321cd1eb->leave($__internal_b63a5adc325898ffcfbb275c6d2f5b9ee6396aea5bc8785ed89c0fcd321cd1eb_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_bedede8b1abd3eefba7bf648627d743d0772cddff3b07d75ff81e840a2bad2c8 = $this->env->getExtension("native_profiler");
        $__internal_bedede8b1abd3eefba7bf648627d743d0772cddff3b07d75ff81e840a2bad2c8->enter($__internal_bedede8b1abd3eefba7bf648627d743d0772cddff3b07d75ff81e840a2bad2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bedede8b1abd3eefba7bf648627d743d0772cddff3b07d75ff81e840a2bad2c8->leave($__internal_bedede8b1abd3eefba7bf648627d743d0772cddff3b07d75ff81e840a2bad2c8_prof);

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
