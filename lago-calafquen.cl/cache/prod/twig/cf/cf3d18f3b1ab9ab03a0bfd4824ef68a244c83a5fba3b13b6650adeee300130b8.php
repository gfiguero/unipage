<?php

/* GoogleBundle:Analytics:pageview.js.twig */
class __TwigTemplate_25fc9227e188ec5efc715a8f00651de834cb0e1c91ac3928a38b00af0e385b7e extends Twig_Template
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
// Pageview
// @see https://developers.google.com/analytics/devguides/collection/analyticsjs/pages
";
        // line 5
        if ($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "hasPageViewQueue", array())) {
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "pageViewQueue", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pageView"]) {
                // line 7
                echo "ga('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "js", null, true);
                echo "send', 'pageview', '";
                echo $context["pageView"];
                echo "');
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageView'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 10
        if ($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "hasCustomPageView", array())) {
            // line 11
            echo "ga('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "js", null, true);
            echo "send', 'pageview', '";
            echo $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "getCustomPageView", array(), "method");
            echo "');
";
        } else {
            // line 13
            echo "if (window.location.hash) {
  ga('";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "js", null, true);
            echo "send', 'pageview', '";
            echo $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "getRequestUri", array(), "method");
            echo "'+window.location.hash);
} else {
  ga('";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "js", null, true);
            echo "send', 'pageview', '";
            echo $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "getRequestUri", array(), "method");
            echo "');
}
";
        }
    }

    public function getTemplateName()
    {
        return "GoogleBundle:Analytics:pageview.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  55 => 14,  52 => 13,  44 => 11,  42 => 10,  30 => 7,  26 => 6,  24 => 5,  19 => 2,);
    }
}
/* {# @param string key - Tracker key #}*/
/* */
/* // Pageview*/
/* // @see https://developers.google.com/analytics/devguides/collection/analyticsjs/pages*/
/* {% if google_analytics.hasPageViewQueue %}*/
/* {% for pageView in google_analytics.pageViewQueue %}*/
/* ga('{{ google_analytics.trackerName(key) }}send', 'pageview', '{{ pageView|raw }}');*/
/* {% endfor %}*/
/* {% endif %}*/
/* {% if google_analytics.hasCustomPageView %}*/
/* ga('{{ google_analytics.trackerName(key) }}send', 'pageview', '{{ google_analytics.getCustomPageView()|raw }}');*/
/* {% else %}*/
/* if (window.location.hash) {*/
/*   ga('{{ google_analytics.trackerName(key) }}send', 'pageview', '{{ google_analytics.getRequestUri()|raw }}'+window.location.hash);*/
/* } else {*/
/*   ga('{{ google_analytics.trackerName(key) }}send', 'pageview', '{{ google_analytics.getRequestUri()|raw }}');*/
/* }*/
/* {% endif %}*/
/* */
