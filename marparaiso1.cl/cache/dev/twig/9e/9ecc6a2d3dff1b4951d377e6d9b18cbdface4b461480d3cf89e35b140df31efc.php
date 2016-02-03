<?php

/* :Menu:menu_base.html.twig */
class __TwigTemplate_27ab063ac8a8772fe47819836ced771af61328669e301191673127a40191a559 extends Twig_Template
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
        $__internal_40323c964a5d842fb15518b0e79a041d9aa52bd16802d09ff0ee7ca662e0e4a4 = $this->env->getExtension("native_profiler");
        $__internal_40323c964a5d842fb15518b0e79a041d9aa52bd16802d09ff0ee7ca662e0e4a4->enter($__internal_40323c964a5d842fb15518b0e79a041d9aa52bd16802d09ff0ee7ca662e0e4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Menu:menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_40323c964a5d842fb15518b0e79a041d9aa52bd16802d09ff0ee7ca662e0e4a4->leave($__internal_40323c964a5d842fb15518b0e79a041d9aa52bd16802d09ff0ee7ca662e0e4a4_prof);

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
