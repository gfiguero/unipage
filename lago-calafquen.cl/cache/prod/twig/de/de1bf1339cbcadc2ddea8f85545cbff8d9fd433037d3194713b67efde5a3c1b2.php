<?php

/* GoogleBundle:Analytics:async.html.twig */
class __TwigTemplate_67fda575f87b9d80d287109fe6819feafed4511ffacd2255ce683231b2f7a7bd extends Twig_Template
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
        // line 1
        echo "<script type=\"text/javascript\">
if (AntiMattr == null || typeof(AntiMattr) != 'object') { var AntiMattr = window.AntiMattr = {}; }
AntiMattr.GoogleAnalytics = {};

AntiMattr.GoogleAnalytics.onGatLoad = function(callback) {
    if (typeof _gat != \"undefined\") {
        callback();
    } else {
        var listener = this;
        setTimeout(function(){
            listener.onGatLoad(callback);\t\t\t\t\t
        },100);
    }
};

AntiMattr.GoogleAnalytics.notifyEvent = function(tracker, category, action, label, value) {
    var event = [tracker + '_trackEvent', category, action];
    if (typeof label != 'undefined') {
        event.push(label);
        if (typeof value != 'undefined') {
            event.push(value);
        }
    }
    _gaq.push(event);
};

if ( _gaq == null || typeof(_gaq) != 'array') { var _gaq = window._gaq = []; }

