<?php

/* :Menu:menu_ordered.html.twig */
class __TwigTemplate_0135427feb6c545af788d92be7f7aa4a6f6b65cece24309766b808bde800cbc7 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_list($context, array $blocks = array())
    {
        // line 4
        $context["macros"] = $this->loadTemplate(":Menu:menu.html.twig", ":Menu:menu_ordered.html.twig", 4);
        // line 5
        echo "
";
        // line 6
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array()))) {
            // line 7
            echo "    <ol";
            echo $context["macros"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : null));
            echo ">
        ";
            // line 8
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ol>
";
        }
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
        return array (  43 => 8,  38 => 7,  36 => 6,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
