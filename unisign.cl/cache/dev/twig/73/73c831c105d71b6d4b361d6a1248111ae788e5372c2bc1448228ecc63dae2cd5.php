<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_e9e41151b44ee8c11bc3a1476486d538ddcfca666aa368926432b6c2c72dd8da extends Twig_Template
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
        $__internal_d85305b0f367230d016be2e5f1ad75f94b8a4ec865db855a8987035b08d2bd50 = $this->env->getExtension("native_profiler");
        $__internal_d85305b0f367230d016be2e5f1ad75f94b8a4ec865db855a8987035b08d2bd50->enter($__internal_d85305b0f367230d016be2e5f1ad75f94b8a4ec865db855a8987035b08d2bd50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_d85305b0f367230d016be2e5f1ad75f94b8a4ec865db855a8987035b08d2bd50->leave($__internal_d85305b0f367230d016be2e5f1ad75f94b8a4ec865db855a8987035b08d2bd50_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
