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
        $__internal_2399c772503e4dad17194f9b216878c02741b131353864f811b7cd4434640f58 = $this->env->getExtension("native_profiler");
        $__internal_2399c772503e4dad17194f9b216878c02741b131353864f811b7cd4434640f58->enter($__internal_2399c772503e4dad17194f9b216878c02741b131353864f811b7cd4434640f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_2399c772503e4dad17194f9b216878c02741b131353864f811b7cd4434640f58->leave($__internal_2399c772503e4dad17194f9b216878c02741b131353864f811b7cd4434640f58_prof);

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
