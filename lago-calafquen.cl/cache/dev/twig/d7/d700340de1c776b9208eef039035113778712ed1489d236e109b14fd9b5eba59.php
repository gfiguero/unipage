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
        $__internal_192dc7a53203cd6acc86dc1f4c35168dc9be30382275f329f0f1b43309d58959 = $this->env->getExtension("native_profiler");
        $__internal_192dc7a53203cd6acc86dc1f4c35168dc9be30382275f329f0f1b43309d58959->enter($__internal_192dc7a53203cd6acc86dc1f4c35168dc9be30382275f329f0f1b43309d58959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Menu:menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_192dc7a53203cd6acc86dc1f4c35168dc9be30382275f329f0f1b43309d58959->leave($__internal_192dc7a53203cd6acc86dc1f4c35168dc9be30382275f329f0f1b43309d58959_prof);

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
