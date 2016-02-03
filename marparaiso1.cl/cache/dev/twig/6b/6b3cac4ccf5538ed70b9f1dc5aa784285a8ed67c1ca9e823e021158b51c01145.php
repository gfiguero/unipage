<?php

/* :Page:title.html.twig */
class __TwigTemplate_a718fdded669668b19935254766eaedb5c8a6af07debe271ba18d5a67f4f7521 extends Twig_Template
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
        $__internal_c717218f2726f029eb91072b715643ad970f4ab7d3aec421225d49daa73a32ab = $this->env->getExtension("native_profiler");
        $__internal_c717218f2726f029eb91072b715643ad970f4ab7d3aec421225d49daa73a32ab->enter($__internal_c717218f2726f029eb91072b715643ad970f4ab7d3aec421225d49daa73a32ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:title.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        
        $__internal_c717218f2726f029eb91072b715643ad970f4ab7d3aec421225d49daa73a32ab->leave($__internal_c717218f2726f029eb91072b715643ad970f4ab7d3aec421225d49daa73a32ab_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_98658ab017086f5305eb5c9574124465b10aac89bb8ecf254799b21ec24dd0eb = $this->env->getExtension("native_profiler");
        $__internal_98658ab017086f5305eb5c9574124465b10aac89bb8ecf254799b21ec24dd0eb->enter($__internal_98658ab017086f5305eb5c9574124465b10aac89bb8ecf254799b21ec24dd0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 2
        echo "    <title>
        ";
        // line 3
        $this->displayBlock('brand', $context, $blocks);
        // line 4
        echo "    </title>
";
        
        $__internal_98658ab017086f5305eb5c9574124465b10aac89bb8ecf254799b21ec24dd0eb->leave($__internal_98658ab017086f5305eb5c9574124465b10aac89bb8ecf254799b21ec24dd0eb_prof);

    }

    // line 3
    public function block_brand($context, array $blocks = array())
    {
        $__internal_49586bd6a150eceae88e11961ae6beaf431c47ad7fb849d66adcf639ddfe55cd = $this->env->getExtension("native_profiler");
        $__internal_49586bd6a150eceae88e11961ae6beaf431c47ad7fb849d66adcf639ddfe55cd->enter($__internal_49586bd6a150eceae88e11961ae6beaf431c47ad7fb849d66adcf639ddfe55cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "brand"));

        
        $__internal_49586bd6a150eceae88e11961ae6beaf431c47ad7fb849d66adcf639ddfe55cd->leave($__internal_49586bd6a150eceae88e11961ae6beaf431c47ad7fb849d66adcf639ddfe55cd_prof);

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
