<?php

/* GoogleBundle:Analytics:configuration.js.twig */
class __TwigTemplate_5e617671866a681081b7df34f801418113ba3231afc25daf37ac107139e7c99d extends Twig_Template
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
// Configuration
var config = {};
// Will be an empty string if includeNamePrefix = false
config['name'] = '";
        // line 6
        echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "."), "js", null, true);
        echo "';
config['cookieDomain'] = ";
        // line 7
        echo (($this->getAttribute((isset($context["tracker"]) ? $context["tracker"] : null), "domain", array())) ? ((("'" . $this->getAttribute((isset($context["tracker"]) ? $context["tracker"] : null), "domain", array())) . "'")) : ("auto"));
        echo ";
config['allowAnchor'] = ";
        // line 8
        echo (($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "getAllowAnchor", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method")) ? ("true") : ("false"));
        echo ";
config['allowLinker'] = ";
        // line 9
        echo (($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "getAllowLinker", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method")) ? ("true") : ("false"));
        echo ";
";
        // line 10
        $context["siteSpeedSampleRate"] = $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "getSiteSpeedSampleRate", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method");
        // line 11
        if ((array_key_exists("siteSpeedSampleRate", $context) &&  !(null === (isset($context["siteSpeedSampleRate"]) ? $context["siteSpeedSampleRate"] : null)))) {
            // line 12
            echo "config['siteSpeedSampleRate'] = ";
            echo twig_escape_filter($this->env, (isset($context["siteSpeedSampleRate"]) ? $context["siteSpeedSampleRate"] : null), "js", null, true);
            echo ";
";
        }
        // line 14
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true))) {
            // line 15
            echo "config['userId'] = '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "js", null, true);
            echo "';
";
        }
        // line 17
        echo "ga('create', '";
        echo $this->getAttribute((isset($context["tracker"]) ? $context["tracker"] : null), "accountId", array());
        echo "', 'auto', config);
";
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
        return array (  59 => 17,  53 => 15,  51 => 14,  45 => 12,  43 => 11,  41 => 10,  37 => 9,  33 => 8,  29 => 7,  25 => 6,  19 => 2,);
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
