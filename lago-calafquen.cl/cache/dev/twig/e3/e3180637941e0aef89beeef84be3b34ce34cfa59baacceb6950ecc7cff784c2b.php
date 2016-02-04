<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_aa550fdfb0aaa7dc85e1b283d41e4c4e7bc00800e9086f27ad1615de00cddd62 extends Twig_Template
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
        $__internal_b2f3a32ea082f97236ce1e77d4f6905b31ca974be85d0580cc6757f9ce913df0 = $this->env->getExtension("native_profiler");
        $__internal_b2f3a32ea082f97236ce1e77d4f6905b31ca974be85d0580cc6757f9ce913df0->enter($__internal_b2f3a32ea082f97236ce1e77d4f6905b31ca974be85d0580cc6757f9ce913df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_b2f3a32ea082f97236ce1e77d4f6905b31ca974be85d0580cc6757f9ce913df0->leave($__internal_b2f3a32ea082f97236ce1e77d4f6905b31ca974be85d0580cc6757f9ce913df0_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
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
