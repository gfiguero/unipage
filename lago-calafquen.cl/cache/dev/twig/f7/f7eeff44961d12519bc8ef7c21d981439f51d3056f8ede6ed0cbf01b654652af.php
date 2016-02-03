<?php

/* :Menu:menu_ordered.html.twig */
class __TwigTemplate_66b1d6baca7a42b802c8f3181f9c11a74d361900cd5e9728dbfecf81810b2c41 extends Twig_Template
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
        $__internal_bbb3bc05e8f81971be837a091f58f6adc79e55b675289d7e0363a6a9d4fa8b53 = $this->env->getExtension("native_profiler");
        $__internal_bbb3bc05e8f81971be837a091f58f6adc79e55b675289d7e0363a6a9d4fa8b53->enter($__internal_bbb3bc05e8f81971be837a091f58f6adc79e55b675289d7e0363a6a9d4fa8b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Menu:menu_ordered.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbb3bc05e8f81971be837a091f58f6adc79e55b675289d7e0363a6a9d4fa8b53->leave($__internal_bbb3bc05e8f81971be837a091f58f6adc79e55b675289d7e0363a6a9d4fa8b53_prof);

    }

    // line 3
    public function block_list($context, array $blocks = array())
    {
        $__internal_80480dc0abb25f74d052fa6593bac1a830b4fa5a66d362d7118cc998df1ad458 = $this->env->getExtension("native_profiler");
        $__internal_80480dc0abb25f74d052fa6593bac1a830b4fa5a66d362d7118cc998df1ad458->enter($__internal_80480dc0abb25f74d052fa6593bac1a830b4fa5a66d362d7118cc998df1ad458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

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
        
        $__internal_80480dc0abb25f74d052fa6593bac1a830b4fa5a66d362d7118cc998df1ad458->leave($__internal_80480dc0abb25f74d052fa6593bac1a830b4fa5a66d362d7118cc998df1ad458_prof);

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
