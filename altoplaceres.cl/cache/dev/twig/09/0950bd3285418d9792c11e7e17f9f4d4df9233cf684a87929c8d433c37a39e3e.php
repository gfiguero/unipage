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
        $__internal_d6bdc9c04f3a7cfff59be2081215337b24074b6ffb1c474ec5341bd8a4cd8d54 = $this->env->getExtension("native_profiler");
        $__internal_d6bdc9c04f3a7cfff59be2081215337b24074b6ffb1c474ec5341bd8a4cd8d54->enter($__internal_d6bdc9c04f3a7cfff59be2081215337b24074b6ffb1c474ec5341bd8a4cd8d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d6bdc9c04f3a7cfff59be2081215337b24074b6ffb1c474ec5341bd8a4cd8d54->leave($__internal_d6bdc9c04f3a7cfff59be2081215337b24074b6ffb1c474ec5341bd8a4cd8d54_prof);

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
