<?php

/* GoogleBundle:Analytics:custom_variable.js.twig */
class __TwigTemplate_52714c3e1371342147102fe54d641e49650c376be969d9de44fdfb010a8317a8 extends Twig_Template
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
        $__internal_83449bf0a7e52fa090af5b07eb2e2b20adf8911a4a8bd7f970d366117e4ef566 = $this->env->getExtension("native_profiler");
        $__internal_83449bf0a7e52fa090af5b07eb2e2b20adf8911a4a8bd7f970d366117e4ef566->enter($__internal_83449bf0a7e52fa090af5b07eb2e2b20adf8911a4a8bd7f970d366117e4ef566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GoogleBundle:Analytics:custom_variable.js.twig"));

        // line 2
        echo "
// Custom Variables on pageview
// @see http://misterphilip.com/universal-analytics/migration/variables
";
        // line 5
        if ($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "hasCustomVariables", array())) {
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "customVariables", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["customVariable"]) {
                // line 7
                echo "// Custom Dimension, what user group is the visitor in?
ga('";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"), "js", null, true);
                echo "set', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["customVariable"], "name", array()), "js", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["customVariable"], "value", array()), "js", null, true);
                echo "');
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customVariable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_83449bf0a7e52fa090af5b07eb2e2b20adf8911a4a8bd7f970d366117e4ef566->leave($__internal_83449bf0a7e52fa090af5b07eb2e2b20adf8911a4a8bd7f970d366117e4ef566_prof);

    }

    public function getTemplateName()
    {
        return "GoogleBundle:Analytics:custom_variable.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  33 => 7,  29 => 6,  27 => 5,  22 => 2,);
    }
}
/* {# @param string key - Tracker key #}*/
/* */
/* // Custom Variables on pageview*/
/* // @see http://misterphilip.com/universal-analytics/migration/variables*/
/* {% if google_analytics.hasCustomVariables %}*/
/* {% for customVariable in google_analytics.customVariables %}*/
/* // Custom Dimension, what user group is the visitor in?*/
/* ga('{{ google_analytics.trackerName(key) }}set', '{{ customVariable.name }}', '{{ customVariable.value }}');*/
/* {% endfor %}*/
/* {% endif %}*/
/* */
