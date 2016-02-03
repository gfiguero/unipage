<?php

/* :Page:meta.html.twig */
class __TwigTemplate_8fdf021101fdb058bf4722bc4443ca91157e1d1b7da97e2ad444ce16477c41db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52cf31f99e371c98797191f7d67056bab93aafc8bbb903dc6b0459ece61abbd6 = $this->env->getExtension("native_profiler");
        $__internal_52cf31f99e371c98797191f7d67056bab93aafc8bbb903dc6b0459ece61abbd6->enter($__internal_52cf31f99e371c98797191f7d67056bab93aafc8bbb903dc6b0459ece61abbd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:meta.html.twig"));

        // line 1
        $this->displayBlock('meta', $context, $blocks);
        
        $__internal_52cf31f99e371c98797191f7d67056bab93aafc8bbb903dc6b0459ece61abbd6->leave($__internal_52cf31f99e371c98797191f7d67056bab93aafc8bbb903dc6b0459ece61abbd6_prof);

    }

    public function block_meta($context, array $blocks = array())
    {
        $__internal_77d9f20e36c36e53d3d16ad8791d2d445cc49090505a8246e028f7006c9670ba = $this->env->getExtension("native_profiler");
        $__internal_77d9f20e36c36e53d3d16ad8791d2d445cc49090505a8246e028f7006c9670ba->enter($__internal_77d9f20e36c36e53d3d16ad8791d2d445cc49090505a8246e028f7006c9670ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 2
        echo "    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"uniSign\">
";
        
        $__internal_77d9f20e36c36e53d3d16ad8791d2d445cc49090505a8246e028f7006c9670ba->leave($__internal_77d9f20e36c36e53d3d16ad8791d2d445cc49090505a8246e028f7006c9670ba_prof);

    }

    public function getTemplateName()
    {
        return ":Page:meta.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }
}
/* {% block meta %}*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="uniSign">*/
/* {% endblock %}*/