";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackers", array()));
        foreach ($context['_seq'] as $context["key"] => $context["tracker"]) {
            // line 30
            echo "    _gaq.push(['";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => $context["key"]), "method"), "html", null, true);
            echo "_setAccount', '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tracker"], "accountId", array()), "html", null, true);
            echo "']);

    ";
            // line 32
            if ($this->getAttribute($context["tracker"], "domain", array())) {
                // line 33
                echo "        _gaq.push(['";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => $context["key"]), "method"), "html", null, true);
                echo "_setDomainName', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tracker"], "domain", array()), "html", null, true);
                echo "']);

        ";
                // line 35
                if ($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "getAllowAnchor", array(0 => $context["key"]), "method")) {
                    // line 36
                    echo "            _gaq.push(['";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => $context["key"]), "method"), "html", null, true);
                    echo "_setAllowAnchor', true ]);
        ";
                } else {
                    // line 38
                    echo "            _gaq.push(['";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => $context["key"]), "method"), "html", null, true);
                    echo "_setAllowAnchor', false ]);
        ";
                }
                // line 40
                echo "
        ";
                // line 41
                if ($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "getAllowLinker", array(0 => $context["key"]), "method")) {
                    // line 42
                    echo "            _gaq.push(['";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => $context["key"]), "method"), "html", null, true);
                    echo "_setAllowLinker', true ]);
        ";
                } else {
                    // line 44
                    echo "            _gaq.push(['";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => $context["key"]), "method"), "html", null, true);
                    echo "_setAllowLinker', false ]);
        ";
                }
                // line 46
                echo "
        ";
                // line 47
                if ($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "getAllowHash", array(0 => $context["key"]), "method")) {
                    // line 48
                    echo "            _gaq.push(['";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => $context["key"]), "method"), "html", null, true);
                    echo "_setAllowHash', true ]);
        ";
                } else {
                    // line 50
                    echo "            _gaq.push(['";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => $context["key"]), "method"), "html", null, true);
                    echo "_setAllowHash', false ]);
        ";
                }
                // line 52
                echo "    ";
            }
            // line 53
            echo "
    ";
            // line 54
            if ($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "hasCustomVariables", array())) {
                // line 55
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "customVariables", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["customVariable"]) {
                    // line 56
                    echo "            _gaq.push(['";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => $context["key"]), "method"), "html", null, true);
                    echo "_setCustomVar', ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["customVariable"], "index", array()), "html", null, true);
                    echo ", '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["customVariable"], "name", array()), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["customVariable"], "value", array()), "html", null, true);
                    echo "', ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["customVariable"], "scope", array()), "html", null, true);
                    echo "]);
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customVariable'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "    ";
            }
            // line 59
            echo "
    ";
            // line 60
            $context["siteSpeedSampleRate"] = $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "getSiteSpeedSampleRate", array(0 => $context["key"]), "method");
            // line 61
            echo "    ";
            if ((array_key_exists("siteSpeedSampleRate", $context) &&  !(null === (isset($context["siteSpeedSampleRate"]) ? $context["siteSpeedSampleRate"] : null)))) {
                // line 62
                echo "        _gaq.push(['";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => $context["key"]), "method"), "html", null, true);
                echo "_setSiteSpeedSampleRate', ";
                echo twig_escape_filter($this->env, (isset($context["siteSpeedSampleRate"]) ? $context["siteSpeedSampleRate"] : null), "html", null, true);
                echo "]);
    ";
            }
            // line 64
            echo "
    ";
            // line 65
            if ($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "hasPageViewQueue", array())) {
                // line 66
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "pageViewQueue", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["pageView"]) {
                    // line 67
                    echo "            _gaq.push(['";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => $context["key"]), "method"), "html", null, true);
                    echo "_trackPageview', '";
                    echo twig_escape_filter($this->env, $context["pageView"], "html", null, true);
                    echo "']);
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageView'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "    ";
            }
            // line 70
            echo "
    ";
            // line 71
            if ($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "hasCustomPageView", array())) {
                // line 72
                echo "        _gaq.push(['";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => $context["key"]), "method"), "html", null, true);
                echo "_trackPageview', '";
                echo $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "getCustomPageView", array(), "method");
                echo "']);
    ";
            } else {
                // line 74
                echo "        if (window.location.hash) {
            _gaq.push(['";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => $context["key"]), "method"), "html", null, true);
                echo "_trackPageview', ";
                echo twig_jsonencode_filter($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "getRequestUri", array(), "method"));
                echo " + window.location.hash]);
        } else {
            _gaq.push(['";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => $context["key"]), "method"), "html", null, true);
                echo "_trackPageview', ";
                echo twig_jsonencode_filter($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "getRequestUri", array(), "method"));
                echo "]);
        }
    ";
            }
            // line 80
            echo "
    ";
            // line 81
            if ($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "isTransactionValid", array())) {
                // line 82
                echo "        ";
                $context["transaction"] = $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "transaction", array());
                // line 83
                echo "        _gaq.push(['";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => $context["key"]), "method"), "html", null, true);
                echo "_addTrans',
            '";
                // line 84
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "orderNumber", array()), "js"), "html", null, true);
                echo "', // order number required
            '";
                // line 85
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "affiliation", array()), "js"), "html", null, true);
                echo "', // affiliation optional
            '";
                // line 86
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "total", array()), "js"), "html", null, true);
                echo "', // total optional
            '";
                // line 87
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "tax", array()), "js"), "html", null, true);
                echo "', // tax optional
            '";
                // line 88
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "shipping", array()), "js"), "html", null, true);
                echo "', // shipping optional
            '";
                // line 89
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "city", array()), "js"), "html", null, true);
                echo "', // city optional
            '";
                // line 90
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "state", array()), "js"), "html", null, true);
                echo "', // state optional
            '";
                // line 91
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "country", array()), "js"), "html", null, true);
                echo "' // country optional
        ]);

        ";
                // line 94
                if ($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "hasItems", array())) {
                    // line 95
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 96
                        echo "                _gaq.push(['";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => $context["key"]), "method"), "html", null, true);
                        echo "_addItem',
                    '";
                        // line 97
                        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["item"], "orderNumber", array()), "js"), "html", null, true);
                        echo "', // order number required
                    '";
                        // line 98
                        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["item"], "sku", array()), "js"), "html", null, true);
                        echo "', // sku required
                    '";
                        // line 99
                        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "js"), "html", null, true);
                        echo "', // name optional
                    '";
                        // line 100
                        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["item"], "category", array()), "js"), "html", null, true);
                        echo "', // category optional
                    '";
                        // line 101
                        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["item"], "price", array()), "js"), "html", null, true);
                        echo "', // price required
                    '";
                        // line 102
                        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "js"), "html", null, true);
                        echo "' // quantity required
                ]);
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 105
                    echo "        ";
                }
                // line 106
                echo "
        _gaq.push(['";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => $context["key"]), "method"), "html", null, true);
                echo "_trackTrans']);

    ";
            }
            // line 110
            echo "
    ";
            // line 111
            if ($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "hasEventQueue", array())) {
                // line 112
                echo "        AntiMattr.GoogleAnalytics.onGatLoad(function() {
        ";
                // line 113
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "eventQueue", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                    // line 114
                    echo "            AntiMattr.GoogleAnalytics.notifyEvent(
                  '";
                    // line 115
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "trackerName", array(0 => $context["key"]), "method"), "html", null, true);
                    echo "'
                , '";
                    // line 116
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "category", array()), "html", null, true);
                    echo "'
                , '";
                    // line 117
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "action", array()), "html", null, true);
                    echo "'
                ";
                    // line 118
                    if ( !(null === $this->getAttribute($context["event"], "label", array()))) {
                        echo ", '";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "label", array()), "html", null, true);
                        echo "'";
                    }
                    // line 119
                    echo "                ";
                    if ( !(null === $this->getAttribute($context["event"], "value", array()))) {
                        echo ", ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "value", array()), "html", null, true);
                    }
                    // line 120
                    echo "            );
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 122
                echo "        });
    ";
            }
            // line 124
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tracker'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "
(function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? '";
        // line 129
        echo $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "sourceHttps", array());
        echo "' : '";
        echo $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "sourceHttp", array());
        echo "') + '";
        echo $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "sourceEndpoint", array());
        echo "';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
