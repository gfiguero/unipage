<?php

/* GoogleBundle:Analytics:impression.js.twig */
class __TwigTemplate_eadefa15d8327d3bd43fb620acda12ca9af5e01fad9dab851e5522bb70b4800f extends Twig_Template
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
";
        // line 3
        if ($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "isEnhancedEcommerce", array())) {
            // line 4
            echo "  // Enhanced Ecommerce Impressions
  // @see https://developers.google.com/analytics/devguides/collection/analyticsjs/enhanced-ecommerce#measuring-impressions
  // Note: Enhanced ecommerce plugin is required but not included in this template

  ";
            // line 8
            if ($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "hasImpressions", array(0 => "detail"), "method")) {
                // line 9
                echo "  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "getImpressions", array(0 => "detail"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["impression"]) {
                    // line 10
                    echo "  ga('";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "js", null, true);
                    echo "ec:addImpression', { // Provide product details in an impressionFieldObject.
    'id': '";
                    // line 11
                    echo twig_escape_filter($this->env, $this->getAttribute($context["impression"], "id", array()), "js");
                    echo "',             // Impression ID (string).
    'name': '";
                    // line 12
                    echo twig_escape_filter($this->env, $this->getAttribute($context["impression"], "title", array()), "js");
                    echo "',        // Impression name (string).
    'category': '";
                    // line 13
                    echo twig_escape_filter($this->env, $this->getAttribute($context["impression"], "category", array()), "js");
                    echo "', // Impression category (string).
    'brand': '";
                    // line 14
                    echo twig_escape_filter($this->env, $this->getAttribute($context["impression"], "brand", array()), "js");
                    echo "',       // Impression brand (string).
    'variant': '";
                    // line 15
                    echo twig_escape_filter($this->env, $this->getAttribute($context["impression"], "variant", array()), "js");
                    echo "',   // Impression variant (string).
    'price': '";
                    // line 16
                    echo twig_escape_filter($this->env, $this->getAttribute($context["impression"], "price", array()), "js");
                    echo "',       // Impression price (currency).
    'list': '";
                    // line 17
                    echo twig_escape_filter($this->env, $this->getAttribute($context["impression"], "list", array()), "js");
                    echo "'          // Impression coupon (string).
  });
  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['impression'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "GoogleBundle:Analytics:impression.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 20,  66 => 17,  62 => 16,  58 => 15,  54 => 14,  50 => 13,  46 => 12,  42 => 11,  37 => 10,  32 => 9,  30 => 8,  24 => 4,  22 => 3,  19 => 2,);
    }
}
/* {# @param string key - Tracker key #}*/
/* */
/* {% if google_analytics.isEnhancedEcommerce %}*/
/*   // Enhanced Ecommerce Impressions*/
/*   // @see https://developers.google.com/analytics/devguides/collection/analyticsjs/enhanced-ecommerce#measuring-impressions*/
/*   // Note: Enhanced ecommerce plugin is required but not included in this template*/
/* */
/*   {% if google_analytics.hasImpressions("detail") %}*/
/*   {% for impression in google_analytics.getImpressions("detail") %}*/
/*   ga('{{ google_analytics.trackerName(key) }}ec:addImpression', { // Provide product details in an impressionFieldObject.*/
/*     'id': '{{ impression.id | escape('js') }}',             // Impression ID (string).*/
/*     'name': '{{ impression.title | escape('js') }}',        // Impression name (string).*/
/*     'category': '{{ impression.category | escape('js') }}', // Impression category (string).*/
/*     'brand': '{{ impression.brand | escape('js') }}',       // Impression brand (string).*/
/*     'variant': '{{ impression.variant | escape('js') }}',   // Impression variant (string).*/
/*     'price': '{{ impression.price | escape('js') }}',       // Impression price (currency).*/
/*     'list': '{{ impression.list | escape('js') }}'          // Impression coupon (string).*/
/*   });*/
/*   {% endfor %}*/
/*   {% endif %}*/
/* {% endif %}*/
/* */
