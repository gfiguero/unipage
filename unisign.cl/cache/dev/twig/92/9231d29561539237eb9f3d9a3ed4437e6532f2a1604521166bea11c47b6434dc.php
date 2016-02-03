<?php

/* GoogleBundle:Analytics:dashboard.html.twig */
class __TwigTemplate_cdb2913534157bd39262bb91481189991ad7df9be8393eba5c82d9770e46db8e extends Twig_Template
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
        $__internal_be1ddd3a64e8874a0cbd8ec2b76d02bb52f17b22df03b21e4be4625ab11ecea0 = $this->env->getExtension("native_profiler");
        $__internal_be1ddd3a64e8874a0cbd8ec2b76d02bb52f17b22df03b21e4be4625ab11ecea0->enter($__internal_be1ddd3a64e8874a0cbd8ec2b76d02bb52f17b22df03b21e4be4625ab11ecea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GoogleBundle:Analytics:dashboard.html.twig"));

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
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "apiKey", array()), "js"), "html", null, true);
        echo "',
            'clientId' : '";
        // line 9
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "clientId", array()), "js"), "html", null, true);
        echo "',
            'tableId'  : '";
        // line 10
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics"]) ? $context["google_analytics"] : $this->getContext($context, "google_analytics")), "tableId", array()), "js"), "html", null, true);
        echo "'
    };
    
    ";
        // line 13
        if (array_key_exists("authorizeButton", $context)) {
            // line 14
            echo "        config.authorizeButton = '";
            echo twig_escape_filter($this->env, (isset($context["authorizeButton"]) ? $context["authorizeButton"] : $this->getContext($context, "authorizeButton")), "html", null, true);
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
            echo twig_escape_filter($this->env, (isset($context["initCallback"]) ? $context["initCallback"] : $this->getContext($context, "initCallback")), "html", null, true);
            echo ";
    ";
        }
        // line 22
        echo "
</script>";
        
        $__internal_be1ddd3a64e8874a0cbd8ec2b76d02bb52f17b22df03b21e4be4625ab11ecea0->leave($__internal_be1ddd3a64e8874a0cbd8ec2b76d02bb52f17b22df03b21e4be4625ab11ecea0_prof);

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
        return array (  69 => 22,  63 => 20,  61 => 19,  56 => 16,  50 => 14,  48 => 13,  42 => 10,  38 => 9,  34 => 8,  25 => 2,  22 => 1,);
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