";
    }

    public function getTemplateName()
    {
        return "GoogleBundle:Analytics:async.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 129,  380 => 126,  373 => 124,  369 => 122,  362 => 120,  356 => 119,  350 => 118,  346 => 117,  342 => 116,  338 => 115,  335 => 114,  331 => 113,  328 => 112,  326 => 111,  323 => 110,  317 => 107,  314 => 106,  311 => 105,  302 => 102,  298 => 101,  294 => 100,  290 => 99,  286 => 98,  282 => 97,  277 => 96,  272 => 95,  270 => 94,  264 => 91,  260 => 90,  256 => 89,  252 => 88,  248 => 87,  244 => 86,  240 => 85,  236 => 84,  231 => 83,  228 => 82,  226 => 81,  223 => 80,  215 => 77,  208 => 75,  205 => 74,  197 => 72,  195 => 71,  192 => 70,  189 => 69,  178 => 67,  173 => 66,  171 => 65,  168 => 64,  160 => 62,  157 => 61,  155 => 60,  152 => 59,  149 => 58,  132 => 56,  127 => 55,  125 => 54,  122 => 53,  119 => 52,  113 => 50,  107 => 48,  105 => 47,  102 => 46,  96 => 44,  90 => 42,  88 => 41,  85 => 40,  79 => 38,  73 => 36,  71 => 35,  63 => 33,  61 => 32,  53 => 30,  49 => 29,  19 => 1,);
    }
}
/* <script type="text/javascript">*/
/* if (AntiMattr == null || typeof(AntiMattr) != 'object') { var AntiMattr = window.AntiMattr = {}; }*/
/* AntiMattr.GoogleAnalytics = {};*/
/* */
/* AntiMattr.GoogleAnalytics.onGatLoad = function(callback) {*/
/*     if (typeof _gat != "undefined") {*/
/*         callback();*/
/*     } else {*/
/*         var listener = this;*/
/*         setTimeout(function(){*/
/*             listener.onGatLoad(callback);					*/
/*         },100);*/
/*     }*/
/* };*/
/* */
/* AntiMattr.GoogleAnalytics.notifyEvent = function(tracker, category, action, label, value) {*/
/*     var event = [tracker + '_trackEvent', category, action];*/
/*     if (typeof label != 'undefined') {*/
/*         event.push(label);*/
/*         if (typeof value != 'undefined') {*/
/*             event.push(value);*/
/*         }*/
/*     }*/
/*     _gaq.push(event);*/
/* };*/
/* */
/* if ( _gaq == null || typeof(_gaq) != 'array') { var _gaq = window._gaq = []; }*/
/* */
/* {% for key, tracker in google_analytics.trackers %}*/
/*     _gaq.push(['{{ google_analytics.trackerName(key) }}_setAccount', '{{ tracker.accountId }}']);*/
/* */
/*     {% if tracker.domain %}*/
/*         _gaq.push(['{{ google_analytics.trackerName(key) }}_setDomainName', '{{ tracker.domain }}']);*/
/* */
/*         {% if google_analytics.getAllowAnchor(key) %}*/
/*             _gaq.push(['{{ google_analytics.trackerName(key) }}_setAllowAnchor', true ]);*/
/*         {% else %}*/
/*             _gaq.push(['{{ google_analytics.trackerName(key) }}_setAllowAnchor', false ]);*/
/*         {% endif %}*/
/* */
/*         {% if google_analytics.getAllowLinker(key) %}*/
/*             _gaq.push(['{{ google_analytics.trackerName(key) }}_setAllowLinker', true ]);*/
/*         {% else %}*/
/*             _gaq.push(['{{ google_analytics.trackerName(key) }}_setAllowLinker', false ]);*/
/*         {% endif %}*/
/* */
/*         {% if google_analytics.getAllowHash(key) %}*/
/*             _gaq.push(['{{ google_analytics.trackerName(key) }}_setAllowHash', true ]);*/
/*         {% else %}*/
/*             _gaq.push(['{{ google_analytics.trackerName(key) }}_setAllowHash', false ]);*/
/*         {% endif %}*/
/*     {% endif %}*/
/* */
/*     {% if google_analytics.hasCustomVariables %}*/
/*         {% for customVariable in google_analytics.customVariables %}*/
/*             _gaq.push(['{{ google_analytics.trackerName(key) }}_setCustomVar', {{ customVariable.index }}, '{{ customVariable.name }}', '{{ customVariable.value }}', {{ customVariable.scope }}]);*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* */
/*     {% set siteSpeedSampleRate = google_analytics.getSiteSpeedSampleRate(key) %}*/
/*     {% if siteSpeedSampleRate is defined and siteSpeedSampleRate is not null %}*/
/*         _gaq.push(['{{ google_analytics.trackerName(key) }}_setSiteSpeedSampleRate', {{ siteSpeedSampleRate }}]);*/
/*     {% endif %}*/
/* */
/*     {% if google_analytics.hasPageViewQueue %}*/
/*         {% for pageView in google_analytics.pageViewQueue %}*/
/*             _gaq.push(['{{ google_analytics.trackerName(key) }}_trackPageview', '{{ pageView }}']);*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* */
/*     {% if google_analytics.hasCustomPageView %}*/
/*         _gaq.push(['{{ google_analytics.trackerName(key) }}_trackPageview', '{{ google_analytics.getCustomPageView() | raw }}']);*/
/*     {% else %}*/
/*         if (window.location.hash) {*/
/*             _gaq.push(['{{ google_analytics.trackerName(key) }}_trackPageview', {{ google_analytics.getRequestUri() | json_encode | raw }} + window.location.hash]);*/
/*         } else {*/
/*             _gaq.push(['{{ google_analytics.trackerName(key) }}_trackPageview', {{ google_analytics.getRequestUri() | json_encode | raw }}]);*/
/*         }*/
/*     {% endif %}*/
/* */
/*     {% if google_analytics.isTransactionValid %}*/
/*         {% set transaction = google_analytics.transaction %}*/
/*         _gaq.push(['{{ google_analytics.trackerName(key) }}_addTrans',*/
/*             '{{ transaction.orderNumber | escape('js') }}', // order number required*/
/*             '{{ transaction.affiliation | escape('js') }}', // affiliation optional*/
/*             '{{ transaction.total | escape('js') }}', // total optional*/
/*             '{{ transaction.tax | escape('js') }}', // tax optional*/
/*             '{{ transaction.shipping | escape('js') }}', // shipping optional*/
/*             '{{ transaction.city | escape('js') }}', // city optional*/
/*             '{{ transaction.state | escape('js') }}', // state optional*/
/*             '{{ transaction.country | escape('js') }}' // country optional*/
/*         ]);*/
/* */
/*         {% if google_analytics.hasItems %}*/
/*             {% for item in google_analytics.items %}*/
/*                 _gaq.push(['{{ google_analytics.trackerName(key) }}_addItem',*/
/*                     '{{ item.orderNumber | escape('js') }}', // order number required*/
/*                     '{{ item.sku | escape('js') }}', // sku required*/
/*                     '{{ item.name | escape('js') }}', // name optional*/
/*                     '{{ item.category | escape('js') }}', // category optional*/
/*                     '{{ item.price | escape('js') }}', // price required*/
/*                     '{{ item.quantity | escape('js') }}' // quantity required*/
/*                 ]);*/
/*             {% endfor %}*/
/*         {% endif %}*/
/* */
/*         _gaq.push(['{{ google_analytics.trackerName(key) }}_trackTrans']);*/
/* */
/*     {% endif %}*/
/* */
/*     {% if google_analytics.hasEventQueue %}*/
/*         AntiMattr.GoogleAnalytics.onGatLoad(function() {*/
/*         {% for event in google_analytics.eventQueue %}*/
/*             AntiMattr.GoogleAnalytics.notifyEvent(*/
/*                   '{{ google_analytics.trackerName(key) }}'*/
/*                 , '{{ event.category }}'*/
/*                 , '{{ event.action }}'*/
/*                 {% if event.label is not null %}, '{{ event.label }}'{% endif %}*/
/*                 {% if event.value is not null %}, {{ event.value }}{% endif %}*/
/*             );*/
/*         {% endfor %}*/
/*         });*/
/*     {% endif %}*/
/* */
/* {% endfor %}*/
/* */
/* (function() {*/
/*     var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;*/
/*     ga.src = ('https:' == document.location.protocol ? '{{ google_analytics.sourceHttps | raw }}' : '{{ google_analytics.sourceHttp | raw }}') + '{{ google_analytics.sourceEndpoint | raw }}';*/
/*     var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);*/
/* })();*/
/* </script>*/
/* */
