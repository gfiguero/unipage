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
        $__internal_db26e5fb681b90fe3363753cf3fa9696543be1509eba4e56053e00613167addf = $this->env->getExtension("native_profiler");
        $__internal_db26e5fb681b90fe3363753cf3fa9696543be1509eba4e56053e00613167addf->enter($__internal_db26e5fb681b90fe3363753cf3fa9696543be1509eba4e56053e00613167addf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_db26e5fb681b90fe3363753cf3fa9696543be1509eba4e56053e00613167addf->leave($__internal_db26e5fb681b90fe3363753cf3fa9696543be1509eba4e56053e00613167addf_prof);

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
