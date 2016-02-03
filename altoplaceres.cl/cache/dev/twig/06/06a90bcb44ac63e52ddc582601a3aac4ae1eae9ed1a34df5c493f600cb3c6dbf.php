<?php

/* GoogleBundle:Analytics:pageview.js.twig */
class __TwigTemplate_a7b99030a9f2d7e06410ad0e622cfef4fb48b8de24bf230f515d00457af057ca extends Twig_Template
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
        $__internal_535174a16e772c8ef404d31f17bd29fcb9d15208245f0b738bd54b344ded5d9f = $this->env->getExtension("native_profiler");
        $__internal_535174a16e772c8ef404d31f17bd29fcb9d15208245f0b738bd54b344ded5d9f->enter($__internal_535174a16e772c8ef404d31f17bd29fcb9d15208245f0b738bd54b344ded5d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GoogleBundle:Analytics:pageview.js.twig"));

        // line 2
        echo "
// Pageview
// @see https://developers.google.com/analytics/devguides/collection/analyticsjs/pages
";
        // line 5
        if ($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "hasPageViewQueue", array())) {
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "pageViewQueue", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pageView"]) {
                // line 7
                echo "ga('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"), "js", null, true);
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
        if ($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "hasCustomPageView", array())) {
            // line 11
            echo "ga('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"), "js", null, true);
            echo "send', 'pageview', '";
            echo $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "getCustomPageView", array(), "method");
            echo "');
";
        } else {
            // line 13
            echo "if (window.location.hash) {
  ga('";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"), "js", null, true);
            echo "send', 'pageview', '";
            echo $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "getRequestUri", array(), "method");
            echo "'+window.location.hash);
} else {
  ga('";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"), "js", null, true);
            echo "send', 'pageview', '";
            echo $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "getRequestUri", array(), "method");
            echo "');
}
";
        }
        
        $__internal_535174a16e772c8ef404d31f17bd29fcb9d15208245f0b738bd54b344ded5d9f->leave($__internal_535174a16e772c8ef404d31f17bd29fcb9d15208245f0b738bd54b344ded5d9f_prof);

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
        return array (  65 => 16,  58 => 14,  55 => 13,  47 => 11,  45 => 10,  33 => 7,  29 => 6,  27 => 5,  22 => 2,);
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
