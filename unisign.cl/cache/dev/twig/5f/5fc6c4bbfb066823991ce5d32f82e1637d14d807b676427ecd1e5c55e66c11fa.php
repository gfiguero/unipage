<?php

/* GoogleBundle:Analytics:transaction.js.twig */
class __TwigTemplate_6d67fb0a42d1a8cbe0c1efee2e130c5b0d66f5c1c7852ed3da6217b235731634 extends Twig_Template
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
        $__internal_959fb9ee3e72473b2a431091d4849f6cb826bd049801fd89793bd41f5d7dbedf = $this->env->getExtension("native_profiler");
        $__internal_959fb9ee3e72473b2a431091d4849f6cb826bd049801fd89793bd41f5d7dbedf->enter($__internal_959fb9ee3e72473b2a431091d4849f6cb826bd049801fd89793bd41f5d7dbedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GoogleBundle:Analytics:transaction.js.twig"));

        // line 2
        echo "
";
        // line 3
        if ($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "isEnhancedEcommerce", array())) {
            // line 4
            echo "  // Enhanced Ecommerce Transactions
  // @see https://developers.google.com/analytics/devguides/collection/analyticsjs/enhanced-ecommerce#measuring-transactions
  // Note: Enhanced Ecommerce do need to be initialized prior to a page view or event
  ";
            // line 7
            if ($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "isTransactionValid", array())) {
                // line 8
                echo "  ";
                $context["transaction"] = $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "transaction", array());
                // line 9
                echo "  ga('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"), "js", null, true);
                echo "require', 'ec');
  
  ";
                // line 11
                if ($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "hasItems", array())) {
                    // line 12
                    echo "  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "getItems", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 13
                        echo "  ga('";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"), "js", null, true);
                        echo "ec:addProduct', { // Provide product details in an productFieldObject.
    'id': '";
                        // line 14
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "js");
                        echo "',            // Product ID (string).
    'name': '";
                        // line 15
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "title", array()), "js");
                        echo "',        // Product name (string).
    'category': '";
                        // line 16
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "category", array()), "js");
                        echo "', // Product category (string).
    'brand': '";
                        // line 17
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "brand", array()), "js");
                        echo "',       // Product brand (string).
    'variant': '";
                        // line 18
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "variant", array()), "js");
                        echo "',   // Product variant (string).
    'price': '";
                        // line 19
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "js");
                        echo "',       // Product price (currency).
    'coupon': '";
                        // line 20
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "coupon", array()), "js");
                        echo "',     // Product coupon (string).
    'quantity': ";
                        // line 21
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "quantity", array()), "js");
                        echo "    // Product quantity (number).
  });
  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 24
                    echo "  ";
                }
                // line 25
                echo "
  ga('";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"), "js", null, true);
                echo "ec:setAction', 'purchase', { // Transaction details are provided in an actionFieldObject.
    'id': '";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : $this->getContext($context, "transaction")), "orderNumber", array()), "js");
                echo "',          // (Required) Transaction id (string).
    'affiliation': '";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : $this->getContext($context, "transaction")), "affiliation", array()), "js");
                echo "', // Affiliation (string).
    'revenue': '";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : $this->getContext($context, "transaction")), "revenue", array()), "js");
                echo "',         // Revenue (currency).
    'tax': '";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : $this->getContext($context, "transaction")), "tax", array()), "js");
                echo "',                 // Tax (currency).
    'shipping': '";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : $this->getContext($context, "transaction")), "shipping", array()), "js");
                echo "',       // Shipping (currency).
    'coupon': '";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : $this->getContext($context, "transaction")), "coupon", array()), "js");
                echo "'            // Transaction coupon (string).
  });
  ";
            }
        } else {
            // line 36
            echo "  // Classic Transactions
  // @see https://developers.google.com/analytics/devguides/collection/upgrade/reference/gajs-analyticsjs#ecommerce
  // Note: Classic Transaction do have a native send method, so they do not need to be initialized prior to page views
  ";
            // line 39
            if ($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "isTransactionValid", array())) {
                // line 40
                echo "  ";
                $context["transaction"] = $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "transaction", array());
                // line 41
                echo "  ga('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"), "js", null, true);
                echo "require', 'ecommerce');
  ga('";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"), "js", null, true);
                echo "ecommerce:addTransaction', {
    'id': '";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : $this->getContext($context, "transaction")), "orderNumber", array()), "js");
                echo "',          // Transaction ID. Required
    'affiliation': '";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : $this->getContext($context, "transaction")), "affiliation", array()), "js");
                echo "', // Affiliation or store name OPTIONAL
    'revenue': '";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : $this->getContext($context, "transaction")), "revenue", array()), "js");
                echo "',         // Revenue
    'shipping': '";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : $this->getContext($context, "transaction")), "shipping", array()), "js");
                echo "',       // Shipping OPTIONAL
    'tax': '";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : $this->getContext($context, "transaction")), "tax", array()), "js");
                echo "'                  // Tax OPTIONAL
  });
  ";
                // line 49
                if ($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "hasItems", array())) {
                    // line 50
                    echo "  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 51
                        echo "  ga('";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"), "js", null, true);
                        echo "ecommerce:addItem', {
    'id': '";
                        // line 52
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "orderNumber", array()), "js");
                        echo "',    // Transaction ID. Required
    'name': '";
                        // line 53
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "js");
                        echo "',         // Product name. Required
    'sku': '";
                        // line 54
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "js");
                        echo "',           // SKU/code
    'category': '";
                        // line 55
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "category", array()), "js");
                        echo "', // Category or variation
    'price': '";
                        // line 56
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "price", array()), "js");
                        echo "',       // Unit price
    'quantity': '";
                        // line 57
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "js");
                        echo "'  // Quantity
  });
  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    echo "  ";
                }
                // line 61
                echo "  ga('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"), "js", null, true);
                echo "ecommerce:send');
  ";
            }
        }
        
        $__internal_959fb9ee3e72473b2a431091d4849f6cb826bd049801fd89793bd41f5d7dbedf->leave($__internal_959fb9ee3e72473b2a431091d4849f6cb826bd049801fd89793bd41f5d7dbedf_prof);

    }

    public function getTemplateName()
    {
        return "GoogleBundle:Analytics:transaction.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 61,  210 => 60,  201 => 57,  197 => 56,  193 => 55,  189 => 54,  185 => 53,  181 => 52,  176 => 51,  171 => 50,  169 => 49,  164 => 47,  160 => 46,  156 => 45,  152 => 44,  148 => 43,  144 => 42,  139 => 41,  136 => 40,  134 => 39,  129 => 36,  122 => 32,  118 => 31,  114 => 30,  110 => 29,  106 => 28,  102 => 27,  98 => 26,  95 => 25,  92 => 24,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  50 => 13,  45 => 12,  43 => 11,  37 => 9,  34 => 8,  32 => 7,  27 => 4,  25 => 3,  22 => 2,);
    }
}
/* {# @param string key - Tracker key #}*/
/* */
/* {% if google_analytics.isEnhancedEcommerce %}*/
/*   // Enhanced Ecommerce Transactions*/
/*   // @see https://developers.google.com/analytics/devguides/collection/analyticsjs/enhanced-ecommerce#measuring-transactions*/
/*   // Note: Enhanced Ecommerce do need to be initialized prior to a page view or event*/
/*   {% if google_analytics.isTransactionValid %}*/
/*   {% set transaction = google_analytics.transaction %}*/
/*   ga('{{ google_analytics.trackerName(key) }}require', 'ec');*/
/*   */
/*   {% if google_analytics.hasItems %}*/
/*   {% for product in google_analytics.getItems %}*/
/*   ga('{{ google_analytics.trackerName(key) }}ec:addProduct', { // Provide product details in an productFieldObject.*/
/*     'id': '{{ product.id | escape('js') }}',            // Product ID (string).*/
/*     'name': '{{ product.title | escape('js') }}',        // Product name (string).*/
/*     'category': '{{ product.category | escape('js') }}', // Product category (string).*/
/*     'brand': '{{ product.brand | escape('js') }}',       // Product brand (string).*/
/*     'variant': '{{ product.variant | escape('js') }}',   // Product variant (string).*/
/*     'price': '{{ product.price | escape('js') }}',       // Product price (currency).*/
/*     'coupon': '{{ product.coupon | escape('js') }}',     // Product coupon (string).*/
/*     'quantity': {{ product.quantity | escape('js') }}    // Product quantity (number).*/
/*   });*/
/*   {% endfor %}*/
/*   {% endif %}*/
/* */
/*   ga('{{ google_analytics.trackerName(key) }}ec:setAction', 'purchase', { // Transaction details are provided in an actionFieldObject.*/
/*     'id': '{{ transaction.orderNumber | escape('js') }}',          // (Required) Transaction id (string).*/
/*     'affiliation': '{{ transaction.affiliation | escape('js') }}', // Affiliation (string).*/
/*     'revenue': '{{ transaction.revenue | escape('js') }}',         // Revenue (currency).*/
/*     'tax': '{{ transaction.tax | escape('js') }}',                 // Tax (currency).*/
/*     'shipping': '{{ transaction.shipping | escape('js') }}',       // Shipping (currency).*/
/*     'coupon': '{{ transaction.coupon | escape('js') }}'            // Transaction coupon (string).*/
/*   });*/
/*   {% endif %}*/
/* {% else %}*/
/*   // Classic Transactions*/
/*   // @see https://developers.google.com/analytics/devguides/collection/upgrade/reference/gajs-analyticsjs#ecommerce*/
/*   // Note: Classic Transaction do have a native send method, so they do not need to be initialized prior to page views*/
/*   {% if google_analytics.isTransactionValid %}*/
/*   {% set transaction = google_analytics.transaction %}*/
/*   ga('{{ google_analytics.trackerName(key) }}require', 'ecommerce');*/
/*   ga('{{ google_analytics.trackerName(key) }}ecommerce:addTransaction', {*/
/*     'id': '{{ transaction.orderNumber | escape('js') }}',          // Transaction ID. Required*/
/*     'affiliation': '{{ transaction.affiliation | escape('js') }}', // Affiliation or store name OPTIONAL*/
/*     'revenue': '{{ transaction.revenue | escape('js') }}',         // Revenue*/
/*     'shipping': '{{ transaction.shipping | escape('js') }}',       // Shipping OPTIONAL*/
/*     'tax': '{{ transaction.tax | escape('js') }}'                  // Tax OPTIONAL*/
/*   });*/
/*   {% if google_analytics.hasItems %}*/
/*   {% for item in google_analytics.items %}*/
/*   ga('{{ google_analytics.trackerName(key) }}ecommerce:addItem', {*/
/*     'id': '{{ item.orderNumber | escape('js') }}',    // Transaction ID. Required*/
/*     'name': '{{ item.name | escape('js') }}',         // Product name. Required*/
/*     'sku': '{{ item.id | escape('js') }}',           // SKU/code*/
/*     'category': '{{ item.category | escape('js') }}', // Category or variation*/
/*     'price': '{{ item.price | escape('js') }}',       // Unit price*/
/*     'quantity': '{{ item.quantity | escape('js') }}'  // Quantity*/
/*   });*/
/*   {% endfor %}*/
/*   {% endif %}*/
/*   ga('{{ google_analytics.trackerName(key) }}ecommerce:send');*/
/*   {% endif %}*/
/* {% endif %}*/
/* */
