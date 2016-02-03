<?php

/* GoogleBundle:Analytics:impression.js.twig */
class __TwigTemplate_ce08468f8afa31cb12a47a7b1c0ade6588666d318eb82e1a2dbc67f4e10e9301 extends Twig_Template
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
        $__internal_bb3615a53a292769cd8d718abeba8ec58c8dd1812daaf04eb52a866baebc7f3b = $this->env->getExtension("native_profiler");
        $__internal_bb3615a53a292769cd8d718abeba8ec58c8dd1812daaf04eb52a866baebc7f3b->enter($__internal_bb3615a53a292769cd8d718abeba8ec58c8dd1812daaf04eb52a866baebc7f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GoogleBundle:Analytics:impression.js.twig"));

        // line 2
        echo "
";
        // line 3
        if ($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "isEnhancedEcommerce", array())) {
            // line 4
            echo "  // Enhanced Ecommerce Impressions
  // @see https://developers.google.com/analytics/devguides/collection/analyticsjs/enhanced-ecommerce#measuring-impressions
  // Note: Enhanced ecommerce plugin is required but not included in this template

  ";
            // line 8
            if ($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "hasImpressions", array(0 => "detail"), "method")) {
                // line 9
                echo "  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "getImpressions", array(0 => "detail"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["impression"]) {
                    // line 10
                    echo "  ga('";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"), "js", null, true);
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
        
        $__internal_bb3615a53a292769cd8d718abeba8ec58c8dd1812daaf04eb52a866baebc7f3b->leave($__internal_bb3615a53a292769cd8d718abeba8ec58c8dd1812daaf04eb52a866baebc7f3b_prof);

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
        return array (  78 => 20,  69 => 17,  65 => 16,  61 => 15,  57 => 14,  53 => 13,  49 => 12,  45 => 11,  40 => 10,  35 => 9,  33 => 8,  27 => 4,  25 => 3,  22 => 2,);
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
