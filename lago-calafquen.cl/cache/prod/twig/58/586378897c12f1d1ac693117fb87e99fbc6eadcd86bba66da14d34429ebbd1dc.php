<?php

/* GoogleBundle:Adwords:track.html.twig */
class __TwigTemplate_434fa92e8021a3e857ee983d335bb8db571d89e7c637ac6ce8d4346652e4a9b5 extends Twig_Template
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
        if ($this->getAttribute((isset($context["google_adwords"]) ? $context["google_adwords"] : null), "hasActiveConversion", array(), "method")) {
            // line 2
            echo "<!-- GOOGLE CODE FOR CONVERSION START -->
<script type=\"text/javascript\">
/* <![CDATA[ */
var google_conversion_id = ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["google_adwords"]) ? $context["google_adwords"] : null), "activeConversion", array()), "getId", array(), "method"), "html", null, true);
            echo ";
var google_conversion_language = \"en\";
var google_conversion_format = \"2\";
var google_conversion_color = \"ffffff\";
var google_conversion_label = \"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["google_adwords"]) ? $context["google_adwords"] : null), "activeConversion", array()), "getLabel", array(), "method"), "html", null, true);
            echo "\";
var google_conversion_value = ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["google_adwords"]) ? $context["google_adwords"] : null), "activeConversion", array()), "getValue", array(), "method"), "html", null, true);
            echo ";
/* ]]> */
</script>
<script type=\"text/javascript\" src=\"https://www.googleadservices.com/pagead/conversion.js\">
</script>
<noscript>
<div style=\"display:inline;\">
<img height=\"1\" width=\"1\" style=\"border-style:none;\" alt=\"\" 
\tsrc=\"https://www.googleadservices.com/pagead/conversion/";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["google_adwords"]) ? $context["google_adwords"] : null), "activeConversion", array()), "getId", array(), "method"), "html", null, true);
            echo "/?label=";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["google_adwords"]) ? $context["google_adwords"] : null), "activeConversion", array()), "getLabel", array(), "method"), "html", null, true);
            echo "&amp;guid=ON&amp;script=0\"/>
</div>
</noscript>
<!-- GOOGLE CODE FOR CONVERSION END -->
";
        }
    }

    public function getTemplateName()
    {
        return "GoogleBundle:Adwords:track.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 18,  37 => 10,  33 => 9,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if google_adwords.hasActiveConversion() %}*/
/* <!-- GOOGLE CODE FOR CONVERSION START -->*/
/* <script type="text/javascript">*/
/* /* <![CDATA[ *//* */
/* var google_conversion_id = {{ google_adwords.activeConversion.getId() }};*/
/* var google_conversion_language = "en";*/
/* var google_conversion_format = "2";*/
/* var google_conversion_color = "ffffff";*/
/* var google_conversion_label = "{{ google_adwords.activeConversion.getLabel() }}";*/
/* var google_conversion_value = {{ google_adwords.activeConversion.getValue() }};*/
/* /* ]]> *//* */
/* </script>*/
/* <script type="text/javascript" src="https://www.googleadservices.com/pagead/conversion.js">*/
/* </script>*/
/* <noscript>*/
/* <div style="display:inline;">*/
/* <img height="1" width="1" style="border-style:none;" alt="" */
/* 	src="https://www.googleadservices.com/pagead/conversion/{{ google_adwords.activeConversion.getId() }}/?label={{ google_adwords.activeConversion.getLabel() }}&amp;guid=ON&amp;script=0"/>*/
/* </div>*/
/* </noscript>*/
/* <!-- GOOGLE CODE FOR CONVERSION END -->*/
/* {% endif %}*/
/* */
