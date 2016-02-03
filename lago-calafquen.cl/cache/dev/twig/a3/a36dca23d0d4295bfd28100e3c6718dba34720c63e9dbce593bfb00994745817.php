<?php

/* :Page:title.html.twig */
class __TwigTemplate_6db9325b74e9e287b527caadb634928d311d1e53dcb8a3b90ba5d3c33292d202 extends Twig_Template
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
        $__internal_3d59475e29ed404f00333473aebc98c69b5b086f8de554689f0942493657582b = $this->env->getExtension("native_profiler");
        $__internal_3d59475e29ed404f00333473aebc98c69b5b086f8de554689f0942493657582b->enter($__internal_3d59475e29ed404f00333473aebc98c69b5b086f8de554689f0942493657582b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:title.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        
        $__internal_3d59475e29ed404f00333473aebc98c69b5b086f8de554689f0942493657582b->leave($__internal_3d59475e29ed404f00333473aebc98c69b5b086f8de554689f0942493657582b_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_3562128bc5751f9d7c176da6550d404c0ef58cd91df6d9bda85eefa6b9890a21 = $this->env->getExtension("native_profiler");
        $__internal_3562128bc5751f9d7c176da6550d404c0ef58cd91df6d9bda85eefa6b9890a21->enter($__internal_3562128bc5751f9d7c176da6550d404c0ef58cd91df6d9bda85eefa6b9890a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 2
        echo "    <title>
        ";
        // line 3
        $this->displayBlock('brand', $context, $blocks);
        // line 4
        echo "    </title>
";
        
        $__internal_3562128bc5751f9d7c176da6550d404c0ef58cd91df6d9bda85eefa6b9890a21->leave($__internal_3562128bc5751f9d7c176da6550d404c0ef58cd91df6d9bda85eefa6b9890a21_prof);

    }

    // line 3
    public function block_brand($context, array $blocks = array())
    {
        $__internal_4fe388adaea94729469541986575b1a6fa5ee3ebfa4619e61fc13990534c1de7 = $this->env->getExtension("native_profiler");
        $__internal_4fe388adaea94729469541986575b1a6fa5ee3ebfa4619e61fc13990534c1de7->enter($__internal_4fe388adaea94729469541986575b1a6fa5ee3ebfa4619e61fc13990534c1de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "brand"));

        
        $__internal_4fe388adaea94729469541986575b1a6fa5ee3ebfa4619e61fc13990534c1de7->leave($__internal_4fe388adaea94729469541986575b1a6fa5ee3ebfa4619e61fc13990534c1de7_prof);

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
