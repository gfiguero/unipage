<?php

/* :Menu:menu_base.html.twig */
class __TwigTemplate_7229d8a2fa359fe767f107b6b70cefa0e515e43327173e4ae2e0e533d0ed99dc extends Twig_Template
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
        $__internal_4e363d187dd82de9fd80ada31e76320bd5abed1d1f88616014aec0d3ea8c6eb3 = $this->env->getExtension("native_profiler");
        $__internal_4e363d187dd82de9fd80ada31e76320bd5abed1d1f88616014aec0d3ea8c6eb3->enter($__internal_4e363d187dd82de9fd80ada31e76320bd5abed1d1f88616014aec0d3ea8c6eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Menu:menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_4e363d187dd82de9fd80ada31e76320bd5abed1d1f88616014aec0d3ea8c6eb3->leave($__internal_4e363d187dd82de9fd80ada31e76320bd5abed1d1f88616014aec0d3ea8c6eb3_prof);

    }

    public function getTemplateName()
    {
        return ":Menu:menu_base.html.twig";
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
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
