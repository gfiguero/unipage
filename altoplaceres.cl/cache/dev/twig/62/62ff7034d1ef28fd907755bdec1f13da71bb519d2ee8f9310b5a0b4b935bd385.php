<?php

/* :Page:title.html.twig */
class __TwigTemplate_c079133a2da1a2f77090d82d58bc2f96ad88fa7ece603d7018c2990ecbf0e9d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'brand' => array($this, 'block_brand'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25f90d5fc4a4ca8962dc93accf28f0af3aa1c19f56efc7dc5d11ce77db200cf2 = $this->env->getExtension("native_profiler");
        $__internal_25f90d5fc4a4ca8962dc93accf28f0af3aa1c19f56efc7dc5d11ce77db200cf2->enter($__internal_25f90d5fc4a4ca8962dc93accf28f0af3aa1c19f56efc7dc5d11ce77db200cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:title.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        
        $__internal_25f90d5fc4a4ca8962dc93accf28f0af3aa1c19f56efc7dc5d11ce77db200cf2->leave($__internal_25f90d5fc4a4ca8962dc93accf28f0af3aa1c19f56efc7dc5d11ce77db200cf2_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_0fb6bff7a382e659011e6d8dba42991194be636a9adf15505a6bb9a192f27545 = $this->env->getExtension("native_profiler");
        $__internal_0fb6bff7a382e659011e6d8dba42991194be636a9adf15505a6bb9a192f27545->enter($__internal_0fb6bff7a382e659011e6d8dba42991194be636a9adf15505a6bb9a192f27545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 2
        echo "    <title>
        ";
        // line 3
        $this->displayBlock('brand', $context, $blocks);
        // line 4
        echo "    </title>
";
        
        $__internal_0fb6bff7a382e659011e6d8dba42991194be636a9adf15505a6bb9a192f27545->leave($__internal_0fb6bff7a382e659011e6d8dba42991194be636a9adf15505a6bb9a192f27545_prof);

    }

    // line 3
    public function block_brand($context, array $blocks = array())
    {
        $__internal_5215f41ecaf471eeea727602f7257279835c6033c72b757e3653f6610ab5aba0 = $this->env->getExtension("native_profiler");
        $__internal_5215f41ecaf471eeea727602f7257279835c6033c72b757e3653f6610ab5aba0->enter($__internal_5215f41ecaf471eeea727602f7257279835c6033c72b757e3653f6610ab5aba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "brand"));

        
        $__internal_5215f41ecaf471eeea727602f7257279835c6033c72b757e3653f6610ab5aba0->leave($__internal_5215f41ecaf471eeea727602f7257279835c6033c72b757e3653f6610ab5aba0_prof);

    }

    public function getTemplateName()
    {
        return ":Page:title.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  41 => 4,  39 => 3,  36 => 2,  24 => 1,);
    }
}
/* {% block title %}*/
/*     <title>*/
/*         {% block brand %}{% endblock %}*/
/*     </title>*/
/* {% endblock %}*/
/* */
