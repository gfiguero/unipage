<?php

/* GoogleBundle:Analytics:product.js.twig */
class __TwigTemplate_2d7bf38ea53562cefc21893ec436f392adbd5692ece3851a8e291dcfa2ad4e4f extends Twig_Template
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
            echo "  // Enhanced Ecommerce Products
  // @see https://developers.google.com/analytics/devguides/collection/analyticsjs/enhanced-ecommerce#add-remove-cart
  // Note: Enhanced ecommerce plugin is required but not included in this template
  
  ";
            // line 8
            if ($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "hasProducts", array(0 => "remove"), "method")) {
                // line 9
                echo "  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "getProducts", array(0 => "remove"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 10
                    echo "  ga('";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "js", null, true);
                    echo "ec:addProduct', { // Provide product details in an productFieldObject.
    'id': '";
                    // line 11
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "js");
                    echo "',             // Product ID (string).
    'name': '";
                    // line 12
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "title", array()), "js");
                    echo "',        // Product name (string).
    'category': '";
                    // line 13
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "category", array()), "js");
                    echo "', // Product category (string).
    'brand': '";
                    // line 14
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "brand", array()), "js");
                    echo "',       // Product brand (string).
    'list': '";
                    // line 15
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "list", array()), "js");
                    echo "',         // Product list (string).
    'variant': '";
                    // line 16
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "variant", array()), "js");
                    echo "',   // Product variant (string).
    'price': '";
                    // line 17
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "js");
                    echo "',       // Product price (currency).
    'coupon': '";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "coupon", array()), "js");
                    echo "',     // Product coupon (string).
    'quantity': ";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "quantity", array()), "js");
                    echo "    // Product quantity (number).
  });
  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "  ga('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "js", null, true);
                echo "ec:setAction', 'remove');
  ";
            }
            // line 24
            echo "
  ";
            // line 25
            if ($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "hasProducts", array(0 => "add"), "method")) {
                // line 26
                echo "  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "getProducts", array(0 => "add"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 27
                    echo "  ga('";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "js", null, true);
                    echo "ec:addProduct', { // Provide product details in an productFieldObject.
    'id': '";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "js");
                    echo "',             // Product ID (string).
    'name': '";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "title", array()), "js");
                    echo "',        // Product name (string).
    'category': '";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "category", array()), "js");
                    echo "', // Product category (string).
    'brand': '";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "brand", array()), "js");
                    echo "',       // Product brand (string).
    'list': '";
                    // line 32
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "list", array()), "js");
                    echo "',         // Product list (string).
    'variant': '";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "variant", array()), "js");
                    echo "',   // Product variant (string).
    'price': '";
                    // line 34
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "js");
                    echo "',       // Product price (currency).
    'coupon': '";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "coupon", array()), "js");
                    echo "',     // Product coupon (string).
    'quantity': ";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "quantity", array()), "js");
                    echo "    // Product quantity (number).
  });
  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "  ga('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "js", null, true);
                echo "ec:setAction', 'add');
  ";
            }
            // line 41
            echo "
  ";
            // line 42
            if ($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "hasProducts", array(0 => "click"), "method")) {
                // line 43
                echo "  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "getProducts", array(0 => "click"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 44
                    echo "  ga('";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "js", null, true);
                    echo "ec:addProduct', { // Provide product details in an productFieldObject.
    'id': '";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "js");
                    echo "',             // Product ID (string).
    'name': '";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "title", array()), "js");
                    echo "',        // Product name (string).
    'category': '";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "category", array()), "js");
                    echo "', // Product category (string).
    'brand': '";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "brand", array()), "js");
                    echo "',       // Product brand (string).
    'list': '";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "list", array()), "js");
                    echo "',         // Product list (string).    
    'variant': '";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "variant", array()), "js");
                    echo "',   // Product variant (string).
    'price': '";
                    // line 51
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "js");
                    echo "',       // Product price (currency).
    'coupon': '";
                    // line 52
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "coupon", array()), "js");
                    echo "',     // Product coupon (string).
    'quantity': ";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "quantity", array()), "js");
                    echo "    // Product quantity (number).
  });
  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "  ga('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "js", null, true);
                echo "ec:setAction', 'click');
  ";
            }
            // line 58
            echo "
  ";
            // line 59
            if ($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "hasProducts", array(0 => "detail"), "method")) {
                // line 60
                echo "  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "getProducts", array(0 => "detail"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 61
                    echo "  ga('";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "js", null, true);
                    echo "ec:addProduct', { // Provide product details in an productFieldObject.
    'id': '";
                    // line 62
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "js");
                    echo "',             // Product ID (string).
    'name': '";
                    // line 63
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "title", array()), "js");
                    echo "',        // Product name (string).
    'category': '";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "category", array()), "js");
                    echo "', // Product category (string).
    'brand': '";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "brand", array()), "js");
                    echo "',       // Product brand (string).
    'list': '";
                    // line 66
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "list", array()), "js");
                    echo "',         // Product list (string).    
    'variant': '";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "variant", array()), "js");
                    echo "',   // Product variant (string).
    'price': '";
                    // line 68
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "js");
                    echo "',       // Product price (currency).
    'coupon': '";
                    // line 69
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "coupon", array()), "js");
                    echo "',     // Product coupon (string).
    'quantity': ";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "quantity", array()), "js");
                    echo "    // Product quantity (number).
  });
  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "  ga('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "js", null, true);
                echo "ec:setAction', 'detail');
  ";
            }
            // line 74
            echo "  
