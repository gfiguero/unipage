<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_fefc24f6d5a363fcbf7f6ac16659902569f21b932a83dbdc7b0c51c0060c69d7 extends Twig_Template
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
        $__internal_4532e2a634318bdd2fe3f8c480753ac9ac6948ad3f2aa52313f85b4c396f4ba7 = $this->env->getExtension("native_profiler");
        $__internal_4532e2a634318bdd2fe3f8c480753ac9ac6948ad3f2aa52313f85b4c396f4ba7->enter($__internal_4532e2a634318bdd2fe3f8c480753ac9ac6948ad3f2aa52313f85b4c396f4ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_4532e2a634318bdd2fe3f8c480753ac9ac6948ad3f2aa52313f85b4c396f4ba7->leave($__internal_4532e2a634318bdd2fe3f8c480753ac9ac6948ad3f2aa52313f85b4c396f4ba7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
