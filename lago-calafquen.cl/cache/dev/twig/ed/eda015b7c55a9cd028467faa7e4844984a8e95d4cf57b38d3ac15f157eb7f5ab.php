<?php

/* GoogleBundle:Analytics:event.js.twig */
class __TwigTemplate_570842f509cac9066a0960e7597b743a6fdd56119f982e8846c25f8267b7a3a2 extends Twig_Template
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
        $__internal_0d35b95373d270b605b1b35127222ef8686b5b7fe58fd445ae3d4fd706ff96e5 = $this->env->getExtension("native_profiler");
        $__internal_0d35b95373d270b605b1b35127222ef8686b5b7fe58fd445ae3d4fd706ff96e5->enter($__internal_0d35b95373d270b605b1b35127222ef8686b5b7fe58fd445ae3d4fd706ff96e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GoogleBundle:Analytics:event.js.twig"));

        // line 2
        echo "
// Events
// @see https://developers.google.com/analytics/devguides/collection/analyticsjs/events
";
        // line 5
        if ($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "hasEventQueue", array())) {
            // line 6
            echo "AntiMattr.GoogleAnalytics.onGatLoad(function() {
";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "eventQueue", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 8
                echo "AntiMattr.GoogleAnalytics.notifyEvent(
    '";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"), "js", null, true);
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
        
        $__internal_0d35b95373d270b605b1b35127222ef8686b5b7fe58fd445ae3d4fd706ff96e5->leave($__internal_0d35b95373d270b605b1b35127222ef8686b5b7fe58fd445ae3d4fd706ff96e5_prof);

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
        return array (  70 => 16,  63 => 14,  57 => 13,  51 => 12,  47 => 11,  43 => 10,  39 => 9,  36 => 8,  32 => 7,  29 => 6,  27 => 5,  22 => 2,);
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