";
        }
    }

    public function getTemplateName()
    {
        return "GoogleBundle:Analytics:product.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 74,  269 => 73,  260 => 70,  256 => 69,  252 => 68,  248 => 67,  244 => 66,  240 => 65,  236 => 64,  232 => 63,  228 => 62,  223 => 61,  218 => 60,  216 => 59,  213 => 58,  207 => 56,  198 => 53,  194 => 52,  190 => 51,  186 => 50,  182 => 49,  178 => 48,  174 => 47,  170 => 46,  166 => 45,  161 => 44,  156 => 43,  154 => 42,  151 => 41,  145 => 39,  136 => 36,  132 => 35,  128 => 34,  124 => 33,  120 => 32,  116 => 31,  112 => 30,  108 => 29,  104 => 28,  99 => 27,  94 => 26,  92 => 25,  89 => 24,  83 => 22,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  58 => 15,  54 => 14,  50 => 13,  46 => 12,  42 => 11,  37 => 10,  32 => 9,  30 => 8,  24 => 4,  22 => 3,  19 => 2,);
    }
}
/* {# @param string key - Tracker key #}*/
/* */
/* {% if google_analytics.isEnhancedEcommerce %}*/
/*   // Enhanced Ecommerce Products*/
/*   // @see https://developers.google.com/analytics/devguides/collection/analyticsjs/enhanced-ecommerce#add-remove-cart*/
/*   // Note: Enhanced ecommerce plugin is required but not included in this template*/
/*   */
/*   {% if google_analytics.hasProducts("remove") %}*/
/*   {% for product in google_analytics.getProducts("remove") %}*/
/*   ga('{{ google_analytics.trackerName(key) }}ec:addProduct', { // Provide product details in an productFieldObject.*/
/*     'id': '{{ product.id | escape('js') }}',             // Product ID (string).*/
/*     'name': '{{ product.title | escape('js') }}',        // Product name (string).*/
/*     'category': '{{ product.category | escape('js') }}', // Product category (string).*/
/*     'brand': '{{ product.brand | escape('js') }}',       // Product brand (string).*/
/*     'list': '{{ product.list | escape('js') }}',         // Product list (string).*/
/*     'variant': '{{ product.variant | escape('js') }}',   // Product variant (string).*/
/*     'price': '{{ product.price | escape('js') }}',       // Product price (currency).*/
/*     'coupon': '{{ product.coupon | escape('js') }}',     // Product coupon (string).*/
/*     'quantity': {{ product.quantity | escape('js') }}    // Product quantity (number).*/
/*   });*/
/*   {% endfor %}*/
/*   ga('{{ google_analytics.trackerName(key) }}ec:setAction', 'remove');*/
/*   {% endif %}*/
/* */
/*   {% if google_analytics.hasProducts("add") %}*/
/*   {% for product in google_analytics.getProducts("add") %}*/
/*   ga('{{ google_analytics.trackerName(key) }}ec:addProduct', { // Provide product details in an productFieldObject.*/
/*     'id': '{{ product.id | escape('js') }}',             // Product ID (string).*/
/*     'name': '{{ product.title | escape('js') }}',        // Product name (string).*/
/*     'category': '{{ product.category | escape('js') }}', // Product category (string).*/
/*     'brand': '{{ product.brand | escape('js') }}',       // Product brand (string).*/
/*     'list': '{{ product.list | escape('js') }}',         // Product list (string).*/
/*     'variant': '{{ product.variant | escape('js') }}',   // Product variant (string).*/
/*     'price': '{{ product.price | escape('js') }}',       // Product price (currency).*/
/*     'coupon': '{{ product.coupon | escape('js') }}',     // Product coupon (string).*/
/*     'quantity': {{ product.quantity | escape('js') }}    // Product quantity (number).*/
/*   });*/
/*   {% endfor %}*/
/*   ga('{{ google_analytics.trackerName(key) }}ec:setAction', 'add');*/
/*   {% endif %}*/
/* */
/*   {% if google_analytics.hasProducts("click") %}*/
/*   {% for product in google_analytics.getProducts("click") %}*/
/*   ga('{{ google_analytics.trackerName(key) }}ec:addProduct', { // Provide product details in an productFieldObject.*/
/*     'id': '{{ product.id | escape('js') }}',             // Product ID (string).*/
/*     'name': '{{ product.title | escape('js') }}',        // Product name (string).*/
/*     'category': '{{ product.category | escape('js') }}', // Product category (string).*/
/*     'brand': '{{ product.brand | escape('js') }}',       // Product brand (string).*/
/*     'list': '{{ product.list | escape('js') }}',         // Product list (string).    */
/*     'variant': '{{ product.variant | escape('js') }}',   // Product variant (string).*/
/*     'price': '{{ product.price | escape('js') }}',       // Product price (currency).*/
/*     'coupon': '{{ product.coupon | escape('js') }}',     // Product coupon (string).*/
/*     'quantity': {{ product.quantity | escape('js') }}    // Product quantity (number).*/
/*   });*/
/*   {% endfor %}*/
/*   ga('{{ google_analytics.trackerName(key) }}ec:setAction', 'click');*/
/*   {% endif %}*/
/* */
/*   {% if google_analytics.hasProducts("detail") %}*/
/*   {% for product in google_analytics.getProducts("detail") %}*/
/*   ga('{{ google_analytics.trackerName(key) }}ec:addProduct', { // Provide product details in an productFieldObject.*/
/*     'id': '{{ product.id | escape('js') }}',             // Product ID (string).*/
/*     'name': '{{ product.title | escape('js') }}',        // Product name (string).*/
/*     'category': '{{ product.category | escape('js') }}', // Product category (string).*/
/*     'brand': '{{ product.brand | escape('js') }}',       // Product brand (string).*/
/*     'list': '{{ product.list | escape('js') }}',         // Product list (string).    */
/*     'variant': '{{ product.variant | escape('js') }}',   // Product variant (string).*/
/*     'price': '{{ product.price | escape('js') }}',       // Product price (currency).*/
/*     'coupon': '{{ product.coupon | escape('js') }}',     // Product coupon (string).*/
/*     'quantity': {{ product.quantity | escape('js') }}    // Product quantity (number).*/
/*   });*/
/*   {% endfor %}*/
/*   ga('{{ google_analytics.trackerName(key) }}ec:setAction', 'detail');*/
/*   {% endif %}  */
/* {% endif %}*/
/* */
