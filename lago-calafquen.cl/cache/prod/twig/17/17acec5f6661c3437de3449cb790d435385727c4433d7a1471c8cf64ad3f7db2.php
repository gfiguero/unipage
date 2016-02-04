<?php

/* :Page:title.html.twig */
class __TwigTemplate_6c8e920e18d06105f17886e7cdbef2b73c9f8568582740fe296d979b5ce62ab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'brand' => array($this, 'block_brand'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('title', $context, $blocks);
    }

    public function block_title($context, array $blocks = array())
    {
        // line 2
        echo "    <title>
        ";
        // line 3
        $this->displayBlock('brand', $context, $blocks);
        // line 4
        echo "    </title>
";
    }

    // line 3
    public function block_brand($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return ":Page:title.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 3,  32 => 4,  30 => 3,  27 => 2,  21 => 1,);
    }
}
/* {% block title %}*/
/*     <title>*/
/*         {% block brand %}{% endblock %}*/
/*     </title>*/
/* {% endblock %}*/
/* */
