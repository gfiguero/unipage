<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_637503b9122a986a429006eda5178b58cab8a3ef7215e56a19999656d93394d8 extends Twig_Template
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
        $__internal_c84ef37235bee0fc00a70e8b803baf4c2d1074612ec53f5e045e995ede208359 = $this->env->getExtension("native_profiler");
        $__internal_c84ef37235bee0fc00a70e8b803baf4c2d1074612ec53f5e045e995ede208359->enter($__internal_c84ef37235bee0fc00a70e8b803baf4c2d1074612ec53f5e045e995ede208359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_c84ef37235bee0fc00a70e8b803baf4c2d1074612ec53f5e045e995ede208359->leave($__internal_c84ef37235bee0fc00a70e8b803baf4c2d1074612ec53f5e045e995ede208359_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
