<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_cc63ce39ce699bab446bc21b604ecd600d90f90f3bd7bc9d9c83e36e60d21874 extends Twig_Template
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
        $__internal_5910884b5672f1a8e6e4d66031a34702c282a741fcc8bb782987d5bca05f9dc7 = $this->env->getExtension("native_profiler");
        $__internal_5910884b5672f1a8e6e4d66031a34702c282a741fcc8bb782987d5bca05f9dc7->enter($__internal_5910884b5672f1a8e6e4d66031a34702c282a741fcc8bb782987d5bca05f9dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_5910884b5672f1a8e6e4d66031a34702c282a741fcc8bb782987d5bca05f9dc7->leave($__internal_5910884b5672f1a8e6e4d66031a34702c282a741fcc8bb782987d5bca05f9dc7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */