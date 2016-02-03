<?php

/* :Menu:menu_base.html.twig */
class __TwigTemplate_fcc805cba251d53d0ef553cf7452c6a353f7ff816a4f289c8fa871510d5fa786 extends Twig_Template
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
        $__internal_286240f77b2816f2e533a43d8394d34376b416c52d0b910a00c5c46e012e2b87 = $this->env->getExtension("native_profiler");
        $__internal_286240f77b2816f2e533a43d8394d34376b416c52d0b910a00c5c46e012e2b87->enter($__internal_286240f77b2816f2e533a43d8394d34376b416c52d0b910a00c5c46e012e2b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Menu:menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_286240f77b2816f2e533a43d8394d34376b416c52d0b910a00c5c46e012e2b87->leave($__internal_286240f77b2816f2e533a43d8394d34376b416c52d0b910a00c5c46e012e2b87_prof);

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
