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
        $__internal_a97237d86e336ca439afed2c47fc7e6bcd6c459faba65492bcd9d39c0c5d7503 = $this->env->getExtension("native_profiler");
        $__internal_a97237d86e336ca439afed2c47fc7e6bcd6c459faba65492bcd9d39c0c5d7503->enter($__internal_a97237d86e336ca439afed2c47fc7e6bcd6c459faba65492bcd9d39c0c5d7503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a97237d86e336ca439afed2c47fc7e6bcd6c459faba65492bcd9d39c0c5d7503->leave($__internal_a97237d86e336ca439afed2c47fc7e6bcd6c459faba65492bcd9d39c0c5d7503_prof);

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
