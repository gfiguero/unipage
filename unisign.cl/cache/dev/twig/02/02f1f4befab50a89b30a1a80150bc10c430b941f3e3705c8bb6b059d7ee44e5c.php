<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_4148b726e3646c9e50b6adb473f5a9ad15ba93b08d4fc7d95b4fcd35f9686b84 extends Twig_Template
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
        $__internal_e6bf37adbf12e83aba71a432bace5ef5c9551e461b7e33c41566ea26bec5a1a3 = $this->env->getExtension("native_profiler");
        $__internal_e6bf37adbf12e83aba71a432bace5ef5c9551e461b7e33c41566ea26bec5a1a3->enter($__internal_e6bf37adbf12e83aba71a432bace5ef5c9551e461b7e33c41566ea26bec5a1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e6bf37adbf12e83aba71a432bace5ef5c9551e461b7e33c41566ea26bec5a1a3->leave($__internal_e6bf37adbf12e83aba71a432bace5ef5c9551e461b7e33c41566ea26bec5a1a3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
