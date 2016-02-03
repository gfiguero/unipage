<?php

/* :Menu:menu_ordered.html.twig */
class __TwigTemplate_d50e09c9ceef41ceefe02994809cef811ccc802e6f0369fa0f688ceaf676c30e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Menu:menu.html.twig", ":Menu:menu_ordered.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Menu:menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8bcc39130b5c634c22bc5defd5f76f80ec7b9d3b53592a8f1340f9f24066a4cb = $this->env->getExtension("native_profiler");
        $__internal_8bcc39130b5c634c22bc5defd5f76f80ec7b9d3b53592a8f1340f9f24066a4cb->enter($__internal_8bcc39130b5c634c22bc5defd5f76f80ec7b9d3b53592a8f1340f9f24066a4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Menu:menu_ordered.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bcc39130b5c634c22bc5defd5f76f80ec7b9d3b53592a8f1340f9f24066a4cb->leave($__internal_8bcc39130b5c634c22bc5defd5f76f80ec7b9d3b53592a8f1340f9f24066a4cb_prof);

    }

    // line 3
    public function block_list($context, array $blocks = array())
    {
        $__internal_2f7a8fa7a21aa857825667a461e53c8bdcdf1f4c9cf3ff2fbc4a515310aafaa5 = $this->env->getExtension("native_profiler");
        $__internal_2f7a8fa7a21aa857825667a461e53c8bdcdf1f4c9cf3ff2fbc4a515310aafaa5->enter($__internal_2f7a8fa7a21aa857825667a461e53c8bdcdf1f4c9cf3ff2fbc4a515310aafaa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 4
        $context["macros"] = $this->loadTemplate(":Menu:menu.html.twig", ":Menu:menu_ordered.html.twig", 4);
        // line 5
        echo "
";
        // line 6
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 7
            echo "    <ol";
            echo $context["macros"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")));
            echo ">
        ";
            // line 8
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ol>
";
        }
        
        $__internal_2f7a8fa7a21aa857825667a461e53c8bdcdf1f4c9cf3ff2fbc4a515310aafaa5->leave($__internal_2f7a8fa7a21aa857825667a461e53c8bdcdf1f4c9cf3ff2fbc4a515310aafaa5_prof);

    }

    public function getTemplateName()
    {
        return ":Menu:menu_ordered.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  47 => 7,  45 => 6,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends ':Menu:menu.html.twig' %}*/
/* */
/* {% block list %}*/
/* {% import ':Menu:menu.html.twig' as macros %}*/
/* */
/* {% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}*/
/*     <ol{{ macros.attributes(listAttributes) }}>*/
/*         {{ block('children') }}*/
/*     </ol>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
