<?php

/* GoogleBundle:Analytics:configuration.js.twig */
class __TwigTemplate_c6144271f3f23fc72aaa3837e980e02daff97827bc26aaa81fc44e83062e0177 extends Twig_Template
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
        $__internal_819408e575b44264569bb9c5076699863317757f13c02005b1e50d5a887a5ba1 = $this->env->getExtension("native_profiler");
        $__internal_819408e575b44264569bb9c5076699863317757f13c02005b1e50d5a887a5ba1->enter($__internal_819408e575b44264569bb9c5076699863317757f13c02005b1e50d5a887a5ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GoogleBundle:Analytics:configuration.js.twig"));

        // line 2
        echo "
// Configuration
var config = {};
// Will be an empty string if includeNamePrefix = false
config['name'] = '";
        // line 6
        echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"), "."), "js", null, true);
        echo "';
config['cookieDomain'] = ";
        // line 7
        echo (($this->getAttribute((isset($context["tracker"]) ? $context["tracker"] : $this->getContext($context, "tracker")), "domain", array())) ? ((("'" . $this->getAttribute((isset($context["tracker"]) ? $context["tracker"] : $this->getContext($context, "tracker")), "domain", array())) . "'")) : ("auto"));
        echo ";
config['allowAnchor'] = ";
        // line 8
        echo (($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "getAllowAnchor", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method")) ? ("true") : ("false"));
        echo ";
config['allowLinker'] = ";
        // line 9
        echo (($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "getAllowLinker", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method")) ? ("true") : ("false"));
        echo ";
";
        // line 10
        $context["siteSpeedSampleRate"] = $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "getSiteSpeedSampleRate", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method");
        // line 11
        if ((array_key_exists("siteSpeedSampleRate", $context) &&  !(null === (isset($context["siteSpeedSampleRate"]) ? $context["siteSpeedSampleRate"] : $this->getContext($context, "siteSpeedSampleRate"))))) {
            // line 12
            echo "config['siteSpeedSampleRate'] = ";
            echo twig_escape_filter($this->env, (isset($context["siteSpeedSampleRate"]) ? $context["siteSpeedSampleRate"] : $this->getContext($context, "siteSpeedSampleRate")), "js", null, true);
            echo ";
";
        }
        // line 14
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true))) {
            // line 15
            echo "config['userId'] = '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "js", null, true);
            echo "';
";
        }
        // line 17
        echo "ga('create', '";
        echo $this->getAttribute((isset($context["tracker"]) ? $context["tracker"] : $this->getContext($context, "tracker")), "accountId", array());
        echo "', 'auto', config);
";
        
        $__internal_819408e575b44264569bb9c5076699863317757f13c02005b1e50d5a887a5ba1->leave($__internal_819408e575b44264569bb9c5076699863317757f13c02005b1e50d5a887a5ba1_prof);

    }

    public function getTemplateName()
    {
        return "GoogleBundle:Analytics:configuration.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  56 => 15,  54 => 14,  48 => 12,  46 => 11,  44 => 10,  40 => 9,  36 => 8,  32 => 7,  28 => 6,  22 => 2,);
    }
}
/* {# @param string key - Tracker key #}*/
/* */
/* // Configuration*/
/* var config = {};*/
/* // Will be an empty string if includeNamePrefix = false*/
/* config['name'] = '{{ google_analytics.trackerName(key)|trim('.') }}';*/
/* config['cookieDomain'] = {{ ((tracker.domain) ? ("'" ~ tracker.domain ~ "'")|raw : 'auto' ) }};*/
/* config['allowAnchor'] = {{ ((google_analytics.getAllowAnchor(key)) ? 'true' : 'false' ) }};*/
/* config['allowLinker'] = {{ ((google_analytics.getAllowLinker(key)) ? 'true' : 'false' ) }};*/
/* {% set siteSpeedSampleRate = google_analytics.getSiteSpeedSampleRate(key) %}*/
/* {% if siteSpeedSampleRate is defined and siteSpeedSampleRate is not null %}*/
/* config['siteSpeedSampleRate'] = {{ siteSpeedSampleRate }};*/
/* {% endif %}*/
/* {% if app.user is defined and app.user.id is defined %}*/
/* config['userId'] = '{{ app.user.id }}';*/
/* {% endif %}*/
/* ga('create', '{{ tracker.accountId | raw }}', 'auto', config);*/
/* */
