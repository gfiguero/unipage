<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_4368d324e0bb015edce43768f89f648f896911d6bc0b632c6299dca8fe701b30 extends Twig_Template
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
        $__internal_f646e12ef1c20e21d73aae6d126c5d8b1f5bb6bbbcaa8e465c8b08e0169e3bfe = $this->env->getExtension("native_profiler");
        $__internal_f646e12ef1c20e21d73aae6d126c5d8b1f5bb6bbbcaa8e465c8b08e0169e3bfe->enter($__internal_f646e12ef1c20e21d73aae6d126c5d8b1f5bb6bbbcaa8e465c8b08e0169e3bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f646e12ef1c20e21d73aae6d126c5d8b1f5bb6bbbcaa8e465c8b08e0169e3bfe->leave($__internal_f646e12ef1c20e21d73aae6d126c5d8b1f5bb6bbbcaa8e465c8b08e0169e3bfe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
