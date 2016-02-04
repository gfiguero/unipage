<?php

/* :Page:brand.html.twig */
class __TwigTemplate_e14b0a5d94056b9de2e8e2d066dae6a93921e58a9e784db703275bc1fbb681b6 extends Twig_Template
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
        $__internal_499a6d8f24c6a6b0be416c6d7cb762e5d50a2b22800b802dc87c7672a7c206d0 = $this->env->getExtension("native_profiler");
        $__internal_499a6d8f24c6a6b0be416c6d7cb762e5d50a2b22800b802dc87c7672a7c206d0->enter($__internal_499a6d8f24c6a6b0be416c6d7cb762e5d50a2b22800b802dc87c7672a7c206d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:brand.html.twig"));

        // line 1
        $this->displayBlock('brand', $context, $blocks);
        
        $__internal_499a6d8f24c6a6b0be416c6d7cb762e5d50a2b22800b802dc87c7672a7c206d0->leave($__internal_499a6d8f24c6a6b0be416c6d7cb762e5d50a2b22800b802dc87c7672a7c206d0_prof);

    }

    public function block_brand($context, array $blocks = array())
    {
        $__internal_fa34b19892e187be4c5ed7142975918597238f2f2ea2e3d9af9c0b3b139806b5 = $this->env->getExtension("native_profiler");
        $__internal_fa34b19892e187be4c5ed7142975918597238f2f2ea2e3d9af9c0b3b139806b5->enter($__internal_fa34b19892e187be4c5ed7142975918597238f2f2ea2e3d9af9c0b3b139806b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "brand"));

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
        
        $__internal_fa34b19892e187be4c5ed7142975918597238f2f2ea2e3d9af9c0b3b139806b5->leave($__internal_fa34b19892e187be4c5ed7142975918597238f2f2ea2e3d9af9c0b3b139806b5_prof);

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
