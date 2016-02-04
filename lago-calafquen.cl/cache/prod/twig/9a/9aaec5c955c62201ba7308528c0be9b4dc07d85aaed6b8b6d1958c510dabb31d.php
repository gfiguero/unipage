<?php

/* GoogleBundle:Analytics:custom_variable.js.twig */
class __TwigTemplate_c3f0921ed04fb2ada50ec5a78e67ea97493879d1caa6a7ee7512d3501986604e extends Twig_Template
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
        // line 2
        echo "
// Custom Variables on pageview
// @see http://misterphilip.com/universal-analytics/migration/variables
";
        // line 5
        if ($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "hasCustomVariables", array())) {
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "customVariables", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["customVariable"]) {
                // line 7
                echo "// Custom Dimension, what user group is the visitor in?
ga('";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "js", null, true);
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
        return array (  33 => 8,  30 => 7,  26 => 6,  24 => 5,  19 => 2,);
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
