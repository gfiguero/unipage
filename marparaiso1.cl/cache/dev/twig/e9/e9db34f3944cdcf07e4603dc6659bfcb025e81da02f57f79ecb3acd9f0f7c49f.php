<?php

/* GoogleBundle:Analytics:plugin.js.twig */
class __TwigTemplate_4c70c42cb01e3895caa3a0c1b2c71cac272c336b9b008e996a849b6e165eb9d7 extends Twig_Template
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
        $__internal_a6416a82fca3bee07588ba71392f1130a312b397998ed5c429ec952332510a0a = $this->env->getExtension("native_profiler");
        $__internal_a6416a82fca3bee07588ba71392f1130a312b397998ed5c429ec952332510a0a->enter($__internal_a6416a82fca3bee07588ba71392f1130a312b397998ed5c429ec952332510a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GoogleBundle:Analytics:plugin.js.twig"));

        // line 2
        echo "
// Plugins
// @see https://developers.google.com/analytics/devguides/collection/analyticsjs/plugins
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "plugins", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
            // line 6
            echo "ga('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"), "js", null, true);
            echo "require', '";
            echo twig_escape_filter($this->env, $context["plugin"], "js", null, true);
            echo "');
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a6416a82fca3bee07588ba71392f1130a312b397998ed5c429ec952332510a0a->leave($__internal_a6416a82fca3bee07588ba71392f1130a312b397998ed5c429ec952332510a0a_prof);

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
        return array (  31 => 6,  27 => 5,  22 => 2,);
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
