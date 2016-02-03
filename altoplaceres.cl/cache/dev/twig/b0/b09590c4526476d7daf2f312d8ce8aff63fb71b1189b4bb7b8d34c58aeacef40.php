<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3c404c26506b742a512609062f0e6719291ee38fbe1840b55b99bfa08966cddc extends Twig_Template
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
        $__internal_b770618b904abcaf56253143e632fec7e163a1204c26d947288033790e6aa75a = $this->env->getExtension("native_profiler");
        $__internal_b770618b904abcaf56253143e632fec7e163a1204c26d947288033790e6aa75a->enter($__internal_b770618b904abcaf56253143e632fec7e163a1204c26d947288033790e6aa75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_b770618b904abcaf56253143e632fec7e163a1204c26d947288033790e6aa75a->leave($__internal_b770618b904abcaf56253143e632fec7e163a1204c26d947288033790e6aa75a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
