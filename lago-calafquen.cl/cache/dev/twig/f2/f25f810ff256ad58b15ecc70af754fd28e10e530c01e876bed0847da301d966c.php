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
        $__internal_498621f8b0930ebc1e0669656a25234159106662f731d1bb6f84722dcd55e1ee = $this->env->getExtension("native_profiler");
        $__internal_498621f8b0930ebc1e0669656a25234159106662f731d1bb6f84722dcd55e1ee->enter($__internal_498621f8b0930ebc1e0669656a25234159106662f731d1bb6f84722dcd55e1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_498621f8b0930ebc1e0669656a25234159106662f731d1bb6f84722dcd55e1ee->leave($__internal_498621f8b0930ebc1e0669656a25234159106662f731d1bb6f84722dcd55e1ee_prof);

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
