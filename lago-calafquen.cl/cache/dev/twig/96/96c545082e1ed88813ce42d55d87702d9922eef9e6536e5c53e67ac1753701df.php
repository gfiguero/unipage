<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_2c09aac07a2998e0240728d165545fb64fac5fd305de244e7c19ab8bc0e179fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af6e6ffa0d7ca2b186d75ba1206d59ae3b04d8a0ef00fd97c87189292c7ecd4d = $this->env->getExtension("native_profiler");
        $__internal_af6e6ffa0d7ca2b186d75ba1206d59ae3b04d8a0ef00fd97c87189292c7ecd4d->enter($__internal_af6e6ffa0d7ca2b186d75ba1206d59ae3b04d8a0ef00fd97c87189292c7ecd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_af6e6ffa0d7ca2b186d75ba1206d59ae3b04d8a0ef00fd97c87189292c7ecd4d->leave($__internal_af6e6ffa0d7ca2b186d75ba1206d59ae3b04d8a0ef00fd97c87189292c7ecd4d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
