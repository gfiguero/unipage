<?php

/* :Menu:menu_base.html.twig */
class __TwigTemplate_bd066387aed949970346e22a6d21b88ac5fe115d2ca19d2e91635665238123c1 extends Twig_Template
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
        $__internal_56adcceebc7cdb85ea204cdfa9ff76d96597ae3977722f9a2e15de3376392ada = $this->env->getExtension("native_profiler");
        $__internal_56adcceebc7cdb85ea204cdfa9ff76d96597ae3977722f9a2e15de3376392ada->enter($__internal_56adcceebc7cdb85ea204cdfa9ff76d96597ae3977722f9a2e15de3376392ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Menu:menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_56adcceebc7cdb85ea204cdfa9ff76d96597ae3977722f9a2e15de3376392ada->leave($__internal_56adcceebc7cdb85ea204cdfa9ff76d96597ae3977722f9a2e15de3376392ada_prof);

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
