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
        $__internal_4e4b96eb9cf5ff73e9cc4e1e461f80d11502069c3ccefb21b3081f51bd15bb43 = $this->env->getExtension("native_profiler");
        $__internal_4e4b96eb9cf5ff73e9cc4e1e461f80d11502069c3ccefb21b3081f51bd15bb43->enter($__internal_4e4b96eb9cf5ff73e9cc4e1e461f80d11502069c3ccefb21b3081f51bd15bb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_4e4b96eb9cf5ff73e9cc4e1e461f80d11502069c3ccefb21b3081f51bd15bb43->leave($__internal_4e4b96eb9cf5ff73e9cc4e1e461f80d11502069c3ccefb21b3081f51bd15bb43_prof);

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
