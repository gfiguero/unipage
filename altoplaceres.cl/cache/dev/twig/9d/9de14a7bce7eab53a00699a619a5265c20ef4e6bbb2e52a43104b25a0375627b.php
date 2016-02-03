<?php

/* :Menu:menu_ordered.html.twig */
class __TwigTemplate_69401778c07d3cf0ecb51808b89ac0e9964479012dda5bb5fd581d3aa30e75f0 extends Twig_Template
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
        $__internal_18eb6e86ae31a27c03889838cb923b1ad82b6a71a41385d20e25513cbb962d31 = $this->env->getExtension("native_profiler");
        $__internal_18eb6e86ae31a27c03889838cb923b1ad82b6a71a41385d20e25513cbb962d31->enter($__internal_18eb6e86ae31a27c03889838cb923b1ad82b6a71a41385d20e25513cbb962d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Menu:menu_ordered.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18eb6e86ae31a27c03889838cb923b1ad82b6a71a41385d20e25513cbb962d31->leave($__internal_18eb6e86ae31a27c03889838cb923b1ad82b6a71a41385d20e25513cbb962d31_prof);

    }

    // line 3
    public function block_list($context, array $blocks = array())
    {
        $__internal_ce2b1c95a6ce1905d51a11a4b76a7a2c47bb23e112866813dba07bf9cab1c741 = $this->env->getExtension("native_profiler");
        $__internal_ce2b1c95a6ce1905d51a11a4b76a7a2c47bb23e112866813dba07bf9cab1c741->enter($__internal_ce2b1c95a6ce1905d51a11a4b76a7a2c47bb23e112866813dba07bf9cab1c741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

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
        
        $__internal_ce2b1c95a6ce1905d51a11a4b76a7a2c47bb23e112866813dba07bf9cab1c741->leave($__internal_ce2b1c95a6ce1905d51a11a4b76a7a2c47bb23e112866813dba07bf9cab1c741_prof);

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
