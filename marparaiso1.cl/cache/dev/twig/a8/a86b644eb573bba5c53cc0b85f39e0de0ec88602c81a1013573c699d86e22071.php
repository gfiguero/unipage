<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_bb663048693535dcf4f8a17cf78a5bb13316f00a5ec9bd7eccc14767f699c2fe extends Twig_Template
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
        $__internal_1024aafbcd77223dace51ccba1fc1cda9bf58ae1590473efe74f8dbf6f2e7017 = $this->env->getExtension("native_profiler");
        $__internal_1024aafbcd77223dace51ccba1fc1cda9bf58ae1590473efe74f8dbf6f2e7017->enter($__internal_1024aafbcd77223dace51ccba1fc1cda9bf58ae1590473efe74f8dbf6f2e7017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1024aafbcd77223dace51ccba1fc1cda9bf58ae1590473efe74f8dbf6f2e7017->leave($__internal_1024aafbcd77223dace51ccba1fc1cda9bf58ae1590473efe74f8dbf6f2e7017_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
