<?php

/* :Page:brand.html.twig */
class __TwigTemplate_1763130d7b34bf747f9aaa3c094254a5111f3ecf8e8f15cdc57ff7db5a225b5e extends Twig_Template
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
        // line 1
        $this->displayBlock('brand', $context, $blocks);
    }

    public function block_brand($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ((isset($context["frontpage"]) ? $context["frontpage"] : null)) {
            // line 3
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["frontpage"]) ? $context["frontpage"] : null), "title", array()), "html", null, true);
            echo "
    ";
        } else {
            // line 5
            echo "        Título Principal
    ";
        }
    }

    public function getTemplateName()
    {
        return ":Page:brand.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 3,  26 => 2,  20 => 1,);
    }
}
/* {% block brand %}*/
/*     {% if frontpage %}*/
/*         {{ frontpage.title }}*/
/*     {% else %}*/
/*         Título Principal*/
/*     {% endif %}*/
/* {% endblock %}*/
