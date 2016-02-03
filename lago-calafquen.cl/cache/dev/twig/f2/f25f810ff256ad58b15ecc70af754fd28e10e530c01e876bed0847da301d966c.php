<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_4afc66ea6a81fc7dd4bf27e5c47ee594ffbcf0f289b2a15d734b925eb2b8c411 extends Twig_Template
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
        $__internal_c0e2f740e18d9c49ab4bd9a01b791be03d64b881e50fa74b01ab123e73130a1b = $this->env->getExtension("native_profiler");
        $__internal_c0e2f740e18d9c49ab4bd9a01b791be03d64b881e50fa74b01ab123e73130a1b->enter($__internal_c0e2f740e18d9c49ab4bd9a01b791be03d64b881e50fa74b01ab123e73130a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_c0e2f740e18d9c49ab4bd9a01b791be03d64b881e50fa74b01ab123e73130a1b->leave($__internal_c0e2f740e18d9c49ab4bd9a01b791be03d64b881e50fa74b01ab123e73130a1b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
