<?php

/* :Page:meta.html.twig */
class __TwigTemplate_81b7294687bd9116be5c4438d8cd2c53cd99f157ad9990835037380503a233a5 extends Twig_Template
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
        $__internal_8e91d22a5c24981dfb6b48eb6178684201f6df6689b34f2c35e9e3b56b74c677 = $this->env->getExtension("native_profiler");
        $__internal_8e91d22a5c24981dfb6b48eb6178684201f6df6689b34f2c35e9e3b56b74c677->enter($__internal_8e91d22a5c24981dfb6b48eb6178684201f6df6689b34f2c35e9e3b56b74c677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:meta.html.twig"));

        // line 1
        $this->displayBlock('meta', $context, $blocks);
        
        $__internal_8e91d22a5c24981dfb6b48eb6178684201f6df6689b34f2c35e9e3b56b74c677->leave($__internal_8e91d22a5c24981dfb6b48eb6178684201f6df6689b34f2c35e9e3b56b74c677_prof);

    }

    public function block_meta($context, array $blocks = array())
    {
        $__internal_e1905c79603010e4a14ff58e0589d2944bab7d2b1a4b75839ab8b0fe46a3d59d = $this->env->getExtension("native_profiler");
        $__internal_e1905c79603010e4a14ff58e0589d2944bab7d2b1a4b75839ab8b0fe46a3d59d->enter($__internal_e1905c79603010e4a14ff58e0589d2944bab7d2b1a4b75839ab8b0fe46a3d59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 2
        echo "    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"uniSign\">
";
        
        $__internal_e1905c79603010e4a14ff58e0589d2944bab7d2b1a4b75839ab8b0fe46a3d59d->leave($__internal_e1905c79603010e4a14ff58e0589d2944bab7d2b1a4b75839ab8b0fe46a3d59d_prof);

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
