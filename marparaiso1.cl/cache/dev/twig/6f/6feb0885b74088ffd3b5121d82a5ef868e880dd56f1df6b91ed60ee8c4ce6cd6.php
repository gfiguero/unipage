<?php

/* :Page:brand.html.twig */
class __TwigTemplate_34df48d485dc8795f3792a879c3f63704188bccea7b1cb6a71f9802cfe63b606 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'brand' => array($this, 'block_brand'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5acca16cc4b1b998f364b644979c45d3b1a11075ce00e9ccf3b82b90e2fef5e7 = $this->env->getExtension("native_profiler");
        $__internal_5acca16cc4b1b998f364b644979c45d3b1a11075ce00e9ccf3b82b90e2fef5e7->enter($__internal_5acca16cc4b1b998f364b644979c45d3b1a11075ce00e9ccf3b82b90e2fef5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:brand.html.twig"));

        // line 1
        $this->displayBlock('brand', $context, $blocks);
        
        $__internal_5acca16cc4b1b998f364b644979c45d3b1a11075ce00e9ccf3b82b90e2fef5e7->leave($__internal_5acca16cc4b1b998f364b644979c45d3b1a11075ce00e9ccf3b82b90e2fef5e7_prof);

    }

    public function block_brand($context, array $blocks = array())
    {
        $__internal_9a8befca74195902af34f7072ac6b873bec55fd85ad8bf7e7d42bbaf7e34b785 = $this->env->getExtension("native_profiler");
        $__internal_9a8befca74195902af34f7072ac6b873bec55fd85ad8bf7e7d42bbaf7e34b785->enter($__internal_9a8befca74195902af34f7072ac6b873bec55fd85ad8bf7e7d42bbaf7e34b785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "brand"));

        // line 2
        echo "    ";
        if ((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage"))) {
            // line 3
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage")), "title", array()), "html", null, true);
            echo "
    ";
        } else {
            // line 5
            echo "        Título Principal
    ";
        }
        
        $__internal_9a8befca74195902af34f7072ac6b873bec55fd85ad8bf7e7d42bbaf7e34b785->leave($__internal_9a8befca74195902af34f7072ac6b873bec55fd85ad8bf7e7d42bbaf7e34b785_prof);

    }

    public function getTemplateName()
    {
        return ":Page:brand.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 5,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block brand %}*/
/*     {% if frontpage %}*/
/*         {{ frontpage.title }}*/
/*     {% else %}*/
/*         Título Principal*/
/*     {% endif %}*/
/* {% endblock %}*/
