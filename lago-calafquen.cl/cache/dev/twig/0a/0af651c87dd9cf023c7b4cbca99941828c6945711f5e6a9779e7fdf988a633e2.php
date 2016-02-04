<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_60ead598fb811fe58b9c254b51f24f337577509a7d200ba54dd0a1db3a78f739 extends Twig_Template
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
        $__internal_bf7b43095405d5daf325a300d3831a3c30f0034853de5871ef9316bae3b79f07 = $this->env->getExtension("native_profiler");
        $__internal_bf7b43095405d5daf325a300d3831a3c30f0034853de5871ef9316bae3b79f07->enter($__internal_bf7b43095405d5daf325a300d3831a3c30f0034853de5871ef9316bae3b79f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_bf7b43095405d5daf325a300d3831a3c30f0034853de5871ef9316bae3b79f07->leave($__internal_bf7b43095405d5daf325a300d3831a3c30f0034853de5871ef9316bae3b79f07_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
