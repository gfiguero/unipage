<?php

/* :Page:meta.html.twig */
class __TwigTemplate_7bc4f7db5b20125e04bdbb8e2b7fefa40a5ac884728ccfb9aea0feeca566aedd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_053c5c004e9aaced79199757369109c9c0722fe34f08bb7c041df788aa85ddf5 = $this->env->getExtension("native_profiler");
        $__internal_053c5c004e9aaced79199757369109c9c0722fe34f08bb7c041df788aa85ddf5->enter($__internal_053c5c004e9aaced79199757369109c9c0722fe34f08bb7c041df788aa85ddf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:meta.html.twig"));

        // line 1
        $this->displayBlock('meta', $context, $blocks);
        
        $__internal_053c5c004e9aaced79199757369109c9c0722fe34f08bb7c041df788aa85ddf5->leave($__internal_053c5c004e9aaced79199757369109c9c0722fe34f08bb7c041df788aa85ddf5_prof);

    }

    public function block_meta($context, array $blocks = array())
    {
        $__internal_fcffce682e8d9698a62c917da09ff4819a252acbf3b720c91c64d546de17c9c8 = $this->env->getExtension("native_profiler");
        $__internal_fcffce682e8d9698a62c917da09ff4819a252acbf3b720c91c64d546de17c9c8->enter($__internal_fcffce682e8d9698a62c917da09ff4819a252acbf3b720c91c64d546de17c9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 2
        echo "    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"uniSign\">
";
        
        $__internal_fcffce682e8d9698a62c917da09ff4819a252acbf3b720c91c64d546de17c9c8->leave($__internal_fcffce682e8d9698a62c917da09ff4819a252acbf3b720c91c64d546de17c9c8_prof);

    }

    public function getTemplateName()
    {
        return ":Page:meta.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }
}
/* {% block meta %}*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="uniSign">*/
/* {% endblock %}*/
