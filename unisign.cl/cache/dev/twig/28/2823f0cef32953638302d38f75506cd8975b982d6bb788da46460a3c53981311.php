<?php

/* GoogleBundle:Analytics:async_universal.html.twig */
class __TwigTemplate_e18131fd0e66ab0a31013d1cf7a036dd3c733f4775d3f03ba6448cef6eb9c44b extends Twig_Template
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
        $__internal_9bacb1919366e59945c9ab7e99a69bb16355b586022037cf1cc5e51499148722 = $this->env->getExtension("native_profiler");
        $__internal_9bacb1919366e59945c9ab7e99a69bb16355b586022037cf1cc5e51499148722->enter($__internal_9bacb1919366e59945c9ab7e99a69bb16355b586022037cf1cc5e51499148722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GoogleBundle:Analytics:async_universal.html.twig"));

        // line 1
        echo "<!-- Google Analytics -->
<script>
if (AntiMattr == null || typeof(AntiMattr) != 'object') { var AntiMattr = window.AntiMattr = {}; }
AntiMattr.GoogleAnalytics = {};

AntiMattr.GoogleAnalytics.onGatLoad = function(callback) {
    if (typeof ga != \"undefined\") {
        callback();
    } else {
        var listener = this;
        setTimeout(function(){
            listener.onGatLoad(callback);
        },100);
    }
};

/**
 * @see https://developers.google.com/analytics/devguides/collection/analyticsjs/events
 * 
 * @param string   tracker   
 * @param string   category
 * @param string   action
 * @param string   label [optional]
 * @param integer  value [optional and dependent on label]
 * @param bool     nonInteraction
 * @param function callback Execute callback when ga(send) done
 */
AntiMattr.GoogleAnalytics.notifyEvent = function(tracker, category, action, label, value, nonInteraction, callback) {
    var eventTracker = tracker,
        eventCategory = String(category),
        eventAction = String(action),
        eventLabel = null,
        eventValue = null,
        eventNonInteraction = 0,
        eventCallback = null;

    if (typeof label != 'undefined') {
        eventLabel = String(label);
    }
    if (typeof value != 'undefined') {
        eventValue = parseInt(value);
    }
    if (typeof nonInteraction != 'undefined') {
        eventNonInteraction = Number(nonInteraction);
    }
    if (typeof callback != 'undefined') {
        eventCallback = callback;
    }               

    if (typeof ga == \"undefined\") {
        var listener = this;
        setTimeout(function(){
            listener.notifyEvent(
                eventTracker,
                eventCategory,
                eventAction,
                eventLabel,
                eventValue,
                eventNonInteraction,
                eventCallback
            );
        },100);
        return;
    }

    ga(tracker + 'send', 'event', {
      'eventCategory': eventCategory,
      'eventAction': eventAction,
      'eventLabel': eventLabel,
      'eventValue': eventValue,
      'hitCallback': eventCallback,
      'nonInteraction': eventNonInteraction
    });
};

";
        // line 76
        $this->loadTemplate("GoogleBundle:Analytics:source.js.twig", "GoogleBundle:Analytics:async_universal.html.twig", 76)->display($context);
        // line 77
        echo "
// Upgrade documentation
// @see https://developers.google.com/analytics/devguides/collection/upgrade/reference/gajs-analyticsjs
";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "trackers", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["tracker"]) {
            // line 81
            echo "// Start Tracker: ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "

";
            // line 83
            $this->loadTemplate("GoogleBundle:Analytics:configuration.js.twig", "GoogleBundle:Analytics:async_universal.html.twig", 83)->display(array_merge($context, array("key" => $context["key"])));
            // line 84
            echo "
";
            // line 85
            $this->loadTemplate("GoogleBundle:Analytics:plugin.js.twig", "GoogleBundle:Analytics:async_universal.html.twig", 85)->display(array_merge($context, array("key" => $context["key"])));
            // line 86
            echo "
";
            // line 87
            $this->loadTemplate("GoogleBundle:Analytics:custom_variable.js.twig", "GoogleBundle:Analytics:async_universal.html.twig", 87)->display(array_merge($context, array("key" => $context["key"])));
            // line 88
            echo "
";
            // line 89
            $this->loadTemplate("GoogleBundle:Analytics:impression.js.twig", "GoogleBundle:Analytics:async_universal.html.twig", 89)->display(array_merge($context, array("key" => $context["key"])));
            // line 90
            echo "
";
            // line 91
            $this->loadTemplate("GoogleBundle:Analytics:product.js.twig", "GoogleBundle:Analytics:async_universal.html.twig", 91)->display(array_merge($context, array("key" => $context["key"])));
            // line 92
            echo "
";
            // line 93
            $this->loadTemplate("GoogleBundle:Analytics:transaction.js.twig", "GoogleBundle:Analytics:async_universal.html.twig", 93)->display(array_merge($context, array("key" => $context["key"])));
            // line 94
            echo "
";
            // line 95
            $this->loadTemplate("GoogleBundle:Analytics:pageview.js.twig", "GoogleBundle:Analytics:async_universal.html.twig", 95)->display(array_merge($context, array("key" => $context["key"])));
            // line 96
            echo "
";
            // line 97
            $this->loadTemplate("GoogleBundle:Analytics:event.js.twig", "GoogleBundle:Analytics:async_universal.html.twig", 97)->display(array_merge($context, array("key" => $context["key"])));
            // line 98
            echo "
// End Tracker: ";
            // line 99
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tracker'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "</script>
<!-- End Google Analytics -->
";
        
        $__internal_9bacb1919366e59945c9ab7e99a69bb16355b586022037cf1cc5e51499148722->leave($__internal_9bacb1919366e59945c9ab7e99a69bb16355b586022037cf1cc5e51499148722_prof);

    }

    public function getTemplateName()
    {
        return "GoogleBundle:Analytics:async_universal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 101,  169 => 99,  166 => 98,  164 => 97,  161 => 96,  159 => 95,  156 => 94,  154 => 93,  151 => 92,  149 => 91,  146 => 90,  144 => 89,  141 => 88,  139 => 87,  136 => 86,  134 => 85,  131 => 84,  129 => 83,  123 => 81,  106 => 80,  101 => 77,  99 => 76,  22 => 1,);
    }
}
/* <!-- Google Analytics -->*/
/* <script>*/
/* if (AntiMattr == null || typeof(AntiMattr) != 'object') { var AntiMattr = window.AntiMattr = {}; }*/
/* AntiMattr.GoogleAnalytics = {};*/
/* */
/* AntiMattr.GoogleAnalytics.onGatLoad = function(callback) {*/
/*     if (typeof ga != "undefined") {*/
/*         callback();*/
/*     } else {*/
/*         var listener = this;*/
/*         setTimeout(function(){*/
/*             listener.onGatLoad(callback);*/
/*         },100);*/
/*     }*/
/* };*/
/* */
/* /***/
/*  * @see https://developers.google.com/analytics/devguides/collection/analyticsjs/events*/
/*  * */
/*  * @param string   tracker   */
/*  * @param string   category*/
/*  * @param string   action*/
/*  * @param string   label [optional]*/
/*  * @param integer  value [optional and dependent on label]*/
/*  * @param bool     nonInteraction*/
/*  * @param function callback Execute callback when ga(send) done*/
/*  *//* */
/* AntiMattr.GoogleAnalytics.notifyEvent = function(tracker, category, action, label, value, nonInteraction, callback) {*/
/*     var eventTracker = tracker,*/
/*         eventCategory = String(category),*/
/*         eventAction = String(action),*/
/*         eventLabel = null,*/
/*         eventValue = null,*/
/*         eventNonInteraction = 0,*/
/*         eventCallback = null;*/
/* */
/*     if (typeof label != 'undefined') {*/
/*         eventLabel = String(label);*/
/*     }*/
/*     if (typeof value != 'undefined') {*/
/*         eventValue = parseInt(value);*/
/*     }*/
/*     if (typeof nonInteraction != 'undefined') {*/
/*         eventNonInteraction = Number(nonInteraction);*/
/*     }*/
/*     if (typeof callback != 'undefined') {*/
/*         eventCallback = callback;*/
/*     }               */
/* */
/*     if (typeof ga == "undefined") {*/
/*         var listener = this;*/
/*         setTimeout(function(){*/
/*             listener.notifyEvent(*/
/*                 eventTracker,*/
/*                 eventCategory,*/
/*                 eventAction,*/
/*                 eventLabel,*/
/*                 eventValue,*/
/*                 eventNonInteraction,*/
/*                 eventCallback*/
/*             );*/
/*         },100);*/
/*         return;*/
/*     }*/
/* */
/*     ga(tracker + 'send', 'event', {*/
/*       'eventCategory': eventCategory,*/
/*       'eventAction': eventAction,*/
/*       'eventLabel': eventLabel,*/
/*       'eventValue': eventValue,*/
/*       'hitCallback': eventCallback,*/
/*       'nonInteraction': eventNonInteraction*/
/*     });*/
/* };*/
/* */
/* {% include "GoogleBundle:Analytics:source.js.twig" %}*/
/* */
/* // Upgrade documentation*/
/* // @see https://developers.google.com/analytics/devguides/collection/upgrade/reference/gajs-analyticsjs*/
/* {% for key, tracker in google_analytics.trackers %}*/
/* // Start Tracker: {{ key }}*/
/* */
/* {% include "GoogleBundle:Analytics:configuration.js.twig" with {'key': key} %}*/
/* */
/* {% include "GoogleBundle:Analytics:plugin.js.twig" with {'key': key} %}*/
/* */
/* {% include "GoogleBundle:Analytics:custom_variable.js.twig" with {'key': key} %}*/
/* */
/* {% include "GoogleBundle:Analytics:impression.js.twig" with {'key': key} %}*/
/* */
/* {% include "GoogleBundle:Analytics:product.js.twig" with {'key': key} %}*/
/* */
/* {% include "GoogleBundle:Analytics:transaction.js.twig" with {'key': key} %}*/
/* */
/* {% include "GoogleBundle:Analytics:pageview.js.twig" with {'key': key} %}*/
/* */
/* {% include "GoogleBundle:Analytics:event.js.twig" with {'key': key} %}*/
/* */
/* // End Tracker: {{ key }}*/
/* {% endfor %}*/
/* </script>*/
/* <!-- End Google Analytics -->*/
/* */
