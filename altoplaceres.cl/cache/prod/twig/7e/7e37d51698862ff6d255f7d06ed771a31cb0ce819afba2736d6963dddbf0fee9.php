<?php

/* :Page:base.html.twig */
class __TwigTemplate_a342ea5425a8df136de71f690a1fd08fbe1b88f4b5d15e63a788bcef68a09e68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate(":Page:meta.html.twig", ":Page:base.html.twig", 10);
        // line 10
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'.":Page:meta.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->loadTemplate(":Page:title.html.twig", ":Page:base.html.twig", 11);
        // line 11
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'.":Page:title.html.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $_trait_2 = $this->loadTemplate(":Page:stylesheet.html.twig", ":Page:base.html.twig", 12);
        // line 12
        if (!$_trait_2->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'.":Page:stylesheet.html.twig".'" cannot be used as a trait.');
        }
        $_trait_2_blocks = $_trait_2->getBlocks();

        $_trait_3 = $this->loadTemplate(":Page:navbar.html.twig", ":Page:base.html.twig", 16);
        // line 16
        if (!$_trait_3->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'.":Page:navbar.html.twig".'" cannot be used as a trait.');
        }
        $_trait_3_blocks = $_trait_3->getBlocks();

        $_trait_4 = $this->loadTemplate(":Page:header.html.twig", ":Page:base.html.twig", 17);
        // line 17
        if (!$_trait_4->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'.":Page:header.html.twig".'" cannot be used as a trait.');
        }
        $_trait_4_blocks = $_trait_4->getBlocks();

        $_trait_5 = $this->loadTemplate(":Page:javascript.html.twig", ":Page:base.html.twig", 26);
        // line 26
        if (!$_trait_5->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'.":Page:javascript.html.twig".'" cannot be used as a trait.');
        }
        $_trait_5_blocks = $_trait_5->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks,
            $_trait_3_blocks,
            $_trait_4_blocks,
            $_trait_5_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'meta' => array($this, 'block_meta'),
                'title' => array($this, 'block_title'),
                'stylesheet' => array($this, 'block_stylesheet'),
                'navbar' => array($this, 'block_navbar'),
                'header' => array($this, 'block_header'),
                'highlight' => array($this, 'block_highlight'),
                'missionvision' => array($this, 'block_missionvision'),
                'service' => array($this, 'block_service'),
                'link' => array($this, 'block_link'),
                'body' => array($this, 'block_body'),
                'contact' => array($this, 'block_contact'),
                'footer' => array($this, 'block_footer'),
                'signature' => array($this, 'block_signature'),
                'javascript' => array($this, 'block_javascript'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->

<html lang=\"es\">

    <head>
        ";
        // line 10
        $this->displayBlock('meta', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 13
        echo "    </head>

    <body>
        ";
        // line 16
        $this->displayBlock('navbar', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('highlight', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('missionvision', $context, $blocks);
        // line 20
        echo "        ";
        $this->displayBlock('service', $context, $blocks);
        // line 21
        echo "        ";
        $this->displayBlock('link', $context, $blocks);
        // line 22
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "        ";
        $this->displayBlock('contact', $context, $blocks);
        // line 24
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 25
        echo "        ";
        $this->displayBlock('signature', $context, $blocks);
        // line 26
        echo "        ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 27
        echo "    </body>

    ";
        // line 29
        $this->loadTemplate("GoogleBundle:Analytics:async_universal.html.twig", ":Page:base.html.twig", 29)->display($context);
        // line 30
        echo "
</html>
";
    }

    // line 10
    public function block_meta($context, array $blocks = array())
    {
        $this->displayParentBlock("meta", $context, $blocks);
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 12
    public function block_stylesheet($context, array $blocks = array())
    {
        $this->displayParentBlock("stylesheet", $context, $blocks);
    }

    // line 16
    public function block_navbar($context, array $blocks = array())
    {
        $this->displayParentBlock("navbar", $context, $blocks);
    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        $this->displayParentBlock("header", $context, $blocks);
    }

    // line 18
    public function block_highlight($context, array $blocks = array())
    {
    }

    // line 19
    public function block_missionvision($context, array $blocks = array())
    {
    }

    // line 20
    public function block_service($context, array $blocks = array())
    {
    }

    // line 21
    public function block_link($context, array $blocks = array())
    {
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
    }

    // line 23
    public function block_contact($context, array $blocks = array())
    {
    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 25
    public function block_signature($context, array $blocks = array())
    {
    }

    // line 26
    public function block_javascript($context, array $blocks = array())
    {
        $this->displayParentBlock("javascript", $context, $blocks);
    }

    public function getTemplateName()
    {
        return ":Page:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 26,  220 => 25,  215 => 24,  210 => 23,  205 => 22,  200 => 21,  195 => 20,  190 => 19,  185 => 18,  179 => 17,  173 => 16,  167 => 12,  161 => 11,  155 => 10,  149 => 30,  147 => 29,  143 => 27,  140 => 26,  137 => 25,  134 => 24,  131 => 23,  128 => 22,  125 => 21,  122 => 20,  119 => 19,  116 => 18,  113 => 17,  111 => 16,  106 => 13,  103 => 12,  100 => 11,  98 => 10,  87 => 1,  49 => 26,  42 => 17,  35 => 16,  28 => 12,  21 => 11,  14 => 10,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->*/
/* <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->*/
/* <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->*/
/* <!--[if gt IE 8]><!-->*/
/* */
/* <html lang="es">*/
/* */
/*     <head>*/
/*         {% use ':Page:meta.html.twig' %}{% block meta %}{{ parent() }}{% endblock %}*/
/*         {% use ':Page:title.html.twig' %}{% block title %}{{ parent() }}{% endblock %}*/
/*         {% use ':Page:stylesheet.html.twig' %}{% block stylesheet %}{{ parent() }}{% endblock %}*/
/*     </head>*/
/* */
/*     <body>*/
/*         {% use ':Page:navbar.html.twig' %}{% block navbar %}{{ parent() }}{% endblock %}*/
/*         {% use ':Page:header.html.twig' %}{% block header %}{{ parent() }}{% endblock %}*/
/*         {% block highlight %}{% endblock %}*/
/*         {% block missionvision %}{% endblock %}*/
/*         {% block service %}{% endblock %}*/
/*         {% block link %}{% endblock %}*/
/*         {% block body %}{% endblock %}*/
/*         {% block contact %}{% endblock %}*/
/*         {% block footer %}{% endblock %}*/
/*         {% block signature %}{% endblock %}*/
/*         {% use ':Page:javascript.html.twig' %}{% block javascript %}{{ parent() }}{% endblock %}*/
/*     </body>*/
/* */
/*     {% include "GoogleBundle:Analytics:async_universal.html.twig" %}*/
/* */
/* </html>*/
/* */
