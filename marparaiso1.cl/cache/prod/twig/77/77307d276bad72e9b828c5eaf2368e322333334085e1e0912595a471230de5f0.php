<?php

/* GoogleBundle:Analytics:plugin.js.twig */
class __TwigTemplate_836f02e9abefb88875e9867122a7258563ab8d86f2d11b804b6d5ba01b72f10a extends Twig_Template
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
// Plugins
// @see https://developers.google.com/analytics/devguides/collection/analyticsjs/plugins
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "plugins", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
            // line 6
            echo "ga('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "js", null, true);
            echo "require', '";
            echo twig_escape_filter($this->env, $context["plugin"], "js", null, true);
            echo "');
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "GoogleBundle:Analytics:plugin.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 6,  24 => 5,  19 => 2,);
    }
}
/* {# @param string key - Tracker key #}*/
/* */
/* // Plugins*/
/* // @see https://developers.google.com/analytics/devguides/collection/analyticsjs/plugins*/
/* {% for plugin in google_analytics.plugins(key) %}*/
/* ga('{{ google_analytics.trackerName(key) }}require', '{{ plugin }}');*/
/* {% endfor %}*/
/* */
