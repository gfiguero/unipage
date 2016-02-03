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
        $__internal_82f44471b21e748dc2bb78f2ec9115cc1ffd08ea349cfab3bf54142c361c2de3 = $this->env->getExtension("native_profiler");
        $__internal_82f44471b21e748dc2bb78f2ec9115cc1ffd08ea349cfab3bf54142c361c2de3->enter($__internal_82f44471b21e748dc2bb78f2ec9115cc1ffd08ea349cfab3bf54142c361c2de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_82f44471b21e748dc2bb78f2ec9115cc1ffd08ea349cfab3bf54142c361c2de3->leave($__internal_82f44471b21e748dc2bb78f2ec9115cc1ffd08ea349cfab3bf54142c361c2de3_prof);

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
