<?php

/* GoogleBundle:Analytics:dashboard.html.twig */
class __TwigTemplate_9f8dbd4821cbbffcbbb09e52a17ada1a307176d77dee05b649d9f2244122309c extends Twig_Template
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
        echo "<script src=\"https://www.google.com/jsapi\"></script>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/google/js/gdash-1.0.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://apis.google.com/js/client.js?onload=gadashInit\"></script>

<script>

    var config = {
            'apiKey'   : '";
        // line 8
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "apiKey", array()), "js"), "html", null, true);
        echo "',
            'clientId' : '";
        // line 9
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "clientId", array()), "js"), "html", null, true);
        echo "',
            'tableId'  : '";
        // line 10
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : null), "tableId", array()), "js"), "html", null, true);
        echo "'
    };
    
    ";
        // line 13
        if (array_key_exists("authorizeButton", $context)) {
            // line 14
            echo "        config.authorizeButton = '";
            echo twig_escape_filter($this->env, (isset($context["authorizeButton"]) ? $context["authorizeButton"] : null), "html", null, true);
            echo "';
    ";
        }
        // line 16
        echo "    
    gadash.configKeys(config);
    
    ";
        // line 19
        if (array_key_exists("initCallback", $context)) {
            // line 20
            echo "        gadash.initCallback = ";
            echo twig_escape_filter($this->env, (isset($context["initCallback"]) ? $context["initCallback"] : null), "html", null, true);
            echo ";
    ";
        }
        // line 22
        echo "
</script>";
    }

    public function getTemplateName()
    {
        return "GoogleBundle:Analytics:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 22,  60 => 20,  58 => 19,  53 => 16,  47 => 14,  45 => 13,  39 => 10,  35 => 9,  31 => 8,  22 => 2,  19 => 1,);
    }
}
/* <script src="https://www.google.com/jsapi"></script>*/
/* <script src="{{ asset('bundles/google/js/gdash-1.0.js') }}"></script>*/
/* <script src="https://apis.google.com/js/client.js?onload=gadashInit"></script>*/
/* */
/* <script>*/
/* */
/*     var config = {*/
/*             'apiKey'   : '{{ google_analytics.apiKey|e('js') }}',*/
/*             'clientId' : '{{ google_analytics.clientId|e('js') }}',*/
/*             'tableId'  : '{{ google_analytics.tableId|e('js') }}'*/
/*     };*/
/*     */
/*     {% if authorizeButton is defined %}*/
/*         config.authorizeButton = '{{ authorizeButton }}';*/
/*     {% endif %}*/
/*     */
/*     gadash.configKeys(config);*/
/*     */
/*     {% if initCallback is defined %}*/
/*         gadash.initCallback = {{ initCallback }};*/
/*     {% endif %}*/
/* */
/* </script>*/
