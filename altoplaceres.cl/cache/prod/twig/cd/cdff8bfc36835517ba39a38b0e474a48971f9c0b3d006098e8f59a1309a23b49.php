<?php

/* GoogleBundle:Analytics:event.js.twig */
class __TwigTemplate_3d79043dd8ef32ff8521f1341adddbc3fd09aff00b228dbd0a69e5b6c42bd238 extends Twig_Template
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
// Events
// @see https://developers.google.com/analytics/devguides/collection/analyticsjs/events
";
        // line 5
        if ($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "hasEventQueue", array())) {
            // line 6
            echo "AntiMattr.GoogleAnalytics.onGatLoad(function() {
";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "eventQueue", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 8
                echo "AntiMattr.GoogleAnalytics.notifyEvent(
    '";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "js", null, true);
                echo "'
  , '";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "category", array()), "js", null, true);
                echo "'
  , '";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "action", array()), "js", null, true);
                echo "'
  ";
                // line 12
                if ( !(null === $this->getAttribute($context["event"], "label", array()))) {
                    echo ", '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "label", array()), "js", null, true);
                    echo "'";
                }
                // line 13
                echo "  ";
                if ( !(null === $this->getAttribute($context["event"], "value", array()))) {
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "value", array()), "js", null, true);
                }
                // line 14
                echo ");
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "});
";
        }
    }

    public function getTemplateName()
    {
        return "GoogleBundle:Analytics:event.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  60 => 14,  54 => 13,  48 => 12,  44 => 11,  40 => 10,  36 => 9,  33 => 8,  29 => 7,  26 => 6,  24 => 5,  19 => 2,);
    }
}
/* {# @param string key - Tracker key #}*/
/* */
/* // Events*/
/* // @see https://developers.google.com/analytics/devguides/collection/analyticsjs/events*/
/* {% if google_analytics.hasEventQueue %}*/
/* AntiMattr.GoogleAnalytics.onGatLoad(function() {*/
/* {% for event in google_analytics.eventQueue %}*/
/* AntiMattr.GoogleAnalytics.notifyEvent(*/
/*     '{{ google_analytics.trackerName(key) }}'*/
/*   , '{{ event.category }}'*/
/*   , '{{ event.action }}'*/
/*   {% if event.label is not null %}, '{{ event.label }}'{% endif %}*/
/*   {% if event.value is not null %}, {{ event.value }}{% endif %}*/
/* );*/
/* {% endfor %}*/
/* });*/
/* {% endif %}*/
/* */
