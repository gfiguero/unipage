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
        $__internal_4cd0fb2d3b5422a84aa53b14e78d487808a42f314503786c16b51e108429322d = $this->env->getExtension("native_profiler");
        $__internal_4cd0fb2d3b5422a84aa53b14e78d487808a42f314503786c16b51e108429322d->enter($__internal_4cd0fb2d3b5422a84aa53b14e78d487808a42f314503786c16b51e108429322d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4cd0fb2d3b5422a84aa53b14e78d487808a42f314503786c16b51e108429322d->leave($__internal_4cd0fb2d3b5422a84aa53b14e78d487808a42f314503786c16b51e108429322d_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6e05b48581f9cd914c2792f3c8c6f25368a3ac1e33b51539ac19862bb4b24364 = $this->env->getExtension("native_profiler");
        $__internal_6e05b48581f9cd914c2792f3c8c6f25368a3ac1e33b51539ac19862bb4b24364->enter($__internal_6e05b48581f9cd914c2792f3c8c6f25368a3ac1e33b51539ac19862bb4b24364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6e05b48581f9cd914c2792f3c8c6f25368a3ac1e33b51539ac19862bb4b24364->leave($__internal_6e05b48581f9cd914c2792f3c8c6f25368a3ac1e33b51539ac19862bb4b24364_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5bc2e68073a8d51ec7998a5e6ee96b4e107a836442309ad0dfaf702e5105159e = $this->env->getExtension("native_profiler");
        $__internal_5bc2e68073a8d51ec7998a5e6ee96b4e107a836442309ad0dfaf702e5105159e->enter($__internal_5bc2e68073a8d51ec7998a5e6ee96b4e107a836442309ad0dfaf702e5105159e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5bc2e68073a8d51ec7998a5e6ee96b4e107a836442309ad0dfaf702e5105159e->leave($__internal_5bc2e68073a8d51ec7998a5e6ee96b4e107a836442309ad0dfaf702e5105159e_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_39f265a87dc16f5469cc07026eda4c572fa58062a521dbf37b9b5349b0736afd = $this->env->getExtension("native_profiler");
        $__internal_39f265a87dc16f5469cc07026eda4c572fa58062a521dbf37b9b5349b0736afd->enter($__internal_39f265a87dc16f5469cc07026eda4c572fa58062a521dbf37b9b5349b0736afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_39f265a87dc16f5469cc07026eda4c572fa58062a521dbf37b9b5349b0736afd->leave($__internal_39f265a87dc16f5469cc07026eda4c572fa58062a521dbf37b9b5349b0736afd_prof);

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
