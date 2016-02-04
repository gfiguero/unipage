<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e8339b109d82b6067618952502448acae82a03ecb5b0ac668bdf4a7a54591b35 extends Twig_Template
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
        $__internal_26cb37a5d541785431749bb1a43c59c21585372300feb9eaedb9d50cec4bef97 = $this->env->getExtension("native_profiler");
        $__internal_26cb37a5d541785431749bb1a43c59c21585372300feb9eaedb9d50cec4bef97->enter($__internal_26cb37a5d541785431749bb1a43c59c21585372300feb9eaedb9d50cec4bef97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_26cb37a5d541785431749bb1a43c59c21585372300feb9eaedb9d50cec4bef97->leave($__internal_26cb37a5d541785431749bb1a43c59c21585372300feb9eaedb9d50cec4bef97_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
