<?php

/* GoogleBundle:Analytics:source.js.twig */
class __TwigTemplate_29d3a0ea9cc515255167abd652fa970f7849eecc8d3879e0ec6cfaf9f58e18d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79325cca923a0b40ef6ee9552ff1e778962d673fa4fb56115cc25c4167fe720b = $this->env->getExtension("native_profiler");
        $__internal_79325cca923a0b40ef6ee9552ff1e778962d673fa4fb56115cc25c4167fe720b->enter($__internal_79325cca923a0b40ef6ee9552ff1e778962d673fa4fb56115cc25c4167fe720b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GoogleBundle:Analytics:source.js.twig"));

        // line 1
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "debug", array())) {
            // line 2
            echo "window.ga_debug = {trace: true};
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics_debug.js','ga');
";
        } else {
            // line 8
            echo "(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
";
        }
        
        $__internal_79325cca923a0b40ef6ee9552ff1e778962d673fa4fb56115cc25c4167fe720b->leave($__internal_79325cca923a0b40ef6ee9552ff1e778962d673fa4fb56115cc25c4167fe720b_prof);

    }

    public function getTemplateName()
    {
        return "GoogleBundle:Analytics:source.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 8,  24 => 2,  22 => 1,);
    }
}
/* {% if app.debug %}*/
/* window.ga_debug = {trace: true};*/
/* (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){*/
/* (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),*/
/* m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)*/
/* })(window,document,'script','//www.google-analytics.com/analytics_debug.js','ga');*/
/* {% else %}*/
/* (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){*/
/* (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),*/
/* m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)*/
/* })(window,document,'script','//www.google-analytics.com/analytics.js','ga');*/
/* {% endif %}*/
/* */
