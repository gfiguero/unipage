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
        $__internal_13693c85dbc35ec1a9208e413e0977dcdc9853958927b87eee3c7caa8c97f70b = $this->env->getExtension("native_profiler");
        $__internal_13693c85dbc35ec1a9208e413e0977dcdc9853958927b87eee3c7caa8c97f70b->enter($__internal_13693c85dbc35ec1a9208e413e0977dcdc9853958927b87eee3c7caa8c97f70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_13693c85dbc35ec1a9208e413e0977dcdc9853958927b87eee3c7caa8c97f70b->leave($__internal_13693c85dbc35ec1a9208e413e0977dcdc9853958927b87eee3c7caa8c97f70b_prof);

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
